<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_m_asset';
    protected $primaryKey = 'id';

    protected $fillable = [
        'host_name',
        'serial_number',
        'kode_asset',
        'user_name',
        'dept',
        'division',
        'requestor',
        'no_po',
        'po_date',
        'model',
        'keterangan',
        'id_asset_location',
        'id_asset_status',
        'id_jenis_asset',
        'image',
    ];

    public function location(){
        return $this->belongsTo(LocationModel::class,'id_asset_location');
    }

    public function status(){
        return $this->belongsTo(StatusAssetModel::class,'id_asset_status');
    }

    public function jenis(){
        return $this->belongsTo(JenisAssetModel::class,'id_jenis_asset');
    }
}
