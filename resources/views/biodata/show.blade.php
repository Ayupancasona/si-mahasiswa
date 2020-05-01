  
@extends("layout.app")

@section("content")

<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

<ul>
	<li>ID: {{ $data->id}} </li>
	<li>Nama: {{ $data->name}} </li>
	<li>NIM: {{ $data->nim}} </li>
	<li>Alamat: {{ $data->address}} </li>
	<li>File Path : {{ $data->photo }} </li>
	<li>Foto Mahasiswa : 
		<img src="{{ Storage::url($data->foto)}}" width="100dp"> </li>
</ul>
	<a href="{{ route('biodata.index') }}">Kembali</a>
	 </div>
            </div>
        </div>
    </section>
@endsection