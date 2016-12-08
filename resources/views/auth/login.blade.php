@extends('main')

@section('title', '|Authentication')

@section('authscripts')
    
    <link rel="stylesheet" href="{{ URL::asset('css/style-auth.css') }}">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

  
</head>

    
<body>
    
@endsection
    
@section('content')

<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="/register">Sign Up</a></label>
        <div class="login-form">
        <form method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
            <div class="sign-in-htm">
                <div class="group">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="label">Email Address</label>
                    <input id="email" type="Email" class="input" name="email" value="{{ old('email') }}">

                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                </div>

                <div class="group">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="label">Password</label>
                    <input id="password" type="password" class="input" name="password" data-type="password">

                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                </div>

                <div class="group">
                    <input id="check" type="checkbox" class="check" name="remember" checked>
                    <label for="check"><span class="icon"></span> Remember me</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="{{ url('/password/reset') }}">Forgot Password?</a>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>



@endsection

