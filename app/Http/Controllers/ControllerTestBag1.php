<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreTestBag1;
use App\Models\TestBag1;
use Illuminate\Http\Request;

class ControllerTestBag1 extends Controller
{
    public function index()
    {
        $datas = TestBag1::latest()->get();

        return view('pages.bag-1.index', compact('datas'));
    }

    public function store(StoreTestBag1 $request)
    {
        if ($request->input('jenis') === "1") {
            $typeUser = "Manusia";
        } elseif ($request->input('jenis') === "2") {
            $typeUser = "Elf";
        } elseif ($request->input('jenis') === "3") {
            $typeUser = "Tumbuh Tumbuhan";
        } else {
            return redirect()->route("test-bag-1")->with("error", "Masukan Jenis Yang Sesuai");
        }

        if ($request->input('hp') === null) {
            $NoHpUser = "-";
        } else {
            $NoHpUser = $request->input('hp');
        }

        $namaUser = $request->input('nama');
        $KomentarUser = $request->input('komentar');

        TestBag1::create([
            'nama_user'     => $namaUser,
            'type_user'     => $typeUser,
            'no_hp_user'    => $NoHpUser,
            'komentar_user' => $KomentarUser
        ]);

        return redirect()->route("test-bag-1")->with("success", "Data User " . $namaUser . " Berhasil Ditambahkan");
    }
}
