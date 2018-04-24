@extends('adminlte::page')

@section('title', 'Aanmaken')

@section('content_header')
    <h1>Formulier aanmaken </h1>
@stop

@section('content')
    <div class="box">

        <div>

            <div class="box-header">
                <h2 class="box-title">Nieuw formulier</h2>
            </div>

            <div class="box-body">
                <div class="box-header with-border">
                    <h3 class="box-title">Naam opgehaald uit de database</h3><br><br>
                    <h3 class="box-title">Competentie opgehaald uit de database</h3>
                </div>

                <div class="callout callout-warning">
                    <h4>Er zijn nog geen rijen beschikbaar</h4>
                    <p>Rijen opgehaald uit de database</p>
                </div>

            </div>



            <button type="submit" class="btn btn-primary pull-right">Opslaan</button>


        </div>

    </div>

@stop
