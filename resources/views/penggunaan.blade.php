

@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="table-responsive">

<div class="table-responsive">

            
            <form action="/penggunaan/cari" method="GET" class="form-inline">
                <input class="form-control" type="text" name="cari" placeholder="Cari Labor.." value="{{ old('cari')}}">
                <input class="btn btn-primary ml-3" type="submit" value="CARI" >
            </form>

<br>
                <a href="/penggunaan/tambah" class="btn btn-default" > + Tambah Penggunaan Baru </a>
<br>
<br>


                    <table class="table align-items-center table-dark">
                        <thead class="thead-dark">
                            <tr>
                               
                                <th scope="col">ID Labor</th>
                                <th scope="col">ID Dosen</th>
                                <th scope="col">Jumlah_mahasiswa</th>
                                <th scope="col">Tanggal Penggunaan</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                <tbody>
                            @foreach($penggunaan as $p)
                            <tr>
                                
                                <td>{{ $p->id_labor }}</td>
                                <td>{{ $p->id_dosen }}</td>
                                <td>{{ $p->jumlah_mahasiswa }}</td>
                                <td>{{ $p->tgl_penggunaan }}</td>
                                <td>
                                    <a href="/penggunaan/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/penggunaan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
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



