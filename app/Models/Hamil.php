<?php

namespace App\Models;

use App\Models\Datapasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hamil extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "hamils";
    protected $guarded = [];
    public $timestamps = false;

    public function dtpasien()
    {
        return $this->belongsTo( Datapasien::class, 'id_pasienhamil', 'id' );
    }
}
