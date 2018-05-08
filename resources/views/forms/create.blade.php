@extends('adminlte::page')

@section('title', 'Nieuw formulier')

@section('content_header')
    <h1>Maak een nieuw formulier </h1>
@stop

@section('content')

        <div class="form-group">
            <label class="col-sm-2 control-label">Formulier naam</label>

            <div class="col-sm-7">
                <input type="text" class="form-control" placeholder="Formulier naam"><br>
            </div>

        </div>
        <div>
        <label class="col-sm-4 control-label">Competentie</label>
        <div class="col-sm-7">
            <select class="form-control">
                <option>SAN 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
            </select>
        </div>
    </div>
    <button class="btn btn-info" onclick="location.href='{{ url("/form/show/") }}'">Opslaan</button>

@stop