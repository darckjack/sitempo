<?php


namespace App\Http\Controllers\API;


use App\Estacion;
use Illuminate\Http\Request;

class EstacionController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estaciones = Estacion::all();


        return $this->sendResponse($estaciones->toArray(), 'Estaciones retrieved successfully.');
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

        $estacion = Estacion::create($input);

        return $this->sendResponse($estacion->toArray(), 'Estacion created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estacion = Estacion::find($id);


        if (is_null($estacion)) {
            return $this->sendError('Estacion not found.');
        }


        return $this->sendResponse($estacion->toArray(), 'Estacion retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estacion $estacion)
    {
        $input = $request->all();
        $estacion->save();


        return $this->sendResponse($estacion->toArray(), 'Estacion updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estacion $estacion)
    {
        $estacion->delete();


        return $this->sendResponse($estacion->toArray(), 'Estacion deleted successfully.');
    }
}
