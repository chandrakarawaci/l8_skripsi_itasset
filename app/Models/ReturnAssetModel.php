<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnAssetModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_asset_return';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_asset',
        'id_asset_location',
        'id_jenis_asset',
        'id_user',
        'id_transaction',
        'keterangan',
        'return_no',
        'tgl_pengembalian',
        'created_at',
        'deleted_at',
        'updated_at',   
    ];
}
