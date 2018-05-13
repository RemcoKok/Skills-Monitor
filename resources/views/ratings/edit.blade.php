@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
    <div class="box">
        @foreach($ratings as $rating)
            <div class="box-title">
                <p>
                    <h2 class="box-title-boxed">{{ $rating->formTitle }}</h2>
                </p>  
            </div>
            <div>
            <p>
                <h4><b>De competentie voor deze rubrick is: &nbsp </b><i>{{ $rating->competenceTitle }}</i></h4>
                <h4><b>Te beoordelen: &nbsp </b><i>{{ $rating->name }}</i></h4>
            </p>
            </div>
            <div class="main">
                <form action="{{ route('rating.update', $rating->id)}}" method="post">
                @method('put')
                @csrf
                    <button class="btn btn-success" type="submit" name="status" value="2">accepteer</input>
                    <button class="btn btn-danger" type="submit" name="status" value="3">afwijzen</input>
                </form>
            </div>
        @endforeach
   </div>
@stop