<?php

namespace App\Models;

use App\Models\Datapasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bersalin extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "bersalins";
    protected $guarded = [];
    public $timestamps = false;

    public function DataPasien()
    {
        return $this->belongsTo( Datapasien::class, 'id_pasienbersalin', 'id' );
    }
}
