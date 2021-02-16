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
                    <div class="label-input">
                        Meno
                    </div>
                    {{Form::text('meno',$zam->getName(),['class' => 'form-control register-input','placeholder' => 'Meno'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Pracovisko
                    </div>
                    {{Form::text('pracovisko',$zam->getWorkPlace(),['class' => 'form-control register-input','placeholder' => 'Pracovisko'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Oddelenie
                    </div>
                    {{Form::text('oddelenie',$zam->getDepartment(),['class' => 'form-control register-input','placeholder' => 'Oddelenie'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Miestnosť
                    </div>
                    {{Form::text('miestnost',$zam->getRoom(),['class' => 'form-control register-input','placeholder' => 'Miestnosť'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Funkcia
                    </div>
                    {{Form::text('funkcia',$zam->getFunction(),['class' => 'form-control register-input','placeholder' => 'Funkcia'])}}
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
