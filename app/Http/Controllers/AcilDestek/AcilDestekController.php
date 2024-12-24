<?php

namespace App\Http\Controllers\AcilDestek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcilDestek;

class AcilDestekController extends Controller
{
        public function store(Request $request)
        {
            $data = $request-> all();
            
            $acil_destek = new AcilDestek;
            $acil_destek->needs = $request->needs;
            $acil_destek->il = $request->il;
            $acil_destek->ilce = $request->ilce;
            $acil_destek->aciklama = $request->aciklama;
            $acil_destek->save();
    
            return back()->with('success', 'Başarıyla kaydedildi!');
        }
}
