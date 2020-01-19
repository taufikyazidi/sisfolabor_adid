

@extends('templates/dashboard')

@section('content')
<div class="container-fluid mt--7">
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            
                <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Dosen - <strong>TAMBAH DATA</strong> 
                </div>
                <div class="card-body">
                    <a href="/dosen" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/dosen/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>ID Dosen</label>
                            <input type="text" name="id" class="form-control" placeholder="ID Dosen..">
 
                            @if($errors->has('id'))
                                <div class="text-danger">
                                    {{ $errors->first('id')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen..">
 
                            @if($errors->has('nama_dosen'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_dosen')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Jabatan</label>
                            <textarea name="jabatan" class="form-control" placeholder="Jabatan.."></textarea>
 
                             @if($errors->has('jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('jabatan')}}
                                </div>
                            @endif
 
                        </div>

                         <div class="form-group">
                            <label>Mata Kuliah</label>
                            <textarea name="mata_kuliah" class="form-control" placeholder="Mata Kuliah.."></textarea>
 
                             @if($errors->has('mata_kuliah'))
                                <div class="text-danger">
                                    {{ $errors->first('mata_kuliah')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <textarea name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin.."></textarea>
 
                             @if($errors->has('jenis_kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kelamin')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nomor Handphone</label>
                            <textarea name="no_hp" class="form-control" placeholder="Nomor Handphone.."></textarea>
 
                             @if($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <textarea name="email" class="form-control" placeholder="Email.."></textarea>
 
                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
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