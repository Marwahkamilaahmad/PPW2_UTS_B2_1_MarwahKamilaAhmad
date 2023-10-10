@extends('index')

@section('content')

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>no</th>
        <th>id</th>
        <th>nama pemain</th>
        <th>no punggung</th>
        <th>posisi</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($data_pemain as $data_pemain)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data_pemain->id}}</td>
            <td>{{$data_pemain->nama_pemain}}</td>
            <td>{{$data_pemain->no_punggung}}</td>
            <td>{{$data_pemain->posisi}}</td>
        </tr>
    </tbody>
    @endforeach
</table>


@endsection
