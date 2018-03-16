@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">create a rubrick</h2>
        </div>

        <div class="box-body">
        <form actions="/forms"  method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">
                    Enter rubrick name
                </label>
                <input type="name" class="form-control" placeholder="..." id="title" name="title">
                    </div>
                </div>
                    <div>
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                           <thead>
                            <tr role="row">
                            <th class="sorting">
                                    <h3></h3>
                                </th>
                                <th class="sorting">
                                    <h3>level 1</h3>
                                </th>
                                <th class="sorting">
                                    <h3>level 2</h3>
                                </th>
                                <th class="sorting">
                                    <h3>level 3</h3>
                                </th>
                                <th class="sorting">
                                    <h3>level 4</h3>
                                </th>
                                <th class="sorting">
                                    <h3>level 5</h3>
                                </th>
                                <th class="sorting">
                                    <h3>level 6</h3>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $row)
                                    <tr>
                                        <td align="center" >
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="" value="{{$row->id}}">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
