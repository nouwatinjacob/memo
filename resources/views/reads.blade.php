<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memo</title>
    <link rel="stylesheet" type="text/css" href="{{ url("css/bootstrap.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ url("css/style.css")}}">
    <script type="text/javascript" src="{{ url("js/jquery-3.1.0.js")}}"></script>
    <script type="text/javascript" src="{{ url("js/bootstrap.js")}}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{ url('/user')}}">REMIND ME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li class="nav-item" id="logout">
    <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class"row">
        <h2 class="text-center">{{ $reminders->title }}</h2>
        <p class="text-center">{{ $reminders->description }}</p>
        </div>
        
    </div>
@include('inc.footer')