<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreOfferRequest;
use App\Models\Machine;
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
    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view('offers.edit', [
            'offer' => $offer,
            'offers' => Offer::all()
        ]);
    }
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offers.table');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'engine' => 'required|string',
        ]);

        $offer = Offer::findOrFail($id);
        $input = $request->all();
        $offer->update($input);
        return redirect()->route('offers.table');
    }
    public function create()
    {
        return view('offers.create',[
            'machines' => Machine::all(),
        ]);
    }
    public function table()
    {
        return view('offers.table',[
            'offers'=>Offer::all()
        ]);
    }

    public function store(StoreOfferRequest $request)
    {
        $input = $request->all();
        Offer::create($input);

        return redirect()->route('offers.index'
    );
    }

}

