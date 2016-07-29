@extends('index')
@section('content')
<div class="content">
    <div class="articles">
        @include('pages.articles.articles')
    </div>
    <div class="col-md-3">
        <a href="{{ url('/auth/login')}}" class="btn btn-default">
            Войти
        </a>
        <a href="{{ url('/auth/register')}}" class="btn btn-default">
            Зарегестрироваться
        </a>
    </div>
    <div class="col-md-7"></div>
    <div class="col-md-2"><b>Всего записей</b> <i class="badge">{{ $count }}</i></div><br/><hr/>
    @include('forms._form')
</div>
@stop
