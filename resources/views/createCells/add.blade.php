@extends('adminlte::page')

@section('title', 'Vragen toevoegen')

@section('content_header')
    <h1>Vragen toevoegen</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Vul hieronder de cellen in om een nieuwe rij te maken.</h2>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label>Vul cel 1 in</label>
                <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
            </div>

            <div class="form-group">
                <label>Vul cel 2 in</label>
                <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
            </div>

            <div class="form-group">
                <label>Vul cel 3 in</label>
                <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
            </div>

            <div class="form-group">
                <label>Vul cel 4 in</label>
                <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
            </div>

            <div class="form-group">
                <label>Vul cel 5 in</label>
                <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
            </div>

            <div class="form-group">
                <label>Vul cel 6 in</label>
                <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
            </div>

        </div>

    </div>

    <button type="submit" class="btn btn-primary pull-right">Submit</button>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
