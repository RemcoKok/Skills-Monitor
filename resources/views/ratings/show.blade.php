
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

    <div class="box">
        @foreach($forms as $form)
            <div class="header">
            <a class="btn btn-primary" type="button" href="{{ route('rating.index') }}">&larr; back</a>
                <h2 class="box-title">{{ $forms->title }}</h2>

                <h4 class="help-block"><i>Te beoordelen: {{ $forms->name }}</i></h4>
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
        <a class="btn btn-primary pull-right" type="button" href="{{ route('score.create') }}">Invullen</a>

    
    </div>
    
@stop
