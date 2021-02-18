<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}"/>
</head>
<body>
<div class="add-btn-wrapper publication-edit-wrapper">
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#editContacts">Upraviť</button>
</div>

{!! Form::open(['action' => 'addController@storeEditContacts','method' => 'POST']) !!}

<!-- Modal -->
<div class="modal fade" id="editContacts" tabindex="-1" role="dialog" aria-labelledby="editContacts"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editContacts">Upraviť Kontakty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="name-wrapper">
                    <div class="label-input">
                        Telefón
                    </div>
                    {{Form::text('phone',$zam->getContacts()->getTelephone(),['class' => 'form-control register-input','placeholder' => 'Telefón'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Mobil
                    </div>
                    {{Form::text('mobile',$zam->getContacts()->getMobile(),['class' => 'form-control register-input','placeholder' => 'Mobil'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Email
                    </div>
                    {{Form::text('email',$zam->getContacts()->getEmail(),['class' => 'form-control register-input','placeholder' => 'Email'])}}
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
