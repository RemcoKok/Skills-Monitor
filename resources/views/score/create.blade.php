@extends('adminlte::page')

@section('title', 'Invullen')

@section('content_header')

@stop

@section('content')

<!-- @if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif -->
    <div class="box">
    @foreach($forms as $form)
            <h2>&nbsp;{{ $form->title }}</h2><br>
    
        <table class="table table-bordered">
            <thead>
            @foreach($rows as $row)
                @if($row->id==1)
                    @foreach($cells as $cell)
                        @if($cell->row_id == $row->id)
                        <th>
                            Level {{ $cell->cellLevel }}
                            @if($cell->id==1)
                                (slecht)
                            @endif
                        </th>
                        @endif
                    @endforeach
                @endif
            @endforeach
                <th>Comment</th>
            </thead>

            <form action="/score" method="POST">
                {{ csrf_field()}}

                <tbody>
                    @foreach($rows as $row) 
                        <tr>
                            @foreach($cells as $cell)
                                @if($row->id == $cell->row_id)
                                    <td><input name="Option{{ $row->id }}"  id="{{ $cell->id }}" value="option" type="radio">&nbsp;{{ $cell->cellText }}</td>
                                @endif
                            @endforeach
                            <td colspan="6" class="pull right">
                        <input type="text" name="comment[]" placeholder="comment">
                    </td>

                        </tr>

                    @endforeach

                </tbody>
        </table>

        <?php
            //<button class="btn btn-primary pull-left" onclick="location.href='{{ url("/list") }}'">Back</button>
        ?>

            <button type="submit" class="btn btn-primary pull-right" onclick="location.href='{{ url("/home") }}'">Submit</button>
            </form>
    @endforeach
    </div>

    <?php
    //----------------------------------------------------------- 
    //-------------Einde User Story, Begin stuff van GRE1--------
    //-----------------------------------------------------------
    

    

    ?>
@stop
