@extends('adminlte::page')

@section('title', 'Invullen')

@section('content_header')

@stop

@section('content')

<!-- @if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif -->
    <div class="box">
        @foreach($form as $formTitle)
            <h2>&nbsp;{{ $formTitle->title }}</h2>
            <br>
        @endforeach
        
    </div>

    <div class="box">
    @foreach($forms as $form)
        <table class="table table-bordered">
            <thead>
            @foreach($rows as $row)
                @if($row->id==1)
                    @foreach($cells as $cell)
                        @if($cell->row_id == $row->id)
                        <th>
                            Level {{ $cell->cellLevel }}
                            @if($cell->id==1)
                                (slecht)
                            @endif
                        </th>
                        @endif
                    @endforeach
                @endif
            @endforeach
                <th>Comment</th>
            </thead>

            <form action="/score" method="POST">
                {{ csrf_field()}}

                <tbody>
                    @foreach($rows as $row) 
                        <tr>
                            @foreach($cells as $cell)
                                @if($row->id == $cell->row_id)
                                    <td><input name="Option{{ $row->id }}"  id="{{ $cell->id }}" value="option" type="radio">&nbsp;{{ $cell->cellText }}</td>
                                @endif
                            @endforeach
                            <td colspan="6" class="pull right">
                        <input type="text" name="comment[]" placeholder="comment">
                    </td>

                        </tr>

                    @endforeach

                </tbody>
        </table>

        <?php
            //<button class="btn btn-primary pull-left" onclick="location.href='{{ url("/list") }}'">Back</button>
        ?>

            <button type="submit" class="btn btn-primary pull-right" onclick="location.href='{{ url("/home") }}'">Submit</button>
            </form>
    @endforeach
    </div>

    <?php
    //----------------------------------------------------------- 
    //-------------Einde User Story, Begin stuff van GRE1--------
    //-----------------------------------------------------------
    

    // <div class="box">
    //     <div class="row invoice-info">
    //         <div class="col-sm-4 invoice-col">
    //             <h2>Schrijfregels voor webteksten</h2>
    //             <h6><br></h6>
    //             <h5><strong>Hou je koppen helder</strong></h5>
    //                 <p>
    //                 &emsp;Begin met een grote kop en gebruik die niet vaker dan 1 keer <br>
    //                 &emsp;per pagina. Waarom? Het ziet er beter uit en is makkelijker te <br>
    //                 &emsp;lezen. Nog een reden: de zoekmachine van Google wil weten <br>
    //                 &emsp;wat de belangrijkste kop is, oftewel waar de tekst op jouw <br>
    //                 &emsp;website over gaat. Als je veel tekst schrijft, verdeel die dan <br>
    //                 &emsp;verder met middelgrote en kleine koppen. <br>
    //                 </p>

    //             <h5><strong>Hou het kort en krachtig</strong></h5>
    //                 <p>
    //                 &emsp;De meeste internetgebruikers zijn druk en hebben geen tijd <br>
    //                 &emsp;voor lange artikelen op een website. Dus focus op 1 onderwerp <br>
    //                 &emsp;en schrijf bondig om de aandacht van de lezer vast te houden. <br>
    //                 </p>
    //         </div>
    //     </div>
    // </div>

    ?>
@stop
