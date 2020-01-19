<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alat;
class AlatController extends Controller
{
    public function index()
	{
		$alat = Alat::all();
    	return view('alat', ['alat' => $alat]);
	}

	public function tambah()
	{
		return view('alat_tambah');
	}

	public function store(Request $request)
	{
		$this->validate($request,[
    		
    		'id_labor' => 'required'
    		
    		

    	]);
 
        Alat::create([
    	
    		'kode_alat' => $request->kode_alat,
    		'id_labor' => $request->id_labor,
    		'nama_alat' => $request->nama_alat,
    		'jumlah' => $request->jumlah

    	]);
 
    	return redirect('/alat');
	}

	public function edit($id)
	{
	   $alat = Alat::find($id);
	   return view('alat_edit', ['alat' => $alat]);
	}


	public function update($id, Request $request)
	{
	    $this->validate($request,[
		  
    		'id_labor' => 'required'
	    ]);
	 
	    $alat = Alat::find($id);
	    
	    $alat->kode_alat = $request->kode_alat;
	    $alat->id_labor = $request->id_labor;
	    $alat->nama_alat = $request->nama_alat;
	    $alat->jumlah = $request->jumlah;
	    $alat->save();
	    return redirect('/alat');
	}

	public function delete($id)
	{
	    $alat = Alat::find($id);
	    $alat->delete();
	    return redirect('/alat');
	}
}
