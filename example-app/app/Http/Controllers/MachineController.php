<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index(){
        return view('machines.index',[
            'machines'=>Machine::all()
        ]);
    }
    public function edit($id)
    {
        $machine = Machine::findOrFail($id);
        return view('machine.edit', [
            'mechine' => $machine,
            'countries' => Machine::all()
        ]);
    }

}
