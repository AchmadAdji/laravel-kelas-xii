<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use App\Models\Cast;
use App\Models\Film;
use App\Http\Requests\StorePeranRequest;
use App\Http\Requests\UpdatePeranRequest;
use App\Http\Controllers\PeranController;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Peran.create-peran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeranRequest $request)
    {
        $request->validate([
            'actor' => 'required|string|max:255',
            'cast_id' => 'required|integer',
            'film_id' => 'required|integer',
        ]);
    
        Peran::create($request->all());
        return redirect()->route('Peran.index')->with('success', 'Peran berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
        public function edit($id)
        {
       
            //

        }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peran $peran)
    {
        //
    }
}
