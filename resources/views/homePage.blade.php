<!DOCTYPE html>
<html lang="en">
@include('head')
<head>
    <meta charset="UTF-8">
    <title>Domov</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage.css') }}"/>
</head>
<body>
<div class="page-wrapper">
    <table class="table">
        <thead class=" my-table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Meno</th>
            <th scope="col">Pracovisko</th>
            <th scope="col">Miestnosť</th>
            <th scope="col">Funkcia</th>
            <th scope="col">Email</th>
            <th scope="col">Tel. číslo</th>
            <th scope="col">Prejsť na profil</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td >{{ $loop->iteration }} </td>
                @if(str_replace(' ','',$user->meno) != '')
                    <th>{{$user->meno}}</th>
                @else
                    <th>Neuvedené</th>
                @endif
                @if(str_replace(' ','',$user->pracovisko) != '')
                    <th>{{$user->pracovisko}}</th>
                @else
                    <th>Neuvedené</th>
                @endif
                @if(str_replace(' ','',$user->miestnost) != '')
                    <th>{{$user->miestnost}}</th>
                @else
                    <th>Neuvedené</th>
                @endif
                @if(str_replace(' ','',$user->funkcia) != '')
                    <th>{{$user->funkcia}}</th>
                @else
                    <th>Neuvedené</th>
                @endif
                @if(str_replace(' ','',$user->email) != '')
                    <th>{{$user->email}}</th>
                @else
                    <th>Neuvedené</th>
                @endif
                @if(str_replace(' ','',$user->mobil) != '')
                    <th>{{$user->mobil}}</th>
                @else
                    <th>Neuvedené</th>
                @endif
                <th><a href="{{ url('/profile/'.$user->id) }}">Prejsť na profil</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
