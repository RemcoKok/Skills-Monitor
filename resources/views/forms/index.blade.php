@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>STUDENT Dashboard </h1>

@stop

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title">Responsive Hover Table</h3>
            <button class="btn btn-info" onclick="location.href='{{ route('form.create') }}'">Nieuw formulier</button>

            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Competentie</th>
                    <th>Naam formulier</th>
                    <th>Aanpassen formulier</th>
                </tr>
                <tr>

                @foreach($empty_forms as $empty_form)
                    <tr>
                        <td>{{$empty_form->title}}</td>
                        <td>{{$empty_form->competence_id}}</td>
                        <td><button><i class="fa fa-pencil"></i> Aanpassen formulier</button></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@stop