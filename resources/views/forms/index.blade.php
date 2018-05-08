@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>STUDENT Dashboard </h1>

@stop

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title">Responsive Hover Table</h3>
            <button class="btn btn-info" onclick="location.href='{{ url("/form/create/") }}'">Nieuw formulier</button>

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
                    <td>SAN1</td>
                    <td>Software analyseren1</td>
                    <td><button><i class="fa fa-pencil"></i> Aanpassen formulier</button></td>
                </tr>
                @foreach($empty_forms as $row)
                    <tr>
                        <td>{{$row['title']}}</td>
                        <td>{{$row['competence_id']}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td>SBE1</td>
                    <td>Software beheren</td>
                    <td><button><i class="fa fa-pencil"></i> Aanpassen formulier</button></td>
                </tr>
                <tr>
                    <td>SON1</td>
                    <td>Bob Doe</td>
                    <td><button><i class="fa fa-pencil"></i> Aanpassen formulier</button></td>
                </tr>
                <tr>
                    <td>175</td>
                    <td>Mike Doe</td>
                    <td><button><i class="fa fa-pencil"></i> Aanpassen formulier</button></td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@stop