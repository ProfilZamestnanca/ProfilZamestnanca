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
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#editSocSkill{{$i}}">Upraviť</button>
    <button type="button" class="btn btn-space btn-danger" data-toggle="modal" data-target="#deleteSocSkill{{$i}}"><span aria-hidden="true">&times;</span></button>
</div>


<!-- Modal -->
<div class="modal fade" id="editSocSkill{{$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'addController@storeEditSocSkill','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSocSkill{{$i}}">Upraviť Sociálnu Zručnosť</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{Form::text('id',$zam->getSocialSkills()[$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov
                    </div>
                    {{Form::text('name',$zam->getSocialSkills()[$i]->name,['class' => 'form-control register-input','placeholder' => 'Názov'])}}
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

<div class="modal fade" id="deleteSocSkill{{$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'addController@deleteSocSkill','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSocSkill{{$i}}">Naozaj chcete odstrániť Sociálnu Zručnosť?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                {{Form::text('id',$zam->getSocialSkills()[$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <button type="button" class="btn reg-btn" data-dismiss="modal">Zavrieť</button>
                {{Form::submit('Odstrániť',['class'=>'btn btn-danger'])}}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
</body>
</html>
