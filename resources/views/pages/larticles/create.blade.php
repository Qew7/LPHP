@extends('logged')
@section('content')
@include('forms.afrom._form')

<a href="{{ url('main/')}}" class="btn btn-default">
    Назад
</a>
@stop