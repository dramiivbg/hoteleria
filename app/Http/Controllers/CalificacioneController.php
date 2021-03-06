<?php

namespace App\Http\Controllers;

use App\Models\Calificacione;
use Illuminate\Http\Request;

class CalificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Calificacione::all(),
            'status' => 200
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Calificacione::create($request->all());
        return response()->json([
            'data' => $data,
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([

            'data' => Calificacione::with('User')->find($id),
            'status' => 200
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Calificacione::find($id);
        $data->update($request->all());
        return response()->json([
            'data' => $data,
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Calificacione::findOrFail($id);
            $data->delete();
            return response()->json([
    
                'data' => $id,
                'status' => 200
            ]);
    
        }
        catch(\Exception $e){
    
            return response()->json([
                'error' => $e->getMessage(),
                'status' => 500
            ]);
          
    
        }
    }
}
