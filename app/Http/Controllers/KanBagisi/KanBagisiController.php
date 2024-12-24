<?php

namespace App\Http\Controllers\KanBagisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KanBagisi;
use RealRashid\SweetAlert\Facades\Alert;

class KanBagisiController extends Controller
{

    public function store(Request $request)
    {
        $kan_bagisi= new KanBagisi();
        $kan_bagisi->ad_soyad = $request->ad_soyad;
        $kan_bagisi->kan_grubu = $request->kan_grubu;
        $kan_bagisi->sehir = $request->sehir;
        $kan_bagisi->adres = $request->adres;
        $kan_bagisi->aciklama = $request->aciklama;
        $kan_bagisi->telefon = $request->telefon;
        $kan_bagisi->latitude = $request->latitude;
        $kan_bagisi->longitude = $request->longitude;
        $kan_bagisi->save();

        return redirect()->back()->with('success', 'Kan bağışı bilgisi başarıyla kaydedildi!');
    }

    public function index()
    {
        $kan_bagisi = KanBagisi::all();
        return view('kanbagisi', compact('kan_bagisi'));
    }


}
