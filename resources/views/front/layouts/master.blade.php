<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <title>EXAM AUTOMATİON SYSTEM @yield("title")</title>
</head>
<body style="background-color: #e2e2e2">
{{-- <h1 class="bg-warning">Bootstrap</h1>  --}}
<nav class="navbar bg-dark  navbar-expand-lg bg-body-tertiary px-3" data-bs-theme="dark" >
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route("notes.index")}}">EXAM AUTOMATİON SYSTEM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown"  >
            <ul class="navbar-nav">
                {{--
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Features</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Pricing</a>
                 </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{\Illuminate\Support\Facades\Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }} ">
                                @csrf
                                <a class="dropdown-item" href="{{route("logout")}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">Çıkış yap</a></li>
                        </form>

                    </ul>

                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container " >
    <div class="mt-4">@yield("content")</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


@yield("script")
</body>
</html>
