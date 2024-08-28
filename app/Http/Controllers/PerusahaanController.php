<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;


class PerusahaanController extends Controller
{
    public function create()
    {
        return view('perusahaan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'status' => 'required|string|in:Applied,Test,Accepted,Rejected',
        ]);

        Perusahaan::create($validated);

        return redirect()->route('home')->with('success', 'Berhasil Ditambahkan!');
    }

    public function destroy($id)
    {
        $perusahaan = Perusahaan::find($id);

        if ($perusahaan) {
            $perusahaan->delete();
            return redirect()->route('home')->with('success', 'Perusahaan deleted successfully!');
        }

        return redirect()->route('home')->with('error', 'Perusahaan not found!');
    }

    public function edit($id)
    {
        $perusahaan = Perusahaan::find($id);

        if (!$perusahaan) {
            return redirect()->route('home')->with('error', 'Job not found!');
        }

        return view('perusahaan.edit', ['perusahaan' => $perusahaan]);
    }

    public function update(Request $request, $id)
    {
        // Log status value from the form before validation
        \Log::info('Status from form: ' . $request->input('status'));

        $validated = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'status' => 'required|string|in:Applied,Test,Accepted,Rejected',
        ]);

        \Log::info('Validated status: ' . $validated['status']);

        $perusahaan = Perusahaan::find($id);

        if ($perusahaan) {
            \Log::info('Before update: ' . $perusahaan->status);
            $perusahaan->update($validated);
            \Log::info('After update: ' . $perusahaan->status);
            return redirect()->route('home')->with('success', 'Perusahaan updated successfully!');
        }

        return redirect()->route('home')->with('error', 'Perusahaan not found!');
    }




}
