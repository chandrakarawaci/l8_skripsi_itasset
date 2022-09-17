<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_m_asset_location';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kota',
        'location_name',
        ];

    public function asset(){
        return $this->hasMany(AssetModel::class,'user_id');
    }
}
