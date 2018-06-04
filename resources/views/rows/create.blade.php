@extends('adminlte::page')

@section('title', 'Aanmaken')

@section('content_header')
    <h1>Rij aanmaken </h1>
@stop

@section('content')
    <div class="box">


        <div>

            <div class="box-header">
                <h2 class="box-title">Vul hieronder de cellen in om een nieuwe rij te maken.</h2>
            </div>



            <div class="box-body">
                <form method="post" action="{{route('row.store',['form'=>request()->route('form')])}}">

                    {{csrf_field()}}

                <div class="form-group">
                    <label>Vul cel 1 in</label>
                    <textarea class="form-control" type="text" rows="3" placeholder="Enter description"
                              name="cell_text[]"></textarea>
                </div>

                <div class="form-group">
                    <label>Vul cel 2 in</label>
                    <textarea class="form-control" type="text" rows="3" placeholder="Enter description"
                              name="cell_text[]"></textarea>
                </div>

                <div class="form-group">
                    <label>Vul cel 3 in</label>
                    <textarea class="form-control" type="text" rows="3" placeholder="Enter description"
                              name="cell_text[]"></textarea>
                </div>

                <div class="form-group">
                    <label>Vul cel 4 in</label>
                    <textarea class="form-control" type="text" rows="3" placeholder="Enter description"
                              name="cell_text[]"></textarea>
                </div>

                    <div class="form-group">
                        <label>Vul cel 5 in</label>
                        <textarea class="form-control" type="text" rows="3" placeholder="Enter description"
                                  name="cell_text[]"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Vul cel 6 in</label>
                        <textarea class="form-control" type="text" rows="3" placeholder="Enter description"
                                  name="cell_text[]"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"  >Opslaan</button>


                </form>

            </div>

        </div>
    </div>

@stop
