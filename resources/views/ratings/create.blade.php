@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
<div class="box">
        <div class="box-header">
        </div>

        <div class="box-body">
        <form method="post" action="{{route('forms.store')}}">
            {{ csrf_field() }}
                



            <button type="submit" class="btn btn-primary pull-right" >opslaan</button>
        </form>
    </div>
@stop