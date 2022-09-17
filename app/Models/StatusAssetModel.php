<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusAssetModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_m_asset_status';
    protected $primaryKey = 'id';

    protected $fillable = [
        'desc',
        'status',
        ];

        public function asset(){
            return $this->hasMany(AssetModel::class,'user_id');
        }

}
