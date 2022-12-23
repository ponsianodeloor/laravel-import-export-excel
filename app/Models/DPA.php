<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPA extends Model
{
    use HasFactory;

    protected $table = "dpa";

    protected $fillable = [
        'dpa_provin',
        'dpa_despro',
        'dpa_canton',
        'dpa_descan',
        'dpa_parroq',
        'dpa_despar'
    ];
}
