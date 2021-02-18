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
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#editSubject{{$l.$i}}">Upraviť</button>
    <button type="button" class="btn btn-space btn-danger" data-toggle="modal" data-target="#deleteSubject{{$l.$i}}"><span
            aria-hidden="true">&times;</span></button>
</div>


<!-- Modal -->
<div class="modal fade" id="editSubject{{$l.$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'editController@storeEditSubject','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSubject{{$l.$i}}">Upraviť Kontakty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{Form::text('id',$zam->sortedSubjects[$l][$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov
                    </div>

                    {{Form::text('nazov',$zam->sortedSubjects[$l][$i]->getName(),['class' => 'form-control register-input','placeholder' => 'Názov'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Rok výučby
                    </div>
                    {{Form::text('rok',$zam->sortedSubjects[$l][$i]->getYear(),['class' => 'form-control register-input','placeholder' => 'Rok výučby'])}}
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

<div class="modal fade" id="deleteSubject{{$l.$i}}" tabindex="-1" role="dialog" aria-labelledby="deleteSubject"
     aria-hidden="true">
    {!! Form::open(['action' => 'deleteController@deleteSubject','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSubject{{$l.$i}}">Naozaj chcete odstrániť predmet?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                {{Form::text('id',$zam->sortedSubjects[$l][$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <button type="button" class="btn reg-btn" data-dismiss="modal">Zavrieť</button>
                {{Form::submit('Odstrániť',['class'=>'btn btn-danger'])}}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
</body>
</html>
