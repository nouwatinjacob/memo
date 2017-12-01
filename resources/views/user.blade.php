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
  <a class="navbar-brand" href="#">REMIND ME</a>
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
  <div class="row">
  <legend>Reminders</legend>
  @if(session('info'))
    <div class="alert alert-success">
    {{ session('info') }}
    </div>
  @endif
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count ($reminders) > 0)
      @foreach($reminders->all() as $reminder)
        <tr>
          <td>{{ $reminder->title }}</td>
          <td>{{ $reminder->description }}</td>
          <td>
            <a href='{{ url("/reads/{$reminder->id}") }}' class="badge badge-info">Read</a>
          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table> 
  </div>
</div>
@include('inc.footer')