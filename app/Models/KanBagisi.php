<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanBagisi extends Model
{
    use HasFactory;

    protected $table = 'kan_bagisi';
    protected $fillable = ['ad_soyad', 'kan_grubu', 'sehir', 'adres', 'aciklama','telefon', 'latitude', 'longitude'];
}
