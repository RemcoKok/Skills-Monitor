@extends('adminlte::page')

@section('title', 'AdminLTE')
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@section('content_header')
    <h1>SUPERADMIN Dashboard </h1>
@stop

@section('content')
<script>
    $(document).ready(function(){
        $('#rank').change(function(){
            var rank_val = $('#rank').val();
            alert(rank_val);
        });
    });
</script>

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

                <td><select name="rank"class= "form-control" id="rank">
                <option value="1" @if($user->student=='1') 
                selected="selected" @endif >student</option>
                <option value="0" @if($user->docent=='0') 
                selected="selected" @endif >docent</option>
                <option value="2" @if($user->admin=='2') 
                selected="selected" @endif >admin</option>
                <option value="3" @if($user->gast=='3') 
                selected="selected" @endif >gast</option>
                </select>
                </td>
                
            </tr>
            @endforeach

  
             </tbody>
            </table>

         </section>
        </section>
@endsection