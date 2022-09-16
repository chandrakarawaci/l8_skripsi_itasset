<?php

namespace App\Http\Controllers;

use App\Models\AuditAssetModel;
use App\Models\DetailAuditModel;
use Illuminate\Http\Request;
use App\Helpers\AutoNumber;

class AuditAssetController extends Controller
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
        $audit_code = AutoNumber::getAuditAssetAutoNo('AUDIT');
        return view('admin.audit-asset',compact('audit_code'));
    }

    public function report(AuditAssetModel $audit_asset)
    {
        return view('admin.report-audit',compact('audit_asset'));
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
     * @param  \App\Models\AuditAssetModel  $audit_asset
     * @return \Illuminate\Http\Response
     */
    public function show(AuditAssetModel $audit_asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuditAssetModel  $audit_asset
     * @return \Illuminate\Http\Response
     */
    public function edit(AuditAssetModel $audit_asset)
    {
        return view('admin.edit-audit-asset', compact('audit_asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuditAssetModel  $audit_asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuditAssetModel $audit_asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuditAssetModel  $audit_asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuditAssetModel $audit_asset)
    {
        //
    }
}
