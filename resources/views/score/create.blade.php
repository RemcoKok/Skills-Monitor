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
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>invul</th>
            </thead>

            <tbody>
                @foreach($rows as $row) 
                    @if($row->emptyForm_id == $form->id)
                    <tr>
                        @foreach($cells as $cell)
                            @if($row->id == $cell->row_id)
                                <td><input name="Option[]"  id="{{ $cell->id }}" value="{{$cell->id}}" type="radio">&nbsp;{{ $cell->cellText }}</td>
                            @endif
                        @endforeach
                        <td colspan="6" class="pull right">
                    <input type="text" name="comment[]" placeholder="comment">
                </td>

                    </tr>
                    @endif
                @endforeach

            </tbody>
        </table>

    @endforeach
    </div>

    <button type="submit" class="btn btn-primary pull-right" onclick="location.href='{{ url("/home") }}'">Submit</button>

@stop
