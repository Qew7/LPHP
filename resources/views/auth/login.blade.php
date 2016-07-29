@extends('index')
@section('content')
    @if (Session::has('auth'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('auth.message') }}
        </div>
    @endif
    <form method="POST" action="{{ url('auth/login')}}">
        {!! csrf_field() !!}
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} has-feedback">
                <input placeholder="Эмейл" type="email" name="email" value="{{ old('email') }}">
                {!! $errors->first('email', '<span id="helpBlock" class="help-block">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} has-feedback">
                <input placeholder="Пароль" type="password" name="password" id="password">
                {!! $errors->first('password', '<span id="helpBlock" class="help-block">:message</span>') !!}
            </div>
            <input type="checkbox" name="remember"> Запомнить меня
            <button class="btn btn-info btn-lg" type="submit">Login</button>
            <a href="{{ url('/')}}" class="btn btn-default btn-lg">
                Назад
            </a>
        </div>
        <div class="col-md-4">
        </div>
    </form>
@stop