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
                

                
                    <form class="form-horizontal form-signin" method="POST" action="{{ route('login.user') }}">
                        {{ csrf_field() }}
                        <h2 class="form-signin-heading">Log in</h2>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-success">
                            <label for="email" class="control-label" id="inputValid">E-Mail Address</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-success">
                            <label for="password" class="col-md-4 control-label" id="inputValid">Password</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group has-success">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>

                        <div class="form-group has-success">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </form>
</div>
@include('inc.footer')
