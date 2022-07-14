<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Pasien::all(); 
        return view('pasien.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pasien_nik' => 'bail|required|unique:tb_pasien',
            'pasien_nama' => 'required'
        ], 
        [ 
            'pasien_nik.required' => 'NIK wajib diisi', 
            'pasien_nik.unique' => 'NIK sudah ada', 
            'pasien_nama.required' => 'Nama wajib diisi' 
        ]); 
            Pasien::create([ 
            'pasien_nik' => $request->pasien_nik, 
            'pasien_nama' => $request->pasien_nama,  
            'pasien_alamat' => $request->pasien_alamat,
            'pasien_jeniskelamin' => $request->pasien_jeniskelamin,
            'pasien_goldarah' => $request->pasien_goldarah,
            'pasien_nohp' => $request->pasien_nohp,

        ]);  
            return redirect('pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Pasien::findOrFail($id); return view('pasien.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate( 
        [ 
             'pasien_nik' => 'bail|required', 
             'pasien_nama' => 'required' 
        ], 
        [ 
            'pasien_nik.required' => 'NIK wajib diisi', 
            'pasien_nama.required' => 'Nama wajib diisi'
        ] 
            ); 
            $row = Pasien::findOrFail($id);
            $row->update([
            'pasien_nik' => $request->pasien_nik,
            'pasien_nama' => $request->pasien_nama, 
            'pasien_alamat' => $request->pasien_alamat,
            'pasien_jeniskelamin' => $request->pasien_jeniskelamin,
            'pasien_goldarah' => $request->pasien_goldarah,
            'pasien_nohp' => $request->pasien_nohp,

        ]);
             return redirect('pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Pasien::findOrFail($id);
        $row->delete();
        return redirect('pasien');
    }
}
