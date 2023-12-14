<?php

namespace App\Http\Controllers;
use App\Models\nada;
use Illuminate\Http\Request;

class nadaa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=nada::all();
        return view('/isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.uas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'Nama'=> 'required',
            'Hobi'=> 'required',
            'CitaCita'=> 'required',
            'NIM'=> 'required|numeric',
        ],[
            'Nama.required'=> 'Nama Harus Diisi!',       
            'Hobi.required'=> 'Hobi Harus Diisi!',
            'CitaCita.required'=> 'Citacita Harus Diisi!',
            'NIM.required'=> 'NIM Harus Diisi!',  
        ]);
        $data =[
            'Nama'=>$request->input('Nama'),
            'Hobi'=>$request->input('Hobi'),
            'CitaCita'=>$request->input('CitaCita'),
            'NIM'=>$request->input('NIM')
        ];
        nada::create($data);
        return redirect('isian')->with('success', 'Data Berhasil Masuk!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = nada::where('Nama',$id)->first();
        return view('isian.edit')->with('data',$data);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'Nama'=> 'required',
            'Hobi'=> 'required',
            'CitaCita'=> 'required',
            'NIM'=> 'required|numeric',
        ],[
            'Nama.required'=> 'Nama Harus Diisi!',       
            'Hobi.required'=> 'Hobi Harus Diisi!',
            'CitaCita.required'=> 'Citacita Harus Diisi!',
            'NIM.required'=> 'NIM Harus Diisi!',  
        ]);
        $data =[
            'Nama'=>$request->input('Nama'),
            'Hobi'=>$request->input('Hobi'),
            'CitaCita'=>$request->input('CitaCita'),
            'NIM'=>$request->input('NIM')
        ];
        nada::where('nama',$id)->update($data);
        return redirect('isian')->with('success', 'Data Berhasil Masuk!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        nada::where('Nama', $id)->delete();
        return redirect('isian')->with('success','Data berhasil diapus!');
    }
}