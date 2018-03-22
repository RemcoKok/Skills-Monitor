@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
<div class="box">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
                <tr>
                    <td>
                        <h3>id</h3>
                    </td>
                    <td>
                        <h3>titel</h3>
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach($forms as $form)
                    <tr>
                        <td>
                            <h3>{{$form->id}}</h3>
                        </td>
                        <td>
                            <h3>{{$form->title}}</h3>
                        </td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
        <a class="btn btn-primary pull-right" href="/forms/create">create rubrick</a>
    </div>
@stop