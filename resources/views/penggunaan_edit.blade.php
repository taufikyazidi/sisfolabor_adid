

@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            
                <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>EDIT DATA PENGGUNAAN</strong> 
                </div>
                <div class="card-body">
                    <a href="/penggunaan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
             
                    <form method="post" action="/penggunaan/update/{{ $penggunaan->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                       


                        <div class="form-group">
                            <label>ID Labor</label>
                            <input type="text" name="id_labor" class="form-control"  value="{{ $penggunaan->id_labor }}">
 
                        </div>


                        <div class="form-group">
                            <label>Jumlah Mahasiswa</label>
                            <input type="text" name="jumlah_mahasiswa" class="form-control"  value="{{ $penggunaan->jumlah_mahasiswa }}">

                        </div>


                         <div class="form-group">
                            <label>ID Dosen</label>
                            <input type="text" name="id_dosen" class="form-control"  value="{{ $penggunaan->id_dosen }}">
 
                        </div>

                         <div class="form-group">
                            <label>Tanggal Penggunaan</label>
                             <input type="date" name="tgl_penggunaan" class="form-control" value="{{ $penggunaan->tgl_penggunaan }}">
 
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