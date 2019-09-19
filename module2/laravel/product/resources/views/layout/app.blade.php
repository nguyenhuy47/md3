<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Codegym</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" {{Request::is('home') ? "active" : ""}}>
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item" {{Request::is('list') ? "active" : ""}}>
                <a class="nav-link" href="/list">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/contact">Contact</a>
            </li>

        </ul>

    </div>
</nav>

@if(Request::is('home'))
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, Laravel!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-2">
            @include('include.sidebar')
        </div>
        <div class="col-6">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
