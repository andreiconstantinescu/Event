@extends('main')

@section('title', '|Reset password')

@section('authscripts')
    
    <link rel="stylesheet" href="{{ URL::asset('css/style-auth.css') }}">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

  
</head>

    
<body>
    
@endsection
    
@section('content')

<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Reset password</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

        <div class="login-form" style="margin-top: 50px;">

        <form method="POST" action="{{ url('/password/email') }}">
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

                       @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                </div>
                </div>

                <div class="group">
                    <input style="margin-top: 40px;" type="submit" class="button" value="Reset">
                </div>

            </div>
            </form>
            </div>
        </div>
    </div>



@endsection



