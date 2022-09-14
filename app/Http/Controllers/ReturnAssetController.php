<?php

namespace App\Http\Controllers;

use App\Models\ReturnAssetModel;
use Illuminate\Http\Request;
use App\Helpers\AutoNumber;

class ReturnAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $return_code = AutoNumber::getReturnAssetAutoNo('RTRNAST');
        return view('admin.return-asset',compact('return_code'));
    }

    public function showReturn()
    {
        $return_asset = ReturnAssetModel::all();
        return view('admin.report-return', compact('return_asset'));
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
     * @param  \App\Models\ReturnAssetModel  $return_asset
     * @return \Illuminate\Http\Response
     */
    public function show(ReturnAssetModel $return_asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReturnAssetModel  $return_asset
     * @return \Illuminate\Http\Response
     */
    public function edit(ReturnAssetModel $return_asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReturnAssetModel  $return_asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReturnAssetModel $return_asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReturnAssetModel  $return_asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReturnAssetModel $return_asset)
    {
        //
    }
}
