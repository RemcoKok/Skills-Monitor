@extends('adminlte::page')

@section('title', 'Nieuw formulier')

@section('content_header')
    <h1><strong>Maak een nieuw formulier</strong></h1>
@stop

@section('content')

        <div class="row">
            <div class="col-md-12">
                <br/>
                <h3 align="left">Voer naam en competentie in</h3>
                <br/>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{route('form.store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" name="title"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter competence" name="competence_id"/>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Verzenden</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <h5><strong>Al eerder gemaakte formulieren</strong></h5>
                <ul class="list-unstyled">
                    <li style="color:blue; text-decoration:underline;">Programeren in Java</li>
                    <li style="color:blue; text-decoration:underline;">Programmeren in BlueJ</li>
                    <li style="color:blue; text-decoration:underline;">Programeren in Laravel</li>
                    <li style="color:blue; text-decoration:underline;">Gamedevelopment in Typescript</li>
                    <li style="color:blue; text-decoration:underline;">Werk en denkniveau Tekst & Beeld</li>

                </ul>
            </div>

                <div class="col-sm-4 invoice-col">
                <h5><strong>Contact</strong></h5>
                <ul class="list-unstyled">
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;FaceBook</li>
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;Instagram</li>
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;Twitter</li>
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;WhatsApp</li>
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;E-mail</li>
                </ul>
            </div>
        </div>
@stop