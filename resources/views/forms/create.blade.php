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
        <form method="post" action="{{route('forms.store')}}, {{route('rows.create')}}">
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
                            @foreach($rows as $row)
                                    <tr>
                                        <td align="center" >
                                            <div class="checkbox">
                                                <label>
                                                    <input id="fromBox" name="fromBox" type="checkbox" value="{{$row->id}}">
                                                </label>
                                            </div>
                                        </td>
                                            
                                        @foreach($cells as $cell)
                                            @if($cell->row_id == $row->id)
                                                <td align="center">
                                                    <h3>{{$cell->cellText}}</h3>
                                                </td>
                                             @endif
                                         @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
                
        
            <button type="submit" class="btn btn-primary">save</button>

        </form>
    </div>
@stop