<?php

namespace App\Http\Controllers;

use App\Models\RequestMaintenanceModel;
use Illuminate\Http\Request;
USE App\Helpers\AutoNumber;

class RequestMaintenanceController extends Controller
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
        $maintenance_code = AutoNumber::getMaintenanceAssetAutoNo('MTNAST');
        return view('admin.request-maintenance',compact('maintenance_code'));
    }

    public function showMaintenance()
    {
        $maintenance_asset = RequestMaintenanceModel::all();
        return view('admin.report-maintenance', compact('maintenance_asset'));
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
     * @param  \App\Models\RequestMaintenanceModel  $maintenance_asset
     * @return \Illuminate\Http\Response
     */
    public function show(RequestMaintenanceModel $maintenance_asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestMaintenanceModel  $maintenance_asset
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestMaintenanceModel $maintenance_asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestMaintenanceModel  $maintenance_asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestMaintenanceModel $maintenance_asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestMaintenanceModel  $maintenance_asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestMaintenanceModel $maintenance_asset)
    {
        //
    }
}
