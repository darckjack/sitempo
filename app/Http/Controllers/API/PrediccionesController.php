<?php


namespace App\Http\Controllers\API;


class PrediccionesController extends BaseController {

    public function predictionGetType2($id) {
        $prediction2Get = json_decode('{"10":{"estacion1":[{"arriveTime":120,"leaveTime":120},{"arriveTime":30,"leaveTime":40},{"arriveTime":50,"leaveTime":50},{"arriveTime":60,"leaveTime":60},{"arriveTime":50,"leaveTime":40},{"arriveTime":60,"leaveTime":50}],"estacion2":[{"arriveTime":120,"leaveTime":120},{"arriveTime":30,"leaveTime":40},{"arriveTime":50,"leaveTime":50},{"arriveTime":60,"leaveTime":60},{"arriveTime":50,"leaveTime":40},{"arriveTime":60,"leaveTime":50}],"estacion3":[{"arriveTime":120,"leaveTime":120},{"arriveTime":30,"leaveTime":40},{"arriveTime":50,"leaveTime":50},{"arriveTime":60,"leaveTime":60},{"arriveTime":50,"leaveTime":40},{"arriveTime":60,"leaveTime":50}],"estacion4":[{"arriveTime":120,"leaveTime":120},{"arriveTime":30,"leaveTime":40},{"arriveTime":50,"leaveTime":50},{"arriveTime":60,"leaveTime":60},{"arriveTime":50,"leaveTime":40},{"arriveTime":60,"leaveTime":50}]}}');
        return $this->sendResponse($prediction2Get, "");
    }

    public function predictionGetType4($id) {
        $prediction4Get = json_decode('{"2":{"estacion1":[{"personas":50},{"personas":52},{"personas":58},{"personas":51},{"personas":45},{"personas":60}],"estacion2":[{"personas":78},{"personas":80},{"personas":72},{"personas":73},{"personas":79},{"personas":73}],"estacion3":[{"personas":75},{"personas":74},{"personas":71},{"personas":70},{"personas":79},{"personas":65}],"estacion4":[{"personas":80},{"personas":82},{"personas":85},{"personas":81},{"personas":75},{"personas":78}]}}');
        return $this->sendResponse($prediction4Get, "");
    }

    public function predictionWebType2($id) {
        $prediction2Web = json_decode('{"R1":[{"estacion":"Estacion 1","hora":"05:00","retraso":60},{"estacion":"Estacion 2","hora":"05:05","retraso":0},{"estacion":"Estacion 3","hora":"05:10","retraso":-10},{"estacion":"Estacion 4","hora":"05:15","retraso":60},{"estacion":"Estacion 5","hora":"05:20","retraso":60},{"estacion":"Estacion 6","hora":"05:25","retraso":60}]}');
        return $this->sendResponse($prediction2Web, "");
    }

    public function predictionWebType4($id) {
        $prediction4Web = json_decode('{"R1":[{"estacion":"Estacion 1","hora":"05:00","personas":50},{"estacion":"Estacion 2","hora":"05:05","personas":50},{"estacion":"Estacion 3","hora":"05:10","personas":50},{"estacion":"Estacion 4","hora":"05:15","personas":50},{"estacion":"Estacion 5","hora":"05:20","personas":50},{"estacion":"Estacion 6","hora":"05:25","personas":50}]}');
        return $this->sendResponse($prediction4Web, "");
    }
}
