<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcilDestek extends Model
{
    use HasFactory;

    protected $table = "acil_destek";

    protected $fillable = ['needs', 'il', 'ilce', 'aciklama'];

}
