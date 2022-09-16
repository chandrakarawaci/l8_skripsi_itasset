<?php

namespace App\Http\Controllers;

use App\Models\AssetModel;
use Illuminate\Http\Request;

class ReportAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asset = AssetModel::all();
        return view ('report-asset.index',['vasset' => $asset]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetModel  $assetModel
     * @return \Illuminate\Http\Response
     */
    public function show(AssetModel $assetModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetModel  $assetModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetModel $assetModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssetModel  $assetModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssetModel $assetModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetModel  $assetModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetModel $assetModel)
    {
        //
    }
}
