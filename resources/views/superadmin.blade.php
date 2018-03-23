@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>SUPERADMIN Dashboard </h1>
@stop

@section('content')
    <p>You are logged in as a <strong>superadmin</strong></p>


        <table class="table table-striped table-advance table-hover">
            <thead>
                    <tr>
                        <th><i class="icon_profile"></i> Name</th>
                        <th><i class="icon_mail_alt"></i> Email</th>
                        <th><i class="icon_calendar"></i> Role</th>
            </thead>

            <tbody>

            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>

                <td><select name="role" class="form-control" id="role">
                <option value="1" @if($user->admin=='1')
                selected="selected" @endif>admin</option>
                <option value="0"  @if($user->admin=='' || $user->admin=='0')
                selected="selected" @endif>user</<option>
                </select>

                </td>
            </tr>
            @endforeach

            </tbody>
            </table>

            @stop