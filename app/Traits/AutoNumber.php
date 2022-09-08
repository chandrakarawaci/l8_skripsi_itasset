<?php

namespace App\Traits;
use App\Models;
use App\Models\MaintenanceAssetModel;
use Carbon\Carbon;


trait AutoNumber
{

    public function getYearMonth(){
        $now = Carbon::now();
        $tahun_bulan = $now->year . $now()->month;
        return $tahun_bulan;
    }

    public function getMaintenanceAssetNo()
    {
        $cek = MaintenanceAssetModel::count();
        if(empty($cek)){
            $urut = '1000001';
            $no_urut = 'REQ'.$this->getYearMonth().$urut;
            return $no_urut;
        }

    }
}
