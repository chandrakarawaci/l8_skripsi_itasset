<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAssetModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_request_asset';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_asset',
        'id_asset_location',
        'id_jenis_asset',
        'id_user',
        'id_transaction',
        'keterangan',
        'kode_request',
        'request_status',
        'tgl_request',
        'created_at',
        'deleted_at',
        'updated_at',       
    ];

}
