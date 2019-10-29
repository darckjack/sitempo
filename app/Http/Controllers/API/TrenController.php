<?php


namespace App\Http\Controllers\API;


use App\Tren;
use Illuminate\Http\Request;

class TrenController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trenes = Tren::all();


        return $this->sendResponse($trenes->toArray(), 'Trenes retrieved successfully.');
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

        $tren = Tren::create($input);

        return $this->sendResponse($tren->toArray(), 'Tren created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tren = Tren::find($id);


        if (is_null($tren)) {
            return $this->sendError('Tren not found.');
        }


        return $this->sendResponse($tren->toArray(), 'Tren retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tren $tren)
    {
        $input = $request->all();
        $tren->save();


        return $this->sendResponse($tren->toArray(), 'Tren updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tren $tren)
    {
        $tren->delete();


        return $this->sendResponse($tren->toArray(), 'Tren deleted successfully.');
    }
}
