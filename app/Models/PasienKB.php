<?php

namespace App\Models;

use App\Models\Datapasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PasienKB extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pasien_kb";
    protected $guarded = [];
    public $timestamps = false;

    public function dt_pasien()
    {
        return $this->belongsTo( Datapasien::class, 'id_pasien', 'id' );
    }
}
