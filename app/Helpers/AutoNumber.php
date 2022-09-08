<?php

namespace App\Helpers;
use Carbon\Carbon;

class AutoNumber
{
    public function getYearMonth(){
        $now = Carbon::now();
        $tahun_bulan = $now->year . $now->month;
        return $tahun_bulan;
    }

    
    public static function convertdate(){
        date_default_timezone_set('Asia/Jakarta');
        $date = date('dmy');
        return $date;
    }

    public static function autonumber($barang,$primary,$prefix){
        $q=DB::table($barang)->select(DB::raw('MAX(RIGHT('.$primary.',5)) as kd_max'));
        $prx=$prefix.Dateindo::convertdate();
        if($q->count()>0)
        {
            foreach($q->get() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = $prx.sprintf("%06s", $tmp);
            }
        }
        else
        {
            $kd = $prx."000001";
        }

        return $kd;
    }


}
