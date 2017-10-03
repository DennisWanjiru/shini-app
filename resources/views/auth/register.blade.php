@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m6 s12 offset-m3">
            <div class="card white card-auth">

                <div class="card-container">
                    <div class="card-content custom-text">
                        <span class="card-title center-align"><a href="{{ url('/') }}">Shini</a></span>

                        <div class="card-tabs custom-text m-b-15">
                            <ul class="tabs tabs-fixed-width tabs-yellow">
                                <li class="tab"><a href="{{ route('login') }}">Sign in</a></li>
                                <li class="tab"><a class="active" href="{{ route('register') }}">Sign up</a></li>
                            </ul>
                        </div>

                        <div class="row">
                            <form class="col s12" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="input-field{{ $errors->has('name') ? ' has-error' : '' }} col s12 black-text">
                                        <input id="name" name="name" type="text" class="validate" value="{{ old('name') }}" required>
                                        <label for="name">Name</label>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
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
                                
                                    <div class="input-field col s12 black-text">
                                      <input id="password-confirm" name="password_confirmation" type="password" class="validate" required>
                                      <label for="password-confirm">Confirm Password</label>
                                    </div>
                                
                                    <div class="col s12">
                                        <button type="submit" class="waves-effect waves-light btn-large btn-block btn-primary">Sign up</button>
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
@endsection
