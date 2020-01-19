<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
class DosenController extends Controller
{
    public function index()
	{
		$dosen = Dosen::all();
    	return view('dosen', ['dosen' => $dosen]);
	}

	public function tambah()
	{
		return view('dosen_tambah');
	}
   	


	public function store(Request $request)
	{
		$this->validate($request,[
    		'id' => 'required',
    		'nama_dosen' => 'required'
    		
    		

    	]);
 
        Dosen::create([
    		'id' => $request->id,
    		'nama_dosen' => $request->nama_dosen,
    		'jabatan' => $request->jabatan,
    		'mata_kuliah' => $request->mata_kuliah,
    		'jenis_kelamin' => $request->jenis_kelamin,
    		'no_hp' => $request->no_hp,
    		'email' => $request->email,

    	]);
 
    	return redirect('/dosen');
	}

	public function edit($id)
		{
		   $dosen = Dosen::find($id);
		   return view('dosen_edit', ['dosen' => $dosen]);
		}

	public function delete($id)
	{
	    $dosen = Dosen::find($id);
	    $dosen->delete();
	    return redirect('/dosen');
	}

	public function update($id, Request $request)
	{
	    $this->validate($request,[
		   'id' => 'required',
    		'nama_dosen' => 'required'
	    ]);
	 
	    $dosen = Dosen::find($id);
	    $dosen->id = $request->id;
	    $dosen->nama_dosen = $request->nama_dosen;
	    $dosen->jabatan = $request->jabatan;
	    $dosen->mata_kuliah = $request->mata_kuliah;
	    $dosen->jenis_kelamin = $request->jenis_kelamin;
	    $dosen->no_hp = $request->no_hp;
	    $dosen->email = $request->email;
	    $dosen->save();
	    return redirect('/dosen');
	}
}
