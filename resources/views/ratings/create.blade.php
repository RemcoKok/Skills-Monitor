@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<div class="box">

    @foreach($forms as $form)
    <form method="post" action="{{route('rating.store', ['form_id' => $form->id])}}">
           
        <div class="header">
            <h2>{{ $form->title }}</h2>
        </div>

        <div class="box-body">
            {{ csrf_field() }}
            <div class="col-md-6">
              <div class="form-group">
                <label>Kies een naam:</label>
                <select name="user" class="form-control m-bot15" data-placeholder="Kies een persoon">
                  @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right" >opslaan</button>
        </form>
    @endforeach
</div>
@stop