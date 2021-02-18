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
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#editDigSkill{{$i}}">Upraviť</button>
    <button type="button" class="btn btn-space btn-danger" data-toggle="modal" data-target="#deleteDigSkill{{$i}}"><span
            aria-hidden="true">&times;</span></button>
</div>


<!-- Modal -->
<div class="modal fade" id="editDigSkill{{$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'editController@storeEditDigSkill','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDigSkill{{$i}}">Upraviť Digitálnu Zručnosť</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{Form::text('id',$zam->getDigitalSkills()[$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov
                    </div>
                    {{Form::text('nazov',$zam->getDigitalSkills()[$i]->getName(),['class' => 'form-control register-input','placeholder' => 'Názov'])}}
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn reg-btn" data-dismiss="modal">Zavrieť</button>
                {{Form::submit('Upraviť',['class'=>'btn reg-btn'])}}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

<div class="modal fade" id="deleteDigSkill{{$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'deleteController@deleteDigSkill','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDigSkill{{$i}}">Naozaj chcete odstrániť Digitálnu Zručnosť?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                {{Form::text('id',$zam->getDigitalSkills()[$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <button type="button" class="btn reg-btn" data-dismiss="modal">Zavrieť</button>
                {{Form::submit('Odstrániť',['class'=>'btn btn-danger'])}}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
</body>
</html>
