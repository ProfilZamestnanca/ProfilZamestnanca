<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/head.css') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light header-back">
    <h3 class="navbar-brand" style="color: white">Profil Zamestnanca</h3>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/domov') }}" style="color: white">Domov<span class="sr-only">(current)</span></a>
            </li>

        </ul>
        @if(Session::get('id') == '')
            {!! Form::open(['action' => 'loginController@store','method' => 'POST']) !!}
            <div class="login-wrapper">
                {{Form::text('name','',['class' => 'form-control register-input','placeholder' => 'Meno'])}}
                {{Form::password('password',['class' => 'form-control register-input','placeholder' => 'Heslo'])}}
                <div class="header-btn">
                    {{Form::submit('Prihlasiť',['class'=>'btn btn-light'])}}
                </div>
                {!! Form::close() !!}
                <div class="header-btn">
                    <a class="btn btn-light" href="{{ url('/register') }}">Registrácia</a>
                </div>
            </div>
        @else
            <div class="dropdown">
                <button  class="btn btn-light dropdown-toggle name-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Session::get('name')}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('/profile/'.Session::get('id')) }}">Moj profil</a>
                    <a class="dropdown-item" href="{{ url('/logOut') }}">Odhlasiť</a>
                </div>
            </div>
        @endif
    </div>
</nav>
</body>
</html>
