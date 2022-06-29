<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create">Create</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">

    <section class="row">
        <div class="col-12">
            {{-- @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif --}}
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
              <div>
                <ul>
            @if (count($universities) > 0)
                @foreach ($universities as $uni)
                @if($uni->name != $name)

                  </ul>
                </div>
                @endif
                @if($uni->name != $name)
                <div class="border rounded p-3 mb-3">
                    <h3 class="text-center">
                        <a href="#">{{ $uni->name }}</a>
                    </h3>
                    <p class="text-center">{{ $uni->about }}</p> <br>
                    <ul style=" list-style-type: square; padding: 0px;">
                    <h5> Categories</h5>
                    <hr class="mx-5">
                      <li class="pe-2 me-3" style="display: inline-block;">
                        <p class="m-0">{{ $uni->category }}</p>
                      </li>
                @endif
                @if($uni->name == $name)
                  <li class="pe-2 me-3" style="display: inline-block;">
                    <p class="m-0" >{{ $uni->category }}</p>
                  </li>
                @endif
                <?php $name=$uni->name; ?>
                @endforeach
            @else
                No post.
            @endif
            
    </section>

        <div style="margin: 40px;"></div>
            {{ $universities->links() }}
        </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>