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
        <input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab"><a href="/login">Sign In</a></label>
        <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
        <form method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

            <div class="sign-up-htm">
                <div class="group">
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="label">Username</label>
                    <input id="name" type="text" class="input" name="name" value="{{ old('name') }}">

                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                 </div>
                </div>

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
                 <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="label">Repeat Password</label>
                    <input id="password-confirm" type="password" class="input" name="password_confirmation" data-type="password">

                     @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                 </div>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign Up">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1"><a href="/login">Already Member?</a></label>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>


@endsection
