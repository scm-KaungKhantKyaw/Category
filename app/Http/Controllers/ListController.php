<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use App\Models\CategoryUniversity;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ListController extends Controller
{
    public function index(){
        $universities = University::select('universities.*', 'categories.category')
                        ->join('category_universities', 'universities.id', '=', 'category_universities.uni_id')
                        ->join('categories', 'categories.id', '=', 'category_universities.cat_id')
                        ->orderBy('uni_id', 'desc')
                        ->paginate(10);
        // dd($universities);
        $name= 'initial';
        return view('index',compact('universities', 'name'));
    }
    public function generate(){
        return view('create');
    }
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'about' => 'required',
        ]);

        if($validator->fails()) {
            return redirect('/create')
            ->withErrors($validator)
            ->withInput();
        }
        University::create([
            'name' =>  $request->name,
            'about' =>  $request->about,
        ]);
        $id=University::orderBy('id', 'desc')->first()->id;
        $category=[];
        if($request->civil == null and $request->electrical == null and $request->mechnical == null and $request->electronic == null and $request->computerscience == null){
            throw ValidationException::withMessages([
                'category' => 'At least one category must choice.'
            ]);
        }
        if($request->civil != null){
            array_push($category,1);
        }
        if($request->electrical != null){
            array_push($category,2);
        }
        if($request->mechnical != null){
            array_push($category,3);
        }
        if($request->electronic != null){
            array_push($category,4);
        }
        if($request->computerscience != null){
            array_push($category,5);
        }
        $arr_len = count($category);
        for($i=0; $i<$arr_len ; $i++){
            CategoryUniversity::create([
                'uni_id' =>  $id,
                'cat_id' =>  $category[$i], 
            ]);
        }
        $universities = University::select('universities.*', 'categories.category')
                        ->join('category_universities', 'universities.id', '=', 'category_universities.uni_id')
                        ->join('categories', 'categories.id', '=', 'category_universities.cat_id')
                        ->orderBy('uni_id', 'desc')
                        ->paginate(10);
        $name='initial';
        return view('index',compact('universities','name'));
    }
}
