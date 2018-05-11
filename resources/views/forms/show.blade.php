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


                    <button class="btn btn-primary pull-right" onclick="location.href='{{ url("/form/create/") }}'">Wijzig naam/competentie</button>
                </div>


                <div class="callout callout-warning">
                    <button class="btn btn-primary pull-right" onclick="location.href='{{ url("/row/create/") }}'">Voeg rij toe</button>

                    <h4>Er zijn nog geen rijen beschikbaar</h4>
                </div>
                <button class="btn btn-primary pull-right" onclick="location.href='{{ url("/list/") }}'">Opslaan</button>

            </div>





        </div>

    </div>

@stop
