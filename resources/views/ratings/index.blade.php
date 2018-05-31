@extends('adminlte::page')

@section('title', 'Openstaande formulieren')

@section('content_header')
    
@stop

@section('content')
<link rel="stylesheet" href="<?php echo asset('css/GRE.css')?>" type="text/css"> 
<div class="box">
    <div class="header">
        <h2>Uw openstaande formulieren:</h2>
    </div>
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary pull-right" style="margin:10px 10px 10px 0px;">zoek formulier</button>
            <div class="" style="margin:10px 0px 10px 10px;">
                <input class="form-control col-sm-3 pull-right" placeholde="Zoek formulieren" type="text" name="q">
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

        
    
    
    <ul>
    <h4>eaOFiuAWBFaNWDawIUDn:</h4>
        <li>0</li>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
    
    
    <ul>
    <h4>eaOFiuAWBFaNWDawIUDn:</h4>
        <li>0</li>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>



</div>


@stop