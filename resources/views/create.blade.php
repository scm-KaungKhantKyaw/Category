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
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="card">
    <div class="card-header">
        <h3>Create A Post</h3>
    </div>
    <div class="card-body">
        {{-- @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
        @endif --}}

        <form action="/create" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">University Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">About University</label>
                <textarea class="form-control  @error('about') is-invalid @enderror" name="about" rows="5">{{ old('about') }}</textarea>
                @error('about')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="dropdown mb-5">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>

              <ul class="dropdown-menu ps-5" aria-labelledby="dropdownMenuLink">
              <li>
                  <div>
                    <input class="form-check-input" type="checkbox" name="civil" value="1" >
                    <label class="form-check-label">Civil</label>
                  </div>
                </li>
                <li>
                  <div>
                    <input class="form-check-input" type="checkbox" name="electrical" value="2" >
                    <label class="form-check-label">Electrical</label>
                  </div>
                </li>
                <li>
                  <div>
                    <input class="form-check-input" type="checkbox" name="mechnical" value="3" >
                    <label class="form-check-label">Mechnical</label>
                  </div>
                </li>
                <li>
                  <div>
                    <input class="form-check-input" type="checkbox" name="electronic" value="4" >
                    <label class="form-check-label">Electronic</label>
                  </div>
                </li>
                <li>
                  <div>
                    <input class="form-check-input" type="checkbox" name="computerscience" value="5" >
                    <label class="form-check-label">ComputerScience</label>
                  </div>
                </li>
              </ul>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-primary">Publish</button>
                <a href="/" class="btn btn-outline-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>