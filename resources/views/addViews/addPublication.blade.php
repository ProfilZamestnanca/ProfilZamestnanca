<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Laboratori</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}"/>
</head>
<body>
<div class="add-btn-wrapper publication-edit-wrapper">
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#addPublication">Pridať</button>
</div>

{!! Form::open(['action' => 'addController@storePublication','method' => 'POST']) !!}

<!-- Modal -->
<div class="modal fade" id="addPublication" tabindex="-1" role="dialog" aria-labelledby="addPublication"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPublication">Pridať Publikáciu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov
                    </div>
                    {{Form::text('nazov','',['class' => 'form-control register-input','placeholder' => 'Nazov'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Rok vydania
                    </div>
                    {{Form::text('rok','',['class' => 'form-control register-input','placeholder' => 'Rok vydania'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::textarea('contentPublication','',['class' => 'form-control register-input','placeholder' => 'Popis'])}}
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
