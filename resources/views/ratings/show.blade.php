
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

    <div class="box">
        @foreach($ratings as $rating)
            <div class="header">
            <button class="btn btn-primary" type="button" onclick="window.location='{{ route("rating.index") }}'">&larr; back</button>
                <h2 class="box-title">{{ $rating->title }}</h2>

                <h4 class="help-block"><i>Te beoordelen: {{ $rating->name }}</i></h4>
            </div>
            <table class="table table-bordered">                  
                <tbody>
                    @foreach($rows as $row)
                        <tr>
                            @foreach($cells as $cell)
                                @if($cell->row_id == $row->id)
                                <td>{{ $cell->cellText }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        @endforeach 
        <button class="btn btn-primary pull-right" type="button" onclick="window.location='{{ route("score.create") }}'">Invullen</button>

    
    </div>
    
@stop
