<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienBayi extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pasienbayi";
    protected $guarded = [];
    public $timestamps = false;

    public function dataPasien()
    {
        return $this->belongsTo( Datapasien::class, 'id_pasienbayi', 'id' );
    }
}
