<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        // $alternatif = Alternatif::where('id', $id)->first();

        // return view('editalternatif', [
        //     'alternatif' => $alternatif,
        //     'title' => 'Edit Data alternatif'
        // ]);
        return view('editalternatif')->with([
            'alternatif' => Alternatif::find($id),
        ]);

    }

    public function update(Request $request, $id) {
        $alternatif1      = $request->input('alternatif');
        $tanggung_jawab1   = $request->input('tanggung_jawab');
        $sikap1 = $request->input('sikap');
        $kedisiplinan1 = $request->input('kedisiplinan');
        $prestasi1 = $request->input('prestasi');
        $kerjasama1 = $request->input('kerjasama');
        $kinerja1 = $request->input('kinerja');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->alternatif    = $alternatif1;
        $alternatif->tanggung_jawab = $tanggung_jawab1;
        $alternatif->sikap = $sikap1;
        $alternatif->kedisiplinan = $kedisiplinan1;
        $alternatif->prestasi = $prestasi1;
        $alternatif->kerjasama = $kerjasama1;
        $alternatif->kinerja = $kinerja1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $alternatif1 = $request->input('alternatif');
        $tanggung_jawab1 = $request->input('tanggung_jawab');
        $sikap1 = $request->input('sikap');
        $kedisiplinan1 = $request->input('kedisiplinan');
        $prestasi1 = $request->input('prestasi');
        $kerjasama1 = $request->input('kerjasama');
        $kinerja1 = $request->input('kinerja');

        $alternatif = new Alternatif;
        $alternatif->alternatif    = $alternatif1;
        $alternatif->tanggung_jawab = $tanggung_jawab1;
        $alternatif->sikap = $sikap1;
        $alternatif->kedisiplinan = $kedisiplinan1;
        $alternatif->prestasi = $prestasi1;
        $alternatif->kerjasama = $kerjasama1;
        $alternatif->kinerja = $kinerja1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}