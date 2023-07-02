<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pemeriksaan::orderBy('nama_pasien', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataPemeriksaan = new Pemeriksaan;

        $rules = [
            'nama_pasien' => 'required',
            'alamat' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'jenis_pemeriksaan' => 'required',
            'tanggal_pemeriksaan' => 'required|date',
            'diagnosa' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukan data',
                'data' => $validator->errors()
            ]);
        }



        $dataPemeriksaan->nama_pasien = $request->nama_pasien;
        $dataPemeriksaan->alamat = $request->alamat;
        $dataPemeriksaan->usia = $request->usia;
        $dataPemeriksaan->jenis_kelamin = $request->jenis_kelamin;
        $dataPemeriksaan->no_hp = $request->no_hp;
        $dataPemeriksaan->jenis_pemeriksaan = $request->jenis_pemeriksaan;
        $dataPemeriksaan->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $dataPemeriksaan->diagnosa = $request->diagnosa;

        $post = $dataPemeriksaan->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukan data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pemeriksaan::find($id);
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataPemeriksaan = Pemeriksaan::find($id);
        if (empty($dataPemeriksaan)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $rules = [
            'nama_pasien' => 'required',
            'alamat' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'jenis_pemeriksaan' => 'required',
            'tanggal_pemeriksaan' => 'required|date',
            'diagnosa' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal melakukan perubahan data',
                'data' => $validator->errors()
            ]);
        }



        $dataPemeriksaan->nama_pasien = $request->nama_pasien;
        $dataPemeriksaan->alamat = $request->alamat;
        $dataPemeriksaan->usia = $request->usia;
        $dataPemeriksaan->jenis_kelamin = $request->jenis_kelamin;
        $dataPemeriksaan->no_hp = $request->no_hp;
        $dataPemeriksaan->jenis_pemeriksaan = $request->jenis_pemeriksaan;
        $dataPemeriksaan->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $dataPemeriksaan->diagnosa = $request->diagnosa;

        $post = $dataPemeriksaan->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melakukan perubahan data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataPemeriksaan = Pemeriksaan::find($id);
        if (empty($dataPemeriksaan)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
        $post = $dataPemeriksaan->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melalukan hapus data'
        ]);
    }
}
