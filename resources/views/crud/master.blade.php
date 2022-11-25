<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1" >
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Add Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('manage.student')}}">Manage Student</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('add.dept')}}">Add Dept</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('all.dept')}}">Manage Dept</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>




@yield('content')




<script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
