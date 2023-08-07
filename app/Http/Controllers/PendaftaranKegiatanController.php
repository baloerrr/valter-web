<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\DaftarKegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PendaftaranKegiatanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = DaftarKegiatan::with(['user:id,name,email', 'kegiatan'])->get();
            return DataTables::of($query)->addColumn('nama_kegiatan', function ($data) {
                return $data->kegiatan->nama_kegiatan;
            })->make();
        }

        return view('pages.pendaftaran.index');
    }

    public function edit(string $id)
    {
        $item = DaftarKegiatan::with(['user:id,name,email', 'kegiatan:id,nama_kegiatan'])->where('id', $id)->first();

        return view('pages.pendaftaran.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, string $id)
    {
        $kegiatan = DaftarKegiatan::findOrFail($id);

        $data = [
            'status' => $request->status
        ];

        $kegiatan->update($data);

        return redirect('/user-pendaftaran')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'no_whatsapp' => 'required|string',
            'asal_instansi' => 'required|string',
            'bukti_pembayaran' => 'required|file|mimes:jpeg,png,pdf|max:2048'
        ]);

        $kegiatan = Kegiatan::where('slug', $slug)->first();


        $pendaftaranData = [
            'no_whatsapp' => $request->input('no_whatsapp'),
            'asal_instansi' => $request->input('asal_instansi'),
            'user_id' => Auth::user()->id,
            'kegiatan_id' => $kegiatan->id,
            'bukti_pembayaran' => $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public')
        ];

        DaftarKegiatan::create($pendaftaranData);


        return redirect()->route('kegiatanDetail', ['slug' => $slug]);
    }

    public function destroy(string $id)
    {
        $kegiatan = DaftarKegiatan::findOrFail($id);
        $kegiatan->delete();

        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
