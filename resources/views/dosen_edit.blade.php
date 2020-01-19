


@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            
                <div class="card mt-5">
                <div class="card-header text-center">
                     <strong>EDIT Data Dosen</strong> 
                </div>
                <div class="card-body">
                    <a href="/dosen" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/dosen/update/{{ $dosen->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>ID Dosen</label>
                            <input type="text" name="id" class="form-control" placeholder="ID Alat.." value=" {{ $dosen->id }}">
 
                           
 
                        </div>

                        <div class="form-group">
                            <label>Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen.." value=" {{ $dosen->nama_dosen }}">
 
 
                        </div>


                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan.." value=" {{ $dosen->jabatan }}">
 
                        </div>


                        <div class="form-group">
                            <label>Mata Kuliah</label>
                            <input type="text" name="mata_kuliah" class="form-control" placeholder="Mata Kuliah.." value=" {{ $dosen->mata_kuliah }}">
 
 
                        </div>

                          <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin.." value=" {{ $dosen->jenis_kelamin }}">
 
 
                        </div>

                          <div class="form-group">
                            <label>Nomor Handphone</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone.." value=" {{ $dosen->no_hp }}">
 
                        </div>

                

                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email.." value=" {{ $dosen->email }}">
 
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