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
    @foreach($forms as $form)
            <h2>&nbsp;{{ $form->title }}</h2><br>
    
        <table class="table table-bordered">
            <thead>
            @foreach($rows as $row)
                @if($row->id==1)
                    @foreach($cells as $cell)
                        @if($cell->row_id == $row->id)
                        <th>
                            Level {{ $cell->cellLevel }} <font color="red">*</font>
                            @if($cell->id==1)
                                (slecht)
                            @endif
                        </th>
                        @endif
                    @endforeach
                @endif
            @endforeach
                <th>Comment <font color="blue">(Optional)</font></th>
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

            <button type="submit" class="btn btn-primary pull-right" onclick="location.href='{{ url("/home") }}'">Submit</button>
            </form>
            <button type=""button class="btn btn-primary pull-left" onclick="location.href='{{ url("/rating") }}'">Back</button>
    @endforeach
    </div>

    <?php
    //----------------------------------------------------------- 
    //-------------Einde User Story, Begin stuff van GRE1--------
    //-----------------------------------------------------------
    ?>
<br>
<br>
<br>


<div class="box">
    <div class="row invoice-info">
        <div class="col-sm-3 invoice-col">
            <h2>Enquete</h2>
            <h6><br></h6>
            <h5><strong>Vul in en maak kans!</strong></h5>
            <p>
                    Als je deze enquete invult over de site kan je kans maken op
                    een developers toolbox, medemogelijk gemaakt door ons! Deze
                    toolbox bevat van alles wat je nodig zou kunnen hebben tijdens
                    het maken van een site. Deze enquete is tamelijk kort, maar met
                    jouw feedback kunnen we heel veel! Alvast bedankt :) <br>
            </p>

                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Linkjes waren moeilijk te identificeren
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Te veel stappen nodig om een formulier te maken
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Te kleine tekst
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Ik ben kleurenblind en kon bepaalde elementen niet onderscheiden
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      De site was te traag en moest soms te lang laden
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Eigenlijk alles op deze site is vreselijk. Hier ga ik geen gebruik van maken
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Geen van de bovenstaande. Alles werkte gewoon volgens verwachtingen.
                    </label>
                  </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong style="color:blue; text-decoration:underline;">Submit en maak kans op een dev toolbox!</strong>
            </p>
        </div>

        <div class="col-sm-2 invoice-col">
            <h2>Contact</h2>
            <h6><br></h6>
            <h5><strong>Vragen? Neem contact op!</strong></h5>
            Name:<font color="red">*</font><br>
            <textarea placeholder="Name ..." rows="1" type="text" name="firstname"></textarea><br>
            Email:<font color="red">*</font><br>
            <textarea placeholder="Email ..." rows="1" type="text" name="firstname"></textarea><br>
            Student Id:<font color="red">*</font><br>
            <textarea placeholder="Student Id ..." rows="1" type="text" name="firstname"></textarea><br>
            Question:<font color="red">*</font><br>
            <textarea  rows="2" placeholder="Question ..."></textarea><br>
            <strong>Or give us a call: 06 1234 5678</strong>
        </div>

        <div class="col-sm-2 invoice-col">
            <h2><br></h2>
            <h6><br></h6>
            <h5><strong>Andere mogelijkheden tot contact.</strong></h5>
                <ul style="list-style-type: none">
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;FaceBook</li>
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;Instagram</li>
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;Twitter</li>
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;WhatsApp</li>
                    <li style="color:blue; text-decoration:underline;">&#8618;&nbsp;E-mail</li>
                <ul>
                <h5><strong>Gevestigd in:</strong></h5>
                    <li>&nbsp;Nederland</li>
                    <li>&nbsp;Boulevard Bankert</li>
                    <li>&nbsp;4382 AC Vlissingen</li>
                    <li>&nbsp;Klaslokaal 1a</li>
                <ul>
            </div>
    </div>
</div>

@stop
