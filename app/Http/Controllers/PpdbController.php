<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormulirPendaftaran;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class PpdbController extends Controller
{
    public function index(): View
    {
        $posts = FormulirPendaftaran::latest()->paginate(20);
        return view('daftars.index', compact('posts'));
    }
    public function create(): View
    {
        return view('tambahdata');
    }
    public function store(Request $request): RedirectResponse
    {
        FormulirPendaftaran::create([
            'id'                    => $request->id,
            'nama_lengkap'          => $request->nama_lengkap,
            'alamat'                => $request->alamat,
            'tempat_lahir'          => $request->tempat_lahir,
            'tanggal_lahir'         => $request->tanggal_lahir,
            'no_tlp_whatsapp'       => $request->no_tlp_whatsapp,
            'jenis_kelamin'         => $request->jenis_kelamin,
            'agama'                 => $request->agama,
            'asal_sekolah'          => $request->asal_sekolah,
            'nama_orang_tua_wali'   => $request->nama_orang_tua_wali,
        ]);
        return redirect()->route('pendaftaran.index');
    }
    public function destroy($id): RedirectResponse
    {
        $post = FormulirPendaftaran::findOrFail($id);
        $post->delete();
        return redirect()->route('pendaftaran.index');
    }
    public function edit(string $id): View
    {
        $post = FormulirPendaftaran::findOrFail($id);
        return view('editdata', compact('post'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $post = FormulirPendaftaran::findOrFail($id);
        $post->update([
            'nama_lengkap'          => $request->nama_lengkap,
            'alamat'                => $request->alamat,
            'tempat_lahir'          => $request->tempat_lahir,
            'tanggal_lahir'         => $request->tanggal_lahir,
            'no_tlp_whatsapp'       => $request->no_tlp_whatsapp,
            'jenis_kelamin'         => $request->jenis_kelamin,
            'agama'                 => $request->agama,
            'asal_sekolah'          => $request->asal_sekolah,
            'nama_orang_tua_wali'   => $request->nama_orang_tua_wali,
        ]);
        return redirect()->route('pendaftaran.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}