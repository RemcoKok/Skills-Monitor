@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Pas het formulier aan</h1>
@stop

@section('content')
    <div class="box-body">
        <div class="box-header with-border">
            <h3> Naam formulier:
                <tr>
                    <td>{{$empty_form->title}}</td>
                </tr>
            </h3>
            <h3> Competentie:
                <tr>
                    <td>{{$empty_form->competence_id}}</td>
                </tr>
            </h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br/>
                <h3 align="left">Voer naam en competentie in</h3>
                <br/>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{route('form.update',['id'=>$empty_form->id])}}">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" name="title"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter competence" name="competence_id"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Verzenden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop