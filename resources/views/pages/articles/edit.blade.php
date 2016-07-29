@extends('index')
@section('content')
@if (  count($article) )
    @include('forms._form_edit')
@else
    <div class="text-center"><h2>Записи нет</h2></div>
@endif


<a href="{{ url('/')}}" class="btn btn-default">
    Назад
</a>
@stop
