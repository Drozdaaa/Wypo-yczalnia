<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreMachineRequest;
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
        return view('machines.edit', [
            'machine' => $machine,
            'machines' => Machine::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'type' => 'required|string|min:0',
            'production_year' => 'required|integer|min:1980',
            'technical_condition' => 'required|string',
            'availability' => 'required|string',
        ]);

        $machine = Machine::findOrFail($id);
        $input = $request->all();
        $machine->update($input);
        return redirect()->route('machines.index');
    }
    public function create()
    {

        return view('machines.create',[
            'machines' => Machine::all()
        ]);
    }
    public function store(StoreMachineRequest $request)
    {
        $input = $request->all();
        Machine::create($input);

        return redirect()->route('machines.index'

    );
    }
    public function destroy(Machine $machine)
    {
        $machine->delete();
        return redirect()->route('machines.index');
    }
}
