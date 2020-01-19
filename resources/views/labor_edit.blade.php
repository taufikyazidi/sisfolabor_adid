

@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            
                <div class="card mt-5">
                <div class="card-header text-center">
                     <strong>EDIT DATA LABOR</strong> 
                </div>
                <div class="card-body">
                    <a href="/labor" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/labor/update/{{ $labor->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


 
                        

                        <div class="form-group">
                            <label>Kode Labor</label>
                            <input type="text" name="kode_labor" class="form-control" placeholder="Kode_labor.." value=" {{ $labor->kode_labor }}">
 
 
                        </div>


                        <div class="form-group">
                            <label>Nama Labor</label>
                            <input type="text" name="nama_labor" class="form-control" placeholder="Nama Labor.." value=" {{ $labor->nama_labor }}">
 
                        </div>


                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi.." value=" {{ $labor->deskripsi }}">
 
 
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