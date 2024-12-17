<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use App\Models\Szotar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class ReceptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Recept::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new Recept();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Integer $id)
    {
        $recepts = Recept::where('id', $id)
            ->get();
        return $recepts[0];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $record = $this->show($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->show($id)->delete();
    }

 
}
