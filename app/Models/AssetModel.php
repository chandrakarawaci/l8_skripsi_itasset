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
        'id',
        'id_transaction',
        'host_name',
        'serial_number',
        'kode_asset',
        'user_name',
        'dept',
        'division',
        'no_po',
        'po_date',
        'model',
        'id_asset_location',
        'id_asset_status',
        'id_jenis_asset',
        'image',
       
    ];
}
