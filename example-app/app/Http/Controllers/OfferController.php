<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::with('machine:id')->get();
        return view('Offers.index',[
            'offers'=>$offers,
        ]);
    }

    public function show($id)
    {
        $offer = OFfer::findOrFail($id);
        return view('offers.show', [
            'offer' => $offer,

        ]);
    }

}

