@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
    <div class="form-group">
        <label>Minimal</label>
        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
            @foreach($comps as $comp)
                <option value="{{ $comp->id }}">{{ $comp-> title }}</option>
            @endforeach
        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-8e5z-container"><span class="select2-selection__rendered" id="select2-8e5z-container" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </div>
        <div class="box">
            <div class="header">
                <h2 class="box-title">Mijn openstaande formulieren</h2>
            </div>
            <?php $competence = "" ?>
            @froeach($forms as $form)
                    <table class="table table-bordered">
                    <theader>        
                        <tr>
                            <th>titel</th>
                            <th>beoordeelde</th>
                        </tr>
                    </theader>
                @endif
                @foreach($forms as $form)
                <tbody>
                    <?php $check = 2; ?>
                    <tr>
                        <td>{{ $form->title }}</td>                                           
                    @foreach($users as $user)
                    
                    
                    
                        @foreach($ratings as $rating)
                             @if($check == 2)
                            @if($user->id == $rating->users_id_rated)
                                <td>{{ $user->name }}</td>
                                <?php $check = 6; ?>
                                
                            @endif
                            @endif
                        @endforeach 
                    
                    @endforeach  
                @endforeach

                </tr>
                    
            

            </tbody>
        </table>  
    </div>
@stop