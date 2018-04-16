@extends('adminlte::page')

@section('title', 'Aanmaken')

@section('content_header')
    <h1>Formulier aanmaken </h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <form method="post" action="{{route('forms.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>
                        Formuliernaam
                    </label>
                    <input type="string" class="form-control" placeholder="..." name="title">
                </div>
            </form>
        </div>

        <select class="form-control">
            <option>Software Ontwerpen</option>
            <option>Software Beheren</option>
            <option>Software Analyseren</option>
            <option>Infrastructuur Realiseren</option>
            <option>Gebruikersinterface Realiseren</option>
        </select>

        <div>

            <div class="box-header">
                <h2 class="box-title">Vul hieronder de cellen in om een nieuwe rij te maken.</h2>
            </div>

            <div class="box-body">
                <form method="post" action="{{route('Cell.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Vul cel 1 in</label>
                        <textarea type="text" class="form-control" rows="3" placeholder="Enter description"
                                  name="cell[]"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Vul cel 2 in</label>
                        <textarea class="form-control" rows="3" placeholder="Enter description"
                                  name="cell[]"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Vul cel 3 in</label>
                        <textarea class="form-control" rows="3" placeholder="Enter description"
                                  name="cell[]"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Vul cel 4 in</label>
                        <textarea class="form-control" rows="3" placeholder="Enter description"
                                  name="cell[]"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Vul cel 5 in</label>
                        <textarea class="form-control" rows="3" placeholder="Enter description"
                                  name="cell[]"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Vul cel 6 in</label>
                        <textarea class="form-control" rows="3" placeholder="Enter description"
                                  name="cell[]"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>

                </form>

            </div>

        </div>

@stop
