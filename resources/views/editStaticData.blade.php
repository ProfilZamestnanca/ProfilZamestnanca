<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}"/>
</head>
<body>
<div class="add-btn-wrapper">
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#editStaticData">Upraviť</button>
</div>

{!! Form::open(['action' => 'addController@storeEditStatic','method' => 'POST']) !!}

<!-- Modal -->
<div class="modal fade" id="editStaticData" tabindex="-1" role="dialog" aria-labelledby="editStaticData"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStaticData">Upraviť údaje</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="name-wrapper">
                    {{Form::text('nameEdit',$zam->getName(),['class' => 'form-control register-input','placeholder' => 'Meno'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('workPlaceEdit',$zam->getWorkPlace(),['class' => 'form-control register-input','placeholder' => 'Pracovisko'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('yearPredmet','',['class' => 'form-control register-input','placeholder' => 'Oddelenie'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('roomEdit','',['class' => 'form-control register-input','placeholder' => 'Miestnosť'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('functionEdit','',['class' => 'form-control register-input','placeholder' => 'Funkcia'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('telPhoneEdit','',['class' => 'form-control register-input','placeholder' => 'Telefón'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('phoneEdit','',['class' => 'form-control register-input','placeholder' => 'Mobil'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::text('emailEdit','',['class' => 'form-control register-input','placeholder' => 'Email'])}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn reg-btn" data-dismiss="modal">Zavrieť</button>
                {{Form::submit('Upraviť',['class'=>'btn reg-btn'])}}
            </div>
        </div>
    </div>

</div>
{!! Form::close() !!}
</body>
</html>
