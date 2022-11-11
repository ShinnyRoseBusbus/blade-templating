<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(230, 227, 252);">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}" style="margin-left: -275px; padding:20px;">Sales</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/categories')}}">Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/merchandises')}}">Merchandise</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/units')}}">Unit</a>
        </li>
        </ul>
    </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>

<style>
    
    .collapse{
        margin-right: -250px;
    }
    .collapse li a{
        font-size: 20px;
    }
    .navbar{
        box-shadow: 10px 10px 30px 1px rgba(0, 0, 0, 0.541);
    }
    .nav-item{
        background-color:gray;
    }
</style>

</body>
</html>
