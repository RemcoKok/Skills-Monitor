@extends('adminlte::page')

@section('title', 'Alle formulieren')

@section('content_header')

@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Alle bestaande formulieren</h3>
            <button class="btn btn-info pull-right" onclick="location.href='{{ route('form.create') }}'">Nieuw formulier</button>
            <table class="table table-bordered">
            <theader>        
                <tr>
                    <th>Naam formulier</th>
                    <th>Competentie</th>
                    <th>Formulier aanpassen</th>
                    <th>Persoon toevoegen</th>
                    <th>Rijen toevoegen</th>
                </tr>
                </theader>
                <tbody>
                @foreach($empty_forms as $empty_form)
                    <tr>
                        <td>{{$empty_form->title}}</td>
                        <td>{{$empty_form->competence_id}}</td>
                        <td><button onclick="location.href='{{ url("/form/".$empty_form->id."/edit")}}'"><i class="fa fa-pencil"></i> Aanpassen</button></td>
                        <td><a class="btn btn-primary" href="{{ route('rating.create', ['id' => $empty_form->id]) }}">Toevoegen</a></td>
                        <td><a class="btn btn-primary" href="{{ route('row.create', ['id' => $empty_form->id]) }}">Toevoegen</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop