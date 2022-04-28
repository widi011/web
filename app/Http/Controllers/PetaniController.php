<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Halaman Pendataan Petani";
        // eloquen
        $petanis=new Petani;
        $petanis=$petanis->all();

        // query builder
        // $panens=Panen::getPanen()->get();
        return view ('pendataan/pendataan_petani', compact('title', 'petanis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendataan/create');
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
            'namaPetani' => 'required',
            'asal' => 'required',
            'alamat' => 'required',
            'NIK' => 'required',
            // 'foto' => 'required',
            'kelompokName' => 'required',
        
        ]);

            Petani::create([
                'namaPetani' => $request->namaPetani,
                'asal' => $request->asal,
                'alamat' => $request->alamat,
                'NIK' => $request->NIK,
                // 'foto' => $request->foto,
                'kelompokName' => $request->kelompokName,
            ]);
    
            $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
            Data berhasil ditambahkan
            </div>');
            
            return redirect('/pendataan');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}