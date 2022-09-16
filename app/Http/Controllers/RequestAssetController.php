<?php

namespace App\Http\Controllers;

use App\Models\RequestAssetModel;
use Illuminate\Http\Request;
use App\Helpers\AutoNumber;

class RequestAssetController extends Controller
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
        $request_code = AutoNumber::getReqAssetAutoNo('REQAST');
        return view('admin.request-asset',compact('request_code'));
    }

    public function showRequest()
    {
        $req_asset = RequestAssetModel::all();
        return view('admin.report-request', compact('req_asset'));
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
     * @param  \App\Models\RequestAssetModel  $req_asset
     * @return \Illuminate\Http\Response
     */
    public function show(RequestAssetModel $req_asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestAssetModel  $req_asset
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestAssetModel $req_asset)
    {
        return view('admin.edit-request-asset', compact('req_asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestAssetModel  $req_asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestAssetModel $req_asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestAssetModel  $req_asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestAssetModel $req_asset)
    {
        //
    }
}
