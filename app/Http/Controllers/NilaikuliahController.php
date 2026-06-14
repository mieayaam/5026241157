<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    public function index()
{
    $data = DB::table('nilaikuliah')->get();

    return view('index_nilaikuliah', [
        'data' => $data
    ]);
}

public function tambah()
{
    return view('tambah_nilaikuliah');
}

public function simpan(Request $request)
{
    DB::table('nilaikuliah')->insert([
        'nrp' => $request->nrp,
        'nilaiangka' => $request->nilaiangka,
        'sks' => $request->sks
    ]);

    return redirect('/nilaikuliah');
}
}
