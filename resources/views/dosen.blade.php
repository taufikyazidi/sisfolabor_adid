@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">

<div class="table-responsive">

            
            <form action="/dosen/cari" method="GET" class="form-inline">
                <input class="form-control" type="text" name="cari" placeholder="Cari Labor.." value="{{ old('cari')}}">
                <input class="btn btn-primary ml-3" type="submit" value="CARI" >
            </form>

<br>
                <a href="/dosen/tambah" class="btn btn-default" > + Tambah Dosen Baru </a>
<br>
<br>

            <div class="table-responsive">
                    <table class="table align-items-center table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Dosen</th>
                                <th scope="col">Nama Dosen</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Nomor Handphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                <tbody>
                         @foreach($dosen as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->nama_dosen }}</td>
                                <td>{{ $d->jabatan }}</td>
                                <td>{{ $d->mata_kuliah }}</td>
                                <td>{{ $d->jenis_kelamin }}</td>
                                <td>{{ $d->no_hp }}</td>
                                <td>{{ $d->email }}</td>
                                <td>
                                    <a href="/dosen/edit/{{ $d->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/dosen/hapus/{{ $d->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                </tbody>
                    </table>
                    </div>
                    </div>
                    
                </div>
            </div>

@endsection


