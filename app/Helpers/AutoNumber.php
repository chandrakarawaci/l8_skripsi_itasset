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

    public static function getReqAssetAutoNo(){
        $now = Carbon::now();
        $ymd = $now->year . $now->month . $now->day;
        $get_awal = RequestAssetModel::all()->last();
        if($get_awal === null){
            $kode = 'REQ-'.$ymd.'0000001';
        }else{
            $kode = Str::substr($get_awal->kode_request,10,7);
        }
        return $kode;

        //return $kd;
        // $now = Carbon::now();
        // $tahun_bulan = $now->year . $now->month . $now->day;
        // return $tahun_bulan;

        // $q=DB::table($barang)->select(DB::raw('MAX(RIGHT('.$primary.',5)) as kd_max'));
        // $prx=$prefix. $tahun_bulan;
        // if($q->count()>0)
        // {
        //     foreach($q->get() as $k)
        //     {
        //         $tmp = ((int)$k->kd_max)+1;
        //         $kd = $prx.sprintf("%06s", $tmp);
        //     }
        // }
        // else
        // {
        //     $kd = $prx."000001";
        // }

        // return $kd;
    }


}
