<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Labor;
class LaborController extends Controller
{
    public function index()

	{
		$labor = Labor::all();
    	return view('labor', ['labor' => $labor]);
	}
   		

   	public function tambah()
	{
		return view('labor_tambah');
	}

	public function store(Request $request)
	{
		$this->validate($request,[
    		'kode_labor' => 'required'
    		
    		
    		

    	]);
 
        Labor::create([
    		
    		'kode_labor' => $request->kode_labor,
    		'nama_labor' => $request->nama_labor,
    		'deskripsi' => $request->deskripsi
    		

    	]);
 
    	return redirect('/labor');
	}

	public function edit($id)
	{
	   $labor = Labor::find($id);
	   return view('labor_edit', ['labor' => $labor]);
	}

	public function delete($id)
	{
	    $labor = Labor::find($id);
	    $labor->delete();
	    return redirect('/labor');
	}

	public function update($id, Request $request)
	{
	    $this->validate($request,[
		   
    		'kode_labor' => 'required'
	    ]);
	 
	    $labor = Labor::find($id);
	    
	    $labor->kode_labor = $request->kode_labor;
	    $labor->nama_labor = $request->nama_labor;
	    $labor->deskripsi = $request->deskripsi;
	    
	    $labor->save();
	    return redirect('/labor');
	}
}
