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
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#editTitle{{$l.$i}}">Upraviť</button>
    <button type="button" class="btn btn-space btn-danger" data-toggle="modal" data-target="#deleteTitle{{$l.$i}}"><span
            aria-hidden="true">&times;</span></button>
</div>


<!-- Modal -->
<div class="modal fade" id="editTitle{{$l.$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'addController@storeEditTitle','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTitle{{$l.$i}}">Upraviť Titul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{Form::text('idTitle',$zam->sortedTitles[$l][$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov titulu
                    </div>
                    {!! Form::select('idTitle',[$zam->allTitles[0]->id => $zam->allTitles[0]->getTitleType(),
                   $zam->allTitles[1]->id => $zam->allTitles[1]->getTitleType(),
                  $zam->allTitles[2]->id => $zam->allTitles[2]->getTitleType(),
                  $zam->allTitles[3]->id => $zam->allTitles[3]->getTitleType(),
                  $zam->allTitles[4]->id => $zam->allTitles[4]->getTitleType(),
                   $zam->allTitles[5]->id => $zam->allTitles[5]->getTitleType(),
                  $zam->allTitles[6]->id => $zam->allTitles[6]->getTitleType(),
                  $zam->allTitles[7]->id => $zam->allTitles[7]->getTitleType(),
                ],$zam->sortedTitles[$l][$i]->getTitleType(),['class'=>'form-control','placeholder'=>$zam->sortedTitles[$l][$i]->getTitleType(), 'disabled' => 'disabled']) !!}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov školy
                    </div>
                    {{Form::text('nazovSkoly',$zam->sortedTitles[$l][$i]->getSchool(),['class' => 'form-control register-input','placeholder' => 'Nazov školy'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Rok
                    </div>
                    {{Form::text('rok',$zam->sortedTitles[$l][$i]->getYear(),['class' => 'form-control register-input','placeholder' => 'Rok ukončenia štúdia'])}}
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
<div class="modal fade" id="deleteTitle{{$l.$i}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    {!! Form::open(['action' => 'addController@deleteTitle','method' => 'POST']) !!}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTitle{{$l.$i}}">Naozaj chcete odstrániť Titul?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                {{Form::text('id',$zam->sortedTitles[$l][$i]->id,['class' => 'form-control hidden-input','placeholder' => 'id'])}}
                <button type="button" class="btn reg-btn" data-dismiss="modal">Zavrieť</button>
                {{Form::submit('Odstrániť',['class'=>'btn btn-danger'])}}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

</body>
</html>
