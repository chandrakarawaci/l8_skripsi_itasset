<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceAssetModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_maintenance_asset';
    protected $primary_key = 'id';
    protected $fillable = [
        'id_asset',
        'id_asset_location',
        'id_jenis_asset',
        'id_user',
        'id_transaction',
        'keterangan',
        'request_mtn_no',
        'tgl_request_mtn',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
