<?php

namespace App\Http\Controllers;

use App\Models\DataKelahiran;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data_kealhiran = POST::all();
        return response()->json($data_kealhiran);
    }
}
