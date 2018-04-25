@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>SUPERADMIN Dashboard </h1>
@stop

@section('content')
    <table class="table table-striped table-advance table-hover">
        <thead>
            <tr>
                <th><i class="icon_profile"></i> Naam</th>
                <th><i class="icon_mail_alt"></i> Email</th>
                <th><i class="icon_calendar"></i> Rang</th>
            </tr>
        </thead>
        <tbody>           
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    <td>
                        <select name="rank"class= "form-control" id="rank">
                            @foreach($ranks as $rank)
                                <option value='{{$rank->id}}'>{{$rank->rankName}}</option>
                            @endforeach
                        </select>
                    </td>
                    
                </tr>
            @endforeach
  
        </tbody>
    </table>
    
@endsection

