@extends('logged')
@section('content')
@if (  count($article) )
    @include('forms.aform._form_edit')
@else
    <div class="text-center"><h2>Записи нет</h2></div>
@endif


<a href="{{ url('main/')}}" class="btn btn-default">
    Назад
</a>
@stop
