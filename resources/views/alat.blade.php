



@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="table-responsive">

            <div class="col">
            <form action="/alat/cari" method="GET" class="form-inline">
                <input class="form-control" type="text" name="cari" placeholder="Cari Labor.." value="{{ old('cari')}}">
                <input class="btn btn-primary ml-3" type="submit" value="CARI" >
            </form>

<br>
                <a href="/alat/tambah" class="btn btn-default" > + Tambah Alat Baru </a>
            </div>
<br>
<br>

                    <table class="table align-items-center table-dark">
                        <thead class="thead-dark">
                           <tr>
                                <th scope="col">Kode Alat</th>
                                <th scope="col">ID Labor</th>
                                <th scope="col">Nama Alat</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                <tbody>
                            @foreach($alat as $a)
                            <tr>
                                <td>{{ $a->kode_alat }}</td>
                                <td>{{ $a->id_labor }}</td>
                                <td>{{ $a->nama_alat }}</td>
                                <td>{{ $a->jumlah }}</td>
                                <td>
                                    <a href="/alat/edit/{{ $a->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/alat/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
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