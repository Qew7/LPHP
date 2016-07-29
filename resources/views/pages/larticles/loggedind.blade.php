@extends('logged')
@section('content')
    <div class="content">
        <div class="articles">
            @include('pages.larticles.articles')
        </div>
        <div class="col-md-3">
            <a href="{{ url('main/logout')}}" class="btn btn-default">
                Выйти
            </a>
        </div>
        <div class="col-md-7"></div>
        <div class="col-md-2"><b>Всего записей</b> <i class="badge">{{ $count }}</i></div><br/><hr/>
        @include('forms.aform._form')
    </div>
@stop