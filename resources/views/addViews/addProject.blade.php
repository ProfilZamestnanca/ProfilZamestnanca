<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Titles</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}"/>
</head>
<body>
<div class="add-btn-wrapper">
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#addProject">Pridať</button>
</div>

{!! Form::open(['action' => 'addController@storeProject','method' => 'POST']) !!}
<!-- Modal -->
<div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="addProject"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProject">Pridať Projekt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov
                    </div>
                    {{Form::text('nazov','',['class' => 'form-control register-input','placeholder' => 'Názov'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Rok
                    </div>
                    {{Form::text('rok','',['class' => 'form-control register-input','placeholder' => 'Rok'])}}
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
