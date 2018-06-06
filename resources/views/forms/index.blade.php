@extends('adminlte::page')

@section('title', 'Alle formulieren')

@section('content_header')
    <h1>STUDENT Dashboard </h1>

@stop

@section('content')
    <div class="box">
        <div class="header">
            <h2>Uw openstaande formulieren:</h2>
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
                    <th>Titel</th>
                    <th>Competentie</th>
                    <th></th>
                    <th></th>
                </tr>   
            <tbody>
                @if(isset($details) == null)
                    @foreach($forms as $form)
                        <tr>
                            <td><u><a href="{{ route('rating.show', $form->id) }}">{{ $form->title }}</a></u></td>
                            <td>{{ $form->competenceTitle }}</td>
                            <td><a class="btn btn-primary" href="{{ route('rating.create', ['id' => $form->id]) }}">invullen</a></td>
                            <td><a class="btn btn-primary" href="{{ route('form.index', $form->id)}}">aanpassen</a></td>
                        </tr>
                    @endforeach
                @else
                    @foreach($details as $form)
                        <tr>
                            <td><u><a href="{{ route('rating.show', $form->id) }}">{{ $form->title }}</a></u></td>
                            <td>{{ $form->competenceTitle }}</td>
                            <td><a class="btn btn-primary" href="{{ route('rating.create', ['id' => $form->id]) }}">invullen</a></td>
                            <td><a class="btn btn-primary" href="{{ route('form.index', $form->id)}}">aanpassen</a></td>
                        </tr>
                    @endforeach
                @endif   
            </tbody> 
        </table>
    </div>
@stop