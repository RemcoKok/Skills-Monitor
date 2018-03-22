@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
    <div class="box">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr>
                    <td>

                    </td>
                    <td>
                        <h3>titel</h3>
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($forms as $form)
                    <tr>
                        <td>
                            <form role="form" method="post" action="{{ route('forms.destroy' , $form->id)}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                        </td>
                        <td>
                            <h3>{{$form->title}}</h3>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        <a class="btn btn-primary pull-right" href="/forms/create">create rubrick</a>
    </div>
@stop