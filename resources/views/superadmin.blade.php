@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        <h3>Gebruikers tabel</h3>
           
    <table class="table table-striped table-advance">
        <thead>
            <tr>
                <th>#</th>
                <th> Naam</th>
                <th> Email</th>
                <th> Rang</th>
                <th>Opties</th>
            </tr>
        </thead>
        <tbody>           
            @foreach($users as $user)
            <tr class="{{ ($user->active == 0) ? 'danger' : '' }}">
                    <td>{{ $user->id }}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    <td>
                    @foreach ($user->roles()->pluck('name') as $role)
                                <span class="label label-default">{{ $role }}</span>
                    </td>
                    <td>
                        @if (Auth::id() != $user->id)
 
                        <button type="button" class="btn-modal-change-role btn btn-info btn-sm" data-userid="{{ $user->id }}" 
                        data-userrole="{{ $role }}">Verander rang</button>

    
                            {{ Form::open(['route' => ['users.active_deactive'], 'method' => 'POST']) }}
                                {{ Form::hidden('user_id', $user->id) }}
                                {{ Form::submit(($user->active == 0) ? 'Activeer' : 'Deactiveer', 
                                    ['name' => 'submit', 'class' => 'btn btn-warning btn-sm']) }}
                            {{ Form::close() }}
                        @endif
                    </td>
                    @endforeach
                </tr>

            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
    
        <div class="modal fade" style = "overflow:hidden;" id="roleModal" aria-labelledby = "modallabel" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Verander rang</h3>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(['route' => ['users.change_role'], 'method' => 'POST']) }}
                            {{ Form::hidden('user_id') }}
                            <p>{{ Form::select('role', $roles, null, ['class' => 'form-control']) }}</p>
                            {{ Form::submit('Opslaan', ['name' => 'submit', 'class' => 'btn btn-success btn-block btn-change-role']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>

@endsection

