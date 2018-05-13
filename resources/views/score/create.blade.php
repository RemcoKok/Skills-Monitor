@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
    

    <div class="box">
    @foreach($forms as $form)
        <table class="table table-bordered">
            <thead>
            @foreach($rows as $row)
                <th>1</th>
            @endforeach
                <th>invul</th>
            </thead>

            <tbody>
                @foreach($rows as $row) 
                    <tr>
                        @foreach($cells as $cell)
                            @if($row->id == $cell->row_id)
                                <td><input name="Option{{ $row->id }}"  id="{{ $cell->id }}" value="option" type="radio">{{ $cell->cellText }}</td>
                            @endif
                        @endforeach
                        <td colspan="6" class="pull right">
                    <input type="text" name="comment[]" placeholder="comment">
                </td>

                    </tr>

                @endforeach

            </tbody>
        </table>

    @endforeach
    </div>

    <button type="submit" class="btn btn-primary pull-right" onclick="location.href='{{ url("/home") }}'">Submit</button>

@stop
