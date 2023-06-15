<?php

namespace App\Http\Controllers;

use App\Models\Interviews;
use Illuminate\Http\Request;

class JadwalInterviewController extends Controller
{
    public function index()
    {
        $data = Interviews::all();

        if (auth()->check()) {
            return view('jadwal_interview.index', compact('data'));
        } else {
            return redirect('/logindiisi');
        }
    }

    public function create()
    {
        return view('jadwal_interview.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gmail' => 'required',
            'hari_interview' => 'required',
            'durasi_zoom' => 'required',
            'link_zoom' => 'required',
            'pertanyaan' => 'required',
        ]);

        // Buat objek baru dari model Interviews
        $interview = new Interviews();

        // Set nilai atribut objek sesuai dengan inputan dari form
        $interview->gmail = $request->input('gmail');
        $interview->hari_interview = $request->input('hari_interview');
        $interview->durasi_zoom = $request->input('durasi_zoom');
        $interview->link_zoom = $request->input('link_zoom');
        $interview->pertanyaan = $request->input('pertanyaan');

        // Simpan objek ke database
        $interview->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }


    public function edit(Interviews $jadwalInterview)
    {
        return view('auth.jadwal_interview.edit', compact('jadwalInterview'));
    }

    public function update(Request $request, Interviews $jadwalInterview)
    {
        $request->validate([
            'gmail' => 'required',
            'hari_interview' => 'required',
            'durasi_zoom' => 'required',
            'link_zoom' => 'required',
            'pertanyaan' => 'required',
        ]);

        $jadwalInterview->update($request->all());

        return redirect()->route('jadwal_interview.index')
            ->with('success', 'Jadwal interview berhasil diperbarui.');
    }


    public function show()
    {
        // Logika untuk menampilkan jadwal interview dengan ID tertentu
    }
    public function simpanDaftarInterview(Request $request)
    {
        $interviews = new Interviews();

        $interviews->gmail = $request->gmail;
        $interviews->hari_interview = $request->hari_interview;
        $interviews->durasi_zoom = $request->durasi_zoom;
        $interviews->link_zoom = $request->link_zoom;

        $interviews->save();

        return redirect('lihatDaftarInterview');
    }
    public function lihatDaftarInterview()
    {
        $interviews = Interviews::all();

        return view('jadwal_interview.simpan', compact('interviews'));
    }

    public function DeleteInterview($id)
    {
        $data = Interviews::find($id);


        $data->delete();

        return redirect()->back();
    }
}
