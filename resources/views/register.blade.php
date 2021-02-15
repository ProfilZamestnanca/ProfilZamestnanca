<!DOCTYPE html>
<html lang="en">
@include('head')

<head>
    <meta charset="UTF-8">
    <title>Registracia</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}"/>
<!--<script type="text/javascript" src="{{ asset('js/register.js') }}"></script>-->
</head>
<body>
<div class="container-wrapper">

    {!! Form::open(['action' => 'registerController@store','method' => 'POST']) !!}

    <div class="profile-wrapper">
        <h2 class="header">Registrácia</h2>
        <div class="inner-wrapper">
            <div class="name-wrapper">
                {{Form::text('name','',['class' => 'form-control register-input','placeholder' => 'Meno'])}}

            </div>
            <div class="name-wrapper">
                {{Form::password('password',['class' => 'form-control register-input','placeholder' => 'Heslo'])}}
            </div>
            <div class="name-wrapper">
                {{Form::password('password_confirmation',['class' => 'form-control register-input','placeholder' => 'Potvrdenie hesla'])}}
            </div>
            <div class="submit-wrapper">
                {{Form::submit('Registrovať',['class'=>'btn reg-btn'])}}
            </div>
        </div>
    </div>
    <div class="error-msg">
        @include('messages')
    </div>
    {!! Form::close() !!}
</div>

</body>
</html>
