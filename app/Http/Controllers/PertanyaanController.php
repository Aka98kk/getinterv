<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = Pertanyaan::all();

        if (auth()->check()) {
            return view('pertanyaan.index', compact('data'));
        } else {
            return redirect('/logindiisi');
        }
    }

    public function AddPertanyaan(Request $request)
    {
        $data = new Pertanyaan();

        $data->PertanyaanName = $request->pertanyaan;

        $data->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = Pertanyaan::findOrFail($id);

        return view('pertanyaan.edit', ['pertanyaan' => $data]);
    }

    public function UbahPertanyaan(Request $request, $id)
    {
        $data = Pertanyaan::findOrFail($id);

        $data->PertanyaanName = $request->pertanyaan;

        $data->save();

        return redirect('/pertanyaan');
    }

    public function DeletePertanyaan($id)
    {
        $data = Pertanyaan::find($id);

        $data->delete();

        return redirect()->back();
    }
}