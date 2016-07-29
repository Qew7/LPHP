@extends('index')
@section('content')
    <div class="content">
        <div class="articles">
            @include('pages.articles.articles')
        </div>
        <div class="text-right"><b>Всего записей</b> <i class="badge">{{ $count }}</i></div><br/>
        @include('forms._form')
    </div>
@stop