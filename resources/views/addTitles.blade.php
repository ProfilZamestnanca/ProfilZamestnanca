<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Titles</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}"/>
</head>
<body>
<div class="add-btn-wrapper">
    <button type="button" class="btn reg-btn" data-toggle="modal" data-target="#addTitle">Pridať</button>
</div>

{!! Form::open(['action' => 'addController@storeTitle','method' => 'POST']) !!}

<!-- Modal -->
<div class="modal fade" id="addTitle" tabindex="-1" role="dialog" aria-labelledby="addTitle"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTitle">Pridať titul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov titulu
                    </div>
                    {!! Form::select('nazovTitulu',[$zam->allTitles[0]->id => $zam->allTitles[0]->getTitleType(),
                   $zam->allTitles[1]->id => $zam->allTitles[1]->getTitleType(),
                  $zam->allTitles[2]->id => $zam->allTitles[2]->getTitleType(),
                  $zam->allTitles[3]->id => $zam->allTitles[3]->getTitleType(),
                  $zam->allTitles[4]->id => $zam->allTitles[4]->getTitleType(),
                   $zam->allTitles[5]->id => $zam->allTitles[5]->getTitleType(),
                  $zam->allTitles[6]->id => $zam->allTitles[6]->getTitleType(),
                  $zam->allTitles[7]->id => $zam->allTitles[7]->getTitleType(),
                ],'',['class'=>'form-control','placeholder'=>'Vyber titul']) !!}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Názov školy
                    </div>
                    {{Form::text('skola','',['class' => 'form-control register-input','placeholder' => 'Nazov školy'])}}
                </div>
                <div class="name-wrapper">
                    <div class="label-input">
                        Rok
                    </div>
                    {{Form::text('rok','',['class' => 'form-control register-input','placeholder' => 'Rok ukončenia štúdia'])}}
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
