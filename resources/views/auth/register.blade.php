@extends('index')
@section('content')
    <div class="content">
        <form method="POST" action="{{ url('auth/register')}}">
            {!! csrf_field() !!}
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <input placeholder="Логин" type="text" name="name" value="{{ old('name') }}">
                <input placeholder="Эмейл" type="email" name="email" value="{{ old('email') }}">
                <input placeholder="Пароль" type="password" name="password">
                <input placeholder="Подтверждение пароля" type="password" name="password_confirmation">
                <hr/>
                <div>
                    <button type="submit" class="btn btn-danger btn-lg">Register</button>
                    <a href="{{ url('/')}}" class="btn btn-default btn-lg">
                        Назад
                    </a>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </form>
    </div>
@stop