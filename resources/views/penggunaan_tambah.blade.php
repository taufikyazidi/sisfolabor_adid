

@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            
                <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Labor - <strong>TAMBAH DATA</strong> 
                </div>
                <div class="card-body">
                    <a href="/labor" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/labor/store">
 
                        {{ csrf_field() }}

                      

                        <div class="form-group">
                            <label>Kode Labor</label>
                            <input type="text" name="kode_labor" class="form-control" placeholder="Kode_labor..">
 
                            @if($errors->has('kode_labor'))
                                <div class="text-danger">
                                    {{ $errors->first('kode_labor')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama Labor</label>
                            <input type="text" name="nama_labor" class="form-control" placeholder="Nama Labor..">
 
                            @if($errors->has('nama_labor'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_labor')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi.."></textarea>
 
                             @if($errors->has('deskripsi'))
                                <div class="text-danger">
                                    {{ $errors->first('deskripsi')}}
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