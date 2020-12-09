@foreach($petani as $key => $data)
    <tr>
        <th>{{$data->id}}</th>
        <th>{{$data->meno}}</th>
        <th>{{$data->pracovisko}}</th>
        <th>{{$data->oddelenie}}</th>
        <th>{{$data->miestnost}}</th>
    </tr>
@endforeach
