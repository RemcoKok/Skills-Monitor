@extends('adminlte::page')

@section('title', 'Alle formulieren')

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
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <button class="btn btn-primary" onclick="location.href='{{ url("/form/create/") }}'">Nieuw formulier</button>
            <div class="input-group col-md-5 pull-right">
                <input class="form-control" placeholde="Zoek formulieren" type="text" name="q">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary pull-right">zoek formulier</button>
                </span>
            </div>
        </form>
        <table class="table table-bordered">
            <theader>        
                <tr>
                    <th>Naam formulier</th>
                    <th>Competentie</th>
                    <th>Aanpassen formulier</th>
                    <th>invullen</th>
                </tr>

                @foreach($empty_forms as $empty_form)
                    <tr>
                        <td>{{$empty_form->title}}</td>
                        <td>{{$empty_form->competence_id}}</td>
                        <td><button onclick="location.href='{{ url("/form/".$empty_form->id."/edit")}}'"><i class="fa fa-pencil"></i> Aanpassen formulier</button></td>
                        <td><a class="btn btn-primary" href="{{ route('rating.create', ['id' => $empty_form->id]) }}">invullen</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->

    </div>
@stop