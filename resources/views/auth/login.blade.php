@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m6 s12 offset-m3">
            <div class="card white card-auth">

                <div class="card-container">
                    <div class="card-content custom-text">
                        <span class="card-title center-align">Shini</span>

                        <div class="card-tabs custom-text m-b-15">
                            <ul class="tabs tabs-fixed-width tabs-yellow">
                                <li class="tab"><a class="active" href="{{ route('login') }}">Sign in</a></li>
                                <li class="tab"><a href="{{ route('register') }}">Sign up</a></li>
                            </ul>
                        </div>

                        <div class="row">
                            <form class="col s12" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="row">                                
                                    <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }} col s12 black-text">
                                        <input id="email" name="email" type="email" class="validate" value="{{ old('email') }}" required>
                                        <label for="email">Email</label>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            
                                    <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s12 black-text">
                                        <input id="password" name="password" type="password" class="validate" required>
                                        <label for="password">Password</label>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col s12 custom-text">
                                        <input type="checkbox" id="indeterminate-checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
                                        <label for="indeterminate-checkbox">Stay Signed in?</label>
                                    </div>
                                
                                    <div class="col s12 m-t-20">
                                        <button type="submit" class="waves-effect waves-light btn btn-block btn-primary btn-large">Sign in</button>
                                    </div>

                                    <div class="col s12 s12 m-t-20 custom-text">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>

@stop