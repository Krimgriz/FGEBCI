@extends('index')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-secondary form-control">
                                            Login
                                        </button>
                                    </div>
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            ¿Olvido su Contraseña?
                                        </a>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
