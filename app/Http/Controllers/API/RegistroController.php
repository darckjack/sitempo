<?php


namespace App\Http\Controllers\API;


use App\Registro;
use Illuminate\Http\Request;

class RegistroController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();


        return $this->sendResponse($registros->toArray(), 'Registros retrieved successfully.');
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

        $registro = Registro::create($input);

        return $this->sendResponse($registro->toArray(), 'Registro created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = Registro::find($id);


        if (is_null($registro)) {
            return $this->sendError('Registro not found.');
        }


        return $this->sendResponse($registro->toArray(), 'Registro retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        $input = $request->all();
        $registro->save();


        return $this->sendResponse($registro->toArray(), 'Registro updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();


        return $this->sendResponse($registro->toArray(), 'Registro deleted successfully.');
    }
}