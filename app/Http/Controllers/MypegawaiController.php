<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MypegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('mypegawai')->get();

        return view('mypegawai.index', [
            'pegawai' => $pegawai
        ]);
    }

    public function tambah()
    {
        return view('mypegawai.tambah');
    }

    public function store(Request $request)
    {
        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/eas');
    }

    public function view($kodepegawai)
    {
        $pegawai = DB::table('mypegawai')
            ->where('kodepegawai', $kodepegawai)
            ->first();

        return view('mypegawai.view', [
            'pegawai' => $pegawai
        ]);
    }
}
