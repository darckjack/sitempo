<?php


namespace App\Http\Controllers\API;


use App\Estacion;
use App\EstacionesLineas;
use App\Horario;
use App\Linea;
use App\Ruta;
use Illuminate\Http\Request;

class ConsultController extends BaseController
{
    public function lines() {
        $lines = Linea::all();

        return $this->sendResponse($lines->toArray(), 'Lineas retrived successfully');
    }

    public function stations($line) {
        $stations_lines = EstacionesLineas::whereLineaId($line)->get('estacion_id')->all();
        $stations = [];
        foreach ($stations_lines as $stations_line) {
            $stations []= Estacion::whereId($stations_line->estacion_id)->get()->first();
        }

        return $this->sendResponse($stations, 'Estaciones retrieved successfully');
    }

    public function hours($line, $station) {
        $hours = Horario::whereLineaId($line)->whereEstacionId($station)->get()->all();

        return $this->sendResponse($hours, 'Horarios retrieved successfully');
    }

    public function rutas() {
        $ruta = Ruta::all();

        return $this->sendResponse($ruta, 'Ruta retrieved successfully');
    }

    public function ruta($route) {
        $hours = Horario::whereRutaId($route)->get()->all();

        return $this->sendResponse($hours, 'Ruta retrieved successfully');
    }
}
