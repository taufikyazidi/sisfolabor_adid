






@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            
                <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Alat - <strong>TAMBAH DATA</strong> 
                </div>
                <div class="card-body">
                    <a href="/alat" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/alat/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Kode Alat</label>
                            <input type="text" name="kode_alat" class="form-control" placeholder="Kode Alat..">
 
                            @if($errors->has('kode_alat'))
                                <div class="text-danger">
                                    {{ $errors->first('kode_alat')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>ID Labor</label>
                            <input type="text" name="id_labor" class="form-control" placeholder="ID Labor..">
 
                            @if($errors->has('id_labor'))
                                <div class="text-danger">
                                    {{ $errors->first('id_labor')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama Alat</label>
                            <textarea name="nama_alat" class="form-control" placeholder="Nama Alat.."></textarea>
 
                             @if($errors->has('nama_alat'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_alat')}}
                                </div>
                            @endif
 
                        </div>

                         <div class="form-group">
                            <label>Jumlah</label>
                            <textarea name="jumlah" class="form-control" placeholder="Jumlah.."></textarea>
 
                             @if($errors->has('jumlah'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah')}}
                                </div>
                            @endif
 
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