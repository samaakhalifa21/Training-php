<?php

namespace App\Http\Controllers;

use App\Models\exam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all exam
        return exam::all();
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'item'=>'required',

        ]);
        return exam::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        
        return exam::find($id);
    }
    

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $exam=exam::find($id);
        $exam->update($request->all());
        return $exam;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $exam::destroy($id);
    }
}
