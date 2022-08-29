<?php

namespace App\Models;

use App\Models\Hamil;
use App\Models\Bersalin;
use App\Models\PasienKB;
use App\Models\PasienBayi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datapasien extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tb_pasien";
    protected $guarded = [];
    public $timestamps = true;

    public function pasienBayi()
    {
        return $this->hasOne( PasienBayi::class, 'id' );
    }
    public function pasienSakit()
    {
        return $this->hasOne( PasienBayi::class,'id_pasiensakit', 'id' );
    }
    public function pasienKB()
    {
        return $this->hasOne( PasienKB::class,'id_pasien', 'id' );
    }
    public function pasienBersalin()
    {
        return $this->hasOne( Bersalin::class, 'id' );
    }
    public function pasienHamil()
    {
        return $this->hasOne( Hamil::class, 'id' );
    }
}
