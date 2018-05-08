@extends('adminlte::page')

@section('title', 'Nieuw formulier')

@section('content_header')
    <h1>Maak een nieuw formulier </h1>
@stop

@section('content')


    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Add Data</h3>
            <br />
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

            <form method="post" action="{{route('form.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Name" name="title"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter competence" name="competence_id"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
    <button class="btn btn-info" onclick="location.href='{{ url("/form/show/") }}'">Opslaan</button>

@stop