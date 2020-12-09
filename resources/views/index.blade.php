

    <style>
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="push-top">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table">
            <thead>
            <tr class="table-warning">
                <td>Id</td>
                <td>Meno</td>
                <td>Pracovisko</td>
                <td>Oddelenie</td>
                <td>Miestnost</td>
                <td class="text-center">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($zamestnanec as $zamestnanci)
                <tr>
                    <td>{{$zamestnanci->id}}</td>
                    <td>{{$zamestnanci->meno}}</td>
                    <td>{{$zamestnanci->pracovisko}}</td>
                    <td>{{$zamestnanci->oddelenie}}</td>
                    <td>{{$zamestnanci->miestnost}}</td>
                    <td class="text-center">
                        <a href="{{ url('/zamVC/edit', $zamestnanci->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ config('app.url')}}/zamV" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>

