<?php


namespace App\Http\Controllers\API;


use App\Linea;
use Illuminate\Http\Request;

class LineaController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineas = Linea::all();


        return $this->sendResponse($lineas->toArray(), 'Lineas retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $linea = Linea::create($input);

        return $this->sendResponse($linea->toArray(), 'Linea created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $linea = Linea::find($id);


        if (is_null($linea)) {
            return $this->sendError('Linea not found.');
        }


        return $this->sendResponse($linea->toArray(), 'Linea retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linea $linea)
    {
        $input = $request->all();
        $linea->save();


        return $this->sendResponse($linea->toArray(), 'Linea updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linea $linea)
    {
        $linea->delete();


        return $this->sendResponse($linea->toArray(), 'Linea deleted successfully.');
    }
}
