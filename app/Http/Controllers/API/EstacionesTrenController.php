<?php


namespace App\Http\Controllers\API;


use App\EstacionesTrenes;
use Illuminate\Http\Request;

class EstacionesTrenController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estacionesTrens = EstacionesTrenes::all();


        return $this->sendResponse($estacionesTrens->toArray(), 'EstacionesTreness retrieved successfully.');
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

        $estacionesTren = EstacionesTrenes::create($input);

        return $this->sendResponse($estacionesTren->toArray(), 'EstacionesTrenes created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estacionesTren = EstacionesTrenes::find($id);


        if (is_null($estacionesTren)) {
            return $this->sendError('EstacionesTrenes not found.');
        }


        return $this->sendResponse($estacionesTren->toArray(), 'EstacionesTrenes retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstacionesTrenes $estacionesTren)
    {
        $input = $request->all();
        $estacionesTren->save();


        return $this->sendResponse($estacionesTren->toArray(), 'EstacionesTrenes updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstacionesTrenes $estacionesTren)
    {
        $estacionesTren->delete();


        return $this->sendResponse($estacionesTren->toArray(), 'EstacionesTrenes deleted successfully.');
    }
}
