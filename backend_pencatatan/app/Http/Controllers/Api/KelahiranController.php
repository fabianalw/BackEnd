<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kelahiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kelahiran::orderBy('nama_bayi', 'asc')->get();
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
        $dataKelahiran = new Kelahiran;

        $rules = [
            'nama_bayi' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required|date',
            'jam_lahir' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'lingkar_kepala' => 'required',
            'lingkar_dada' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukan data',
                'data' => $validator->errors()
            ]);
        }



        $dataKelahiran->nama_bayi = $request->nama_bayi;
        $dataKelahiran->nama_ibu = $request->nama_ibu;
        $dataKelahiran->alamat = $request->alamat;
        $dataKelahiran->no_hp = $request->no_hp;
        $dataKelahiran->tanggal_lahir = $request->tanggal_lahir;
        $dataKelahiran->jam_lahir = $request->jam_lahir;
        $dataKelahiran->tinggi_badan = $request->tinggi_badan;
        $dataKelahiran->berat_badan = $request->berat_badan;
        $dataKelahiran->lingkar_kepala = $request->lingkar_kepala;
        $dataKelahiran->lingkar_dada = $request->lingkar_dada;

        $post = $dataKelahiran->save();

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
        $data = Kelahiran::find($id);
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
        $dataKelahiran = Kelahiran::find($id);
        if (empty($dataKelahiran)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $rules = [
            'nama_bayi' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required|date',
            'jam_lahir' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'lingkar_kepala' => 'required',
            'lingkar_dada' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal melalukan perubahan data',
                'data' => $validator->errors()
            ]);
        }



        $dataKelahiran->nama_bayi = $request->nama_bayi;
        $dataKelahiran->nama_ibu = $request->nama_ibu;
        $dataKelahiran->alamat = $request->alamat;
        $dataKelahiran->no_hp = $request->no_hp;
        $dataKelahiran->tanggal_lahir = $request->tanggal_lahir;
        $dataKelahiran->jam_lahir = $request->jam_lahir;
        $dataKelahiran->tinggi_badan = $request->tinggi_badan;
        $dataKelahiran->berat_badan = $request->berat_badan;
        $dataKelahiran->lingkar_kepala = $request->lingkar_kepala;
        $dataKelahiran->lingkar_dada = $request->lingkar_dada;

        $post = $dataKelahiran->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melalukan perubahan data'
        ]);
        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataKelahiran = Kelahiran::find($id);
        if (empty($dataKelahiran)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
        $post = $dataKelahiran->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses melalukan hapus data'
        ]);
    }
}
