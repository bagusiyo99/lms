<?php
/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use RealRashid\SweetAlert\Facades\Alert;



class AdminPengaturan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Pengaturan',
            'pengaturan' => Pengaturan::first(),
            'content' => 'operator/pengaturan/index'
        ];
    return view ('operator.pengaturan.index', $data ); 
   }




public function update(Request $request)
{   
    $pengaturan = Pengaturan::first();
    $judul = $pengaturan->judul;

    $data = $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'visi' => 'required',
        'misi' => 'required',
        'alamat' => 'required',
        'hp' => 'required',
        // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:10048',

    ]);

    
 // Check if a new logo file has been uploaded
    if ($request->hasFile('logo')) {
        if ($pengaturan->logo != null) {
            unlink($pengaturan->logo);
        }

        $logo = $request->file('logo');
        $file_name = time() . '-' . $logo->getClientOriginalName();

        $storage = 'uploads/pengaturan/';
        $logo->move($storage, $file_name);
        $data['logo'] = $storage . $file_name;
    }

    // Check if a new gambar file has been uploaded
    if ($request->hasFile('gambar')) {
        if ($pengaturan->gambar != null) {
            unlink($pengaturan->gambar);
        }

        $gambar = $request->file('gambar');
        $file_name = time() . '-' . $gambar->getClientOriginalName();

        $storage = 'uploads/pengaturan/';
        $gambar->move($storage, $file_name);
        $data['gambar'] = $storage . $file_name;
    }

        // Check if a new gambar file has been uploaded
    if ($request->hasFile('vidio')) {
        if ($pengaturan->vidio != null) {
            unlink($pengaturan->vidio);
        }

        $vidio = $request->file('vidio');
        $file_name = time() . '-' . $vidio->getClientOriginalName();

        $storage = 'uploads/pengaturan/';
        $vidio->move($storage, $file_name);
        $data['vidio'] = $storage . $file_name;
    }



  

    // Alert::success('sukses', 'Data berhasil diupdate');
    $pengaturan->update($data);
    return redirect('/operator/pengaturan');
}


}
