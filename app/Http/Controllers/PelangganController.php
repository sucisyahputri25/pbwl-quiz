<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Golongan;
use App\Models\User;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::with('golongan','user')->get();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $golongans = Golongan::select('id', 'gol_nama')->get();
        $users = User::select('id', 'name')->get();

        return view('pelanggan.create', compact('golongans', 'users'))->with('title', 'Tambah Pelanggan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'pel_id_gol' => 1,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif,
            'pel_id_user' => $request->pel_id_user,
        ];

        // dd($data);
        Pelanggan::create($data);

        return redirect('pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan::find($id);
        return view('pelanggan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pelanggan::findOrFail($id);

        $row->update([
            'pel_id_gol' => $request->pel_id_gol,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif,
            'pel_id_user' => $request->pel_id_user,
        ]);

        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);

        $row->delete();

        return redirect('pelanggan');
    }
}
