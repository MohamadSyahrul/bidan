<?php

namespace App\Models;

use App\Models\PasienBayi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datapasien extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tb_pasien";
    protected $guarded = [];
    public $timestamps = false;

    public function pasienBayi()
    {
        return $this->hasOne( PasienBayi::class, 'id' );
    }
    public function pasienSakit()
    {
        return $this->hasOne( PasienBayi::class,'id_pasiensakit', 'id' );
    }
}
