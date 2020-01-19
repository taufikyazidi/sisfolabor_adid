



@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="table-responsive">

            
            <form action="/labor/cari" method="GET" class="form-inline">
                <input class="form-control" type="text" name="cari" placeholder="Cari Labor.." value="{{ old('cari')}}">
                <input class="btn btn-primary ml-3" type="submit" value="CARI" >
            </form>

<br>


                <a href="/labor/tambah" class="btn btn-default"> + Tambah Labor Baru </a>

<br>
<br>


                    <table class="table align-items-center table-dark">
                        <thead class="thead-dark">
                            <tr>
                              
                                <th scope="col">Kode Labor</th>
                                <th scope="col">Nama Labor</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                <tbody>
                            @foreach($labor as $l)
                            <tr>
                               
                                <td>{{ $l->kode_labor }}</td>
                                <td>{{ $l->nama_labor }}</td>
                                <td>{{ $l->deskripsi }}</td>
                                <td>
                                    <a href="/labor/edit/{{ $l->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/labor/hapus/{{ $l->id }}" class="btn btn-danger">Hapus</a>
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