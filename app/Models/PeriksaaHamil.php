<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriksaaHamil extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "periksaa_hamils";
    protected $guarded = [];
    public $timestamps = true;

    public function hamil()
    {
        return $this->belongsTo( Hamil::class, 'id_hamil', 'id' );
    }
}
