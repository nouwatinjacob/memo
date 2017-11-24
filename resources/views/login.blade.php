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
<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Log in</h2>
        <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Email address</label>
            <input type="text" class="form-control is-valid" id="inputValid">
        </div>
        <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Password</label>
            <input for="inputPassword" type="text" class="form-control is-valid" id="inputValid">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
@include('inc.footer')