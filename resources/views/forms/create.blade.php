@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
<div class="box">
        <div class="box-header">
            <h2 class="box-title">create a rubrick</h2>
        </div>

        <div class="box-body">
        <form method="post" action="{{route('forms.store')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">
                    Enter rubrick name
                </label>
                <input type="string" class="form-control" placeholder="..." name="title">
                    </div>
                </div>
                    <div>
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            </thead>
                            <tbody>
                                <?php
                                    $x = 1;
                                ?>
                                @foreach($cells as $cell)
                                    @for($x; $cell->row_id == $x; $x++)
                                        <tr>
                                            <td align="center" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input value= "{{$cell->row_id}}" name="formBox[]" type="checkbox">
                                                    </label>
                                                </div>
                                            </td>
                                            @foreach($cells as $cell)
                                                @if($cell->row_id == $x)
                                                    <td align="center">
                                                        <h3>{{$cell->cellText}}</h3>
                                                    </td>
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endfor
                                @endforeach
                            </tbody>
                    </table>
                </div>
            <button type="submit" class="btn btn-primary pull-right" >save</button>
        </form>
    </div>
@stop