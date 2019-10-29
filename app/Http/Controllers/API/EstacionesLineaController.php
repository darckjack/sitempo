<?php


namespace App\Http\Controllers\API;


use App\EstacionesLineas;
use Illuminate\Http\Request;

class EstacionesLineaController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estacionesLineas = EstacionesLineas::all();


        return $this->sendResponse($estacionesLineas->toArray(), 'EstacionesLineass retrieved successfully.');
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

        $estacionesLinea = EstacionesLineas::create($input);

        return $this->sendResponse($estacionesLinea->toArray(), 'EstacionesLineas created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estacionesLinea = EstacionesLineas::find($id);


        if (is_null($estacionesLinea)) {
            return $this->sendError('EstacionesLineas not found.');
        }


        return $this->sendResponse($estacionesLinea->toArray(), 'EstacionesLineas retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstacionesLineas $estacionesLinea)
    {
        $input = $request->all();
        $estacionesLinea->save();


        return $this->sendResponse($estacionesLinea->toArray(), 'EstacionesLineas updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstacionesLineas $estacionesLinea)
    {
        $estacionesLinea->delete();


        return $this->sendResponse($estacionesLinea->toArray(), 'EstacionesLineas deleted successfully.');
    }
}
