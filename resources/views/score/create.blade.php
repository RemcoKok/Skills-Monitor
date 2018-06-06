@extends('adminlte::page')

@section('title', 'Invullen')

@section('content_header')

@stop

@section('content')


    <div class="box">
        @foreach($forms as $form)
            <h2>&nbsp;{{ $form->title }}</h2><br>
            <table class="table table-bordered">
                <thead>
                    @for($i =1; $i <= 6; $i++)
                        <th>level {{ $i }}</th>
                    @endfor
                    <th>Comment <font color="blue">(Optional)</font></th>
                </thead>

                <form action="{{ route('score.store', ['id'=> $form->ratingId]) }}" method="POST">
                    {{ csrf_field()}}
                    <tbody>
                        <?php
                            $i =1;
                        ?>
                        @foreach($rows as $row)
                            <tr>
                                @foreach($cells as $cell)
                                    @if($row->id == $cell->row_id)
                                        <td><input name="Option{{$i}}"  id="{{ $cell->id }}" value="{{ $cell->id }}" type="radio">&nbsp;{{ $cell->cellText }}</td>
                                    @endif
                                @endforeach
                                <td colspan="6" class="pull right">
                                    <input type="text" name="comment{{ $i }}" placeholder="comment">
                                </td>
                            </tr>
                            <?php
                                $i++;
                            ?>
                        @endforeach
                    </tbody>
            </table>

                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
                <button type="button" class="btn btn-primary pull-left" onclick="location.href='{{ url("/rating") }}'">Back</button>
    @endforeach
    </div>

@stop
