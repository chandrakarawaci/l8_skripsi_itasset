<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAuditModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_detail_asset_audit';
    protected $primaryKey = 'id';

    protected $fillable = [
        'condition',
        'id_asset',
        'id_asset_audit',
        'id_vendor',
        'created_at',
        'deleted_at',
        'updated_at',
    ];

}
