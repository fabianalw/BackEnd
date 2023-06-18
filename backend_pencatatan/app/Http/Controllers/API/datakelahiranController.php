<?php

namespace App\Http\Controllers\API;

use API\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\data_kelahiran;
use Illuminate\Http\Request;

class datakelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = data_kelahiran::all();
        if ($data) {
            return ApiFormatter::createAPI(200, 'success', $data);
        } else {
            return ApiFormatter::createAPI(400, 'failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
