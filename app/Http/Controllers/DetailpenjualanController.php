<?php

namespace App\Http\Controllers;

use App\Models\Detailpenjualan;
use Illuminate\Http\Request;

class DetailpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
     $detail_penjualan = Detailpenjualan::where('id_penjualan', $id)->get();
        return view('home.detail_penjualan.detail', compact('detail_penjualan'));
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
        $detail_penjualan = Detailpenjualan::where('id_penjualan', $id)->get();
        return view('home.detail_penjualan.struk', compact('detail_penjualan'));
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
