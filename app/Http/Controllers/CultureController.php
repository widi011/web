<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CultureModel;

class CultureController extends Controller
{
    public function __construct()
    {
        $this->CultureModel = new CultureModel();
    }

    public function index()
    {
        $data = [
            'culture'=> $this->CultureModel->allData(),
        ];
        return view('v_culture', $data);
    }

    public function detail($id_culture)
    {
        $data = [
            'culture'=> $this->CultureModel->detailData($id_culture),
        ];
        return view('v_detailculture', $data);
    }

    public function add()
    {
        return view('v_addculture');
    }

    public function insert()
    {
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_culture,nama_wisata|max:255',
            'harga_tiket' => 'required',
            'fasilitas' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,bmp,png|max:10000',
            'kategori' => 'required',
        ],[
            
        ]);

        //upload gambar/foto
        $file = Request()->foto;
        $fileName = Request()->nama_wisata .'.'. $file->extension();
        $file->move(public_path('foto'), $fileName);

        $data = [
            'nama_wisata' => Request()->nama_wisata,
            'harga_tiket' => Request()->harga_tiket,
            'fasilitas' => Request()->fasilitas,
            'foto' => Request()->$fileName,
            'kategori' => Request()->kategori,
        ];

        $this->CultureModel->addData($data);
        return redirect()->route('culture')->with('pesan','Data Berhasil Di Tambahkan !!!!');
    }

    public function delete($id_culture)
    {
        $this->CultureModel->deleteData($id_culture);
        return redirect()->route('culture')->with('pesan','Data Berhasil Di Hapus !!!!');
    }

    public function edit($id_culture)
    {
        if (!$this->CultureModel->editData($id_culture))
        $data = [
            'culture' => $this->CultureModel->editData($id_culture)
        ];
        return view('v_editculture', $data);
    }
    public function update($id_culture)
    {
        Request()->validate([
            'nama_wisata' => 'required|unique:tbl_culture,nama_wisata|max:255',
            'harga_tiket' => 'required',
            'fasilitas' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,bmp,png|max:10000',
            'kategori' => 'required',
        ],[
            
        ]);

        //upload gambar/foto
        $file = Request()->foto;
        $fileName = Request()->nama_wisata .'.'. $file->extension();
        $file->move(public_path('foto'), $fileName);

        $data = [
            'nama_wisata' => Request()->nama_wisata,
            'harga_tiket' => Request()->harga_tiket,
            'fasilitas' => Request()->fasilitas,
            'foto' => Request()->$fileName,
            'kategori' => Request()->kategori,
        ];

        $this->CultureModel->editData($id_culture, $data);
        return redirect()->route('culture')->with('pesan','Data Berhasil Di Update !!!!');
    }
}
