<?php

namespace App\Http\Controllers;

use App\Models\RequestAssetModel;
use App\Models\LocationModel;
use App\Models\JenisAssetModel;
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request_code = AutoNumber::getReqAssetAutoNo('REQAST');
        $req_asset = RequestAssetModel::all();
        $location = LocationModel::all();
        $jenis = JenisAssetModel::all();
        return view('admin.request-asset',compact(['request_code','req_asset','jenis','location']));
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
        // dd($request['user_name']);
        // $request->validate([
        //     // 'id_asset' => 'required',
        //     'id_asset_location' => 'required',
        //     'id_jenis_asset' => 'required',
        //     // 'id_user' => 'required',
        //     'user_name' => 'required',
        //     'kode_request' => 'required',
        //     // 'request_status' => 'required',
        //     'tgl_request' => 'required',
        //     'keterangan' => 'required',
        //     ]);

        $tgl_request = strtotime($request['tgl_request']);
        RequestAssetModel::create([
            // 'id_asset' => $request['id_asset_location'],
            'id_asset_location' => $request['id_asset_location'],
            'id_jenis_asset' => $request['id_jenis_asset'],
            // 'id_user' => $request['id_asset_location'],
            'user_name' => $request['user_name'],
            'kode_request' => $request['kode_request'],
            // 'request_status' => $request['request_status'],
            'tgl_request' => date('Y-m-d', $tgl_request),
            'keterangan' => $request['keterangan'],
        ]);
        //Alert::warning('Tambah pengguna berhasil !');
        return redirect()->route('admin.report-request');
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
