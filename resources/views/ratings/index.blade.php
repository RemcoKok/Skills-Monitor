@extends('adminlte::page')

@section('title', 'Openstaande formulieren')

@section('content_header')
    
@stop

@section('content')
<div class="box">
    <div class="header">
        <h2>Uw openstaande formulieren:</h2>
    </div>

    <table class="table table-bordered">
        <theader>        
            <tr>
                <th>Titel</th>
                <th>Competentie</th>
                <th>Te beoordelen</th>
                <th></th>
            </tr>   
            <tbody>
                @foreach($ratings as $rating)
                    <tr>
                        <td>{{ $rating->title }}</td>
                        <td>{{ $rating->competenceTitle }}</td>
                        <td>{{ $rating->name }}</td>
                        <td><a class="btn btn-primary" href="{{ route('score.create', ['rid' => $rating->id]) }}">invullen</a></td>
                    </tr>  
                @endforeach
        </tbody> 
    </table>
</div>


@stop