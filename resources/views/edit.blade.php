<table class="table">
    <tbody>
    @foreach($zam as $zamestnanci)
        <tr>
            <td>{{$zamestnanci->id}}</td>
            <td>{{$zamestnanci->meno}}</td>
            <td>{{$zamestnanci->pracovisko}}</td>
            <td>{{$zamestnanci->oddelenie}}</td>
            <td>{{$zamestnanci->miestnost}}</td>

        </tr>
    @endforeach
    </tbody>
</table>
