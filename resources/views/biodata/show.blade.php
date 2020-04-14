@extends("layout")

@section("content")
    <ul>
        <li>ID: {{ $data->id }}</li>
        <li>Nama: {{ $data->name }} </li>
        <li>NIM: {{ $data->nim }} </li>
        <li>Alamat: {{ $data->address }} </li>
    </ul>

    <a href="{{ route('biodata.index') }}">Kembali</a>
@endsection