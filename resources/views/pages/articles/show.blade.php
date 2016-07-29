@extends('index')
@section('content')
@if ( ! empty($article))
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span>{!! $article->title !!}</span>
                <span class="pull-right label label-info">{{ $article->created_at }}</span>
            </h3>
        </div>

        <div class="panel-body">
            {!! $article->text !!}<hr/>
            <div class="pull-right">
                <a href="{{ url('article/' . $article->id) . '/edit' }}" class="btn btn-warning">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
                <a href="{{ url('article/' . $article->id) . '/delete' }}" class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </div>
        </div>
    </div>
@else
    <div class="text-center"><h2>Записи нет</h2></div>
@endif
<a href="{{ url('/')}}" class="btn btn-default">
    Назад
</a>
@stop