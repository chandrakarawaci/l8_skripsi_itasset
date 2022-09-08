<?php

namespace App\Imports;

use App\Models\AssetModel;
use Maatwebsite\Excel\Concerns\ToModel;

class AssetImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AssetModel([
            'id_transaction' => $row[1],
            'host_name' => $row[2],
            'serial_number' => $row[3],
            'kode_asset' => $row[4],
            'user_name' => $row[5],
            'dept' => $row[6],
            'division' => $row[7],
            'no_po' => $row[8],
            'po_date' => $row[9],
            'model' => $row[10],
            'id_asset_location' => $row[11],
            'id_asset_status' => $row[12],
            'id_jenis_asset' => $row[13],
            'image' => $row[14],
        ]);
    }
}
