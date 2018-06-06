@extends('adminlte::page')

@section('title', 'Aanmaken')

@section('content')
    <h2>Formulier aanmaken </h2>
    <div class="box">

        <div>
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


                <button class="btn btn-primary pull-right" onclick="location.href='{{ url("form/".$empty_form->id."/edit") }}'">Wijzig
                    naam/competentie
                </button>
            </div>

            @if($empty_form->rows->count() === 0)
                <div class="callout callout-warning">
                    <button class="btn btn-primary pull-right"
                            onclick="location.href='{{url("/form/".$empty_form->id."/row/create")}}'">
                        Voeg rij toe
                    </button>

                    <h4>Er zijn nog geen rijen beschikbaar</h4>
                </div>
            @else
                <div class="callout callout-success">
                    <button class="btn btn-primary pull-right"
                            onclick="location.href='{{url("/form/".$empty_form->id."/row/create")}}'">
                        Voeg rij toe
                    </button>
                    <h4>er zijn rijen beschikbaar !</h4>
                </div>
            @endif


            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                    
                    @foreach($empty_form->rows as $row)
                    <tr>
                        @foreach($row->cells as $cell)
                            
                                <td>{{$cell->cellText}}</td>
                            
                        @endforeach
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
            <button class="btn btn-primary pull-right" onclick="location.href='{{ url("/form/") }}'">Opslaan</button>


        </div>


@stop
