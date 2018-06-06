@extends('adminlte::page')

@section('title', 'Openstaande formulieren')

@section('content_header')
    
@stop

@section('content')
<div class="box">
    <div class="header">
        <h2>Uw openstaande formulieren:</h2>
    </div>
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class=" col-sm-5" style="margin:10px 0px 10px 10px;">
        <button type="submit" class="btn btn-primary pull-right" style="margin:10px 10px 10px 0px;">zoek formulier</button>
        <input class="form-control pull-right" placeholde="Zoek formulieren" type="text" name="q">
        </div>  
    </form>

    <table class="table table-bordered">
        <theader>        
            <tr>
                <th>Titel</th>
                <th></th>
            </tr>   
        <tbody>
            @if(isset($details) == null)
                @foreach($forms as $form)<tr>
                        <td><u><a href="{{ route('rating.show', $form->id) }}">{{ $form->title }}</a></u></td>
                        <td>{{ $form->competenceTitle }}</td>
                        <td><a class="btn btn-primary" href="{{ route('rating.create', ['id' => $form->id]) }}">invullen</a></td>
                    </tr>
                @endforeach
            @else
                @foreach($details as $form)
                <tr>
                        <td><u><a href="{{ route('rating.show', $form->id) }}">{{ $form->title }}</a></u></td>
                        <td>{{ $form->competenceTitle }}</td>
                        <td><a class="btn btn-primary" href="{{ route('rating.create', ['id' => $form->id]) }}">invullen</a></td>
                    </tr>
                @endforeach
            @endif   

        </tbody> 
    </table>
</div>


@stop