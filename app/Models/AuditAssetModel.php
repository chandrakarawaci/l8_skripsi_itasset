<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditAssetModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_asset_audit';
    protected $primary_key = 'id';
    protected $fillable = [
        'audit_no',
        'id_asset_location',
        'id_auditor_lead',
        'selisih',
        'tgl_audit',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
