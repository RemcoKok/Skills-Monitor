@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
<div class="box">
    <div class="header">
        <h2 class="box-title">Uw openstaande formulieren</h2>
    </div>
    <table class="table table-bordered">
        <theader>        
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
</div>
@stop