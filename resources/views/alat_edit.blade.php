


@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            
                        <div class="card mt-5">
                <div class="card-header text-center">
                     <strong>Edit Data Alat</strong> 
                </div>
                <div class="card-body">
                    <a href="/alat" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/alat/update/{{ $alat->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


                        <div class="form-group">
                            <label>Kode Alat</label>
                            <input type="text" name="kode_alat" class="form-control" placeholder="Kode Alat.." value=" {{ $alat->kode_alat }}">
 
 
                        </div>
 
                        <div class="form-group">
                            <label>ID Labor</label>
                            <input type="text" name="id_labor" class="form-control" placeholder="ID Labor.." value=" {{ $alat->id_labor }}">
 
 
                        </div>


                        <div class="form-group">
                            <label>Nama Alat</label>
                            <input type="text" name="nama_alat" class="form-control" placeholder="Nama Alat.." value=" {{ $alat->nama_alat }}">
 
                        </div>


                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah.." value=" {{ $alat->jumlah }}">
 
 
                        </div>

 
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
                    </table>
                    </div>
                    </div>
                    
                </div>
            </div>

@endsection