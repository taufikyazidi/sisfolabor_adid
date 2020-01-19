<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggunaan;
class PenggunaanController extends Controller
{
    public function index()
	{
		$penggunaan = Penggunaan::all();
    	return view('penggunaan', ['penggunaan' => $penggunaan]);
	}

	public function tambah()
	{
		return view('penggunaan_tambah');
	}


	public function store(Request $request)
	{
		$this->validate($request,[
    		'id_labor' => 'required'

    		
    		
    		

    	]);
 
        Penggunaan::create([
    		
    		'id_labor' => $request->id_labor,
    		'jumlah_mahasiswa' => $request->jumlah_mahasiswa,
    		'id_dosen' => $request->id_dosen,
    		'tgl_penggunaan' => $request->tgl_penggunaan

    		

    	]);
 
    	return redirect('/penggunaan');
	}

	public function edit($id)
	{
	   $penggunaan = Penggunaan::find($id);
	   return view('penggunaan_edit', ['penggunaan' => $penggunaan]);
	}

	public function delete($id)
	{
	    $penggunaan = Penggunaan::find($id);
	    $penggunaan->delete();
	    return redirect('/penggunaan');
	}

	public function update($id, Request $request)
	{
	    $this->validate($request,[
		   
    		'id_labor' => 'required'
	    ]);
	 
	    $penggunaan = Penggunaan::find($id);
	    
	    $penggunaan->id_labor = $request->id_labor;
	    $penggunaan->jumlah_mahasiswa = $request->jumlah_mahasiswa;
	    $penggunaan->id_dosen = $request->id_dosen;
	    $penggunaan->tgl_penggunaan = $request->tgl_penggunaan;
	    
	    $penggunaan->save();
	    return redirect('/penggunaan');
	}
}
