<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ViewIndex()
    {
        $data = Kategori::all();

        return view('coba.index', compact('data'));
    }
    public function AddKategori(Request $request)
    {
        $data = new Kategori();

        $data->KategoriName = $request->kategori;

        $data->save();

        return redirect()->back();
    }
    public function DeleteKategori($id)
    {
        $data = Kategori::find($id);

        $data->delete();

        return redirect()->back();
    }
}