<?php

namespace App\Models;

use App\Models\Datapasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PasienSakit extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pasiensakit";
    protected $guarded = [];
    public $timestamps = false;

    public function data_pasien()
    {
        return $this->belongsTo( Datapasien::class, 'id_pasiensakit', 'id' );
    }
}
