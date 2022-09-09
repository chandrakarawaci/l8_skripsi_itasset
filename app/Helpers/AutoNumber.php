<?php

namespace App\Helpers;
use Carbon\Carbon;
use App\Models\AssetModel;
use App\Models\ReturnAssetModel;
use App\Models\MaintenanceAssetModel;
use App\Models\RequestAssetModel;
use App\Models\AuditAssetModel;
// use Illuminate\support\Facades\DB;
use Illuminate\Support\Str;

class AutoNumber
{
    //public static $kd = '';
    public static function getYearMonthDay(){
        $now = Carbon::now();
        $ymd = $now->year . $now->month . $now->day;
        return $ymd;
    }

    public static function getReqAssetAutoNo($prefix){
        $now = Carbon::now();
        $ymd = $now->year . $now->month . $now->day;
        $get_awal = RequestAssetModel::all()->last();
        if($get_awal === null){
            $no = 0;
            $kode = $prefix.'-'.$ymd.'0000001';
        }else{
            $no = Str::substr($get_awal->kode_request,10,7);
            $kode = $prefix.'-'.$ymd.sprintf('%07s',(int)$no+1);
        }
        return $kode;
    }

    public static function getMaintenanceAssetAutoNo($prefix){
        $now = Carbon::now();
        $ymd = $now->year . $now->month . $now->day;
        $get_awal = MaintenanceAssetModel::all()->last();
        if($get_awal === null){
            $no = 0;
            $kode = $prefix.'-'.$ymd.'0000001';
        }else{
            $no = Str::substr($get_awal->request_mtn_no,10,7);
            $kode = $prefix.'-'.$ymd.sprintf('%07s',(int)$no+1);
        }
        return $kode;
    }

    public static function getAuditAssetAutoNo($prefix){
        $now = Carbon::now();
        $ymd = $now->year . $now->month . $now->day;
        $get_awal = AuditAssetModel::all()->last();
        if($get_awal === null){
            $no = 0;
            $kode = $prefix.'-'.$ymd.'0000001';
        }else{
            $no = Str::substr($get_awal->audit_no,10,7);
            $kode = $prefix.'-'.$ymd.sprintf('%07s',(int)$no+1);
        }
        return $kode;
    }

    public static function getReturnAssetAutoNo($prefix){
        $now = Carbon::now();
        $ymd = $now->year . $now->month . $now->day;
        $get_awal = ReturnAssetModel::all()->last();
        if($get_awal === null){
            $no = 0;
            $kode = $prefix.'-'.$ymd.'0000001';
        }else{
            $no = Str::substr($get_awal->return_no,10,7);
            $kode = $prefix.'-'.$ymd.sprintf('%07s',(int)$no+1);
        }
        return $kode;
    }


}
