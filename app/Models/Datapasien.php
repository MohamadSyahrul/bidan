<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapasien extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tb_pasien";
    protected $guarded = [];
    public $timestamps = false;
}
