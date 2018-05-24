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
    <table class="table table-bordered responsive">
        <theader class="head">        
            <tr>
                <th>Titel</th>
                <th>Te beoordelen</th>
                <th>Competentie</th>
                <th>status</th>
            </tr>   
        </theader>                    
        <tbody>
            @foreach($ratings as $rating)
                <tr>
                    <td><a href="{{ route('rating.show', $rating->empty_form_id) }}">{{ $rating->empty_form_title }}</a></td>
                    <td>{{ $rating->name }}</td>
                    <td>{{ $rating->competenceTitle }}</td>
                    @switch($rating->status)
                        @case(1)
                            <td>
                                <button  class="btn btn-warning"class="btn btn-primary" type="button" onclick="window.location='{{ route("rating.edit", $rating->rating_id) }}'">openstaand</button>
                            </td>
                        @break
                        @case(2)
                            <td>
                            <button  class="btn btn-success"class="btn btn-primary" type="button" onclick="window.location='{{ route("rating.edit", $rating->rating_id) }}'">geaccepteerd</button>
                            </td>
                        @break

                        @case(3)
                            <td>
                            <button  class="btn btn-danger"class="btn btn-primary" type="button" onclick="window.location='{{ route("rating.edit", $rating->rating_id) }}'">afgewezen</button>
                            </td>
                        @break
                    @endswitch
                </tr>
            @endforeach 
        </tbody> 
    </table>
@stop