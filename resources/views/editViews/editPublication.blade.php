<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}"/>
</head>
<body>
<div style="display: flex;justify-content: center;padding-bottom: 10px">
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#editPublication{{$l.$i}}">Upraviť
    </button>
    <button type="button" class="btn btn-space btn-danger" data-toggle="modal"
            data-target="#deletePublication{{$l.$i}}"><span aria-hidden="true">&times;</span></button>
</div>


<!-- Modal -->
<div class="modal fade" id="editPublication{{$l.$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'editController@storeEditPublication','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPublication{{$l.$i}}">Upraviť Publikáciu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{Form::text('id',$zam->sortedPublications[$l][$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov
                    </div>
                    {{Form::text('nazov',$zam->sortedPublications[$l][$i]->getName(),['class' => 'form-control register-input','placeholder' => 'Nazov'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Rok vydania
                    </div>
                    {{Form::text('rokVydania',$zam->sortedPublications[$l][$i]->getYear(),['class' => 'form-control register-input','placeholder' => 'Rok vydania'])}}
                </div>
                <div class="name-wrapper">
                    {{Form::textarea('contentPublication',$zam->sortedPublications[$l][$i]->getContent(),['class' => 'form-control register-input','placeholder' => 'Popis'])}}
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

<div class="modal fade" id="deletePublication{{$l.$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'deleteController@deletePublication','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePublication{{$l.$i}}">Naozaj chcete odstrániť Publikáciu?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                {{Form::text('id',$zam->sortedPublications[$l][$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <button type="button" class="btn reg-btn" data-dismiss="modal">Zavrieť</button>
                {{Form::submit('Odstrániť',['class'=>'btn btn-danger'])}}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
</body>
</html>
