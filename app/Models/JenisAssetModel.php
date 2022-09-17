<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAssetModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_m_jenis_asset';
    protected $primaryKey = 'id';

    protected $fillable = [
        'desc',
        'jenis',
        ];

        public function asset(){
            return $this->hasMany(AssetModel::class,'user_id');
        }

}
