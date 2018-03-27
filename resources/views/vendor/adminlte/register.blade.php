@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop


@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>
    <!-- Wit vlak(box) & koptekst registratieformulier -->
        <div class="register-box-body"> 
        <p class="login-box-msg">Registeer met je HZ-account</p>

    <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
        {!! csrf_field() !!}

    <!-- tekstvak voornaam -->
        <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Voornaam">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    <!-- Tekstvak achternaam -->
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Achternaam">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    <!-- Tekstvak (HZ) e-mailadres -->
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="HZ E-mailadres">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
    <!-- Tekstvak wachtwoord -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Wachtwoord HZ-account">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
    <!-- Tekstvak herhaal wachtwoord -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Herhaal wachtwoord HZ-account">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

            <!-- Registratie knop -->
                <button type="submit"
                        class="btn btn-primary btn-block btn-flat"
                >{{ trans('adminlte::adminlte.register') }}</button>
            </form>
            <!-- Link als je al een profiel hebt -->
            <div class="auth-links">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    @yield('js')
@stop
