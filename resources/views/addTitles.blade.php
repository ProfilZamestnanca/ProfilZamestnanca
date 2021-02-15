<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Titles</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}"/>
</head>
<body>
<div class="add-btn-wrapper">
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#addTitle">Pridať</button>
</div>

{!! Form::open(['action' => 'addController@storeTitle','method' => 'POST']) !!}

<!-- Modal -->
<div class="modal fade" id="addTitle" tabindex="-1" role="dialog" aria-labelledby="addTitle"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTitle">Pridať titul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="name-wrapper">
                    {{Form::text('nameTitle','',['class' => 'form-control register-input','placeholder' => 'Nazov'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('schoolName','',['class' => 'form-control register-input','placeholder' => 'Nazov školy'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('shortName','',['class' => 'form-control register-input','placeholder' => 'Skratka'])}}
                    {{Form::text('year','',['class' => 'form-control register-input','placeholder' => 'Rok ukončenia štúdia'])}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn reg-btn" data-dismiss="modal">Zavrieť</button>
                {{Form::submit('Pridať',['class'=>'btn reg-btn'])}}
            </div>
        </div>
    </div>

</div>
{!! Form::close() !!}
</body>
</html>
