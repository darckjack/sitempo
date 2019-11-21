<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;

class PrediccionesController extends BaseController {

    public function predictionGetType2($id) {
        $prediction2Get = json_decode('{"1":{"Periferico Sur":[{"arriveTime":120,"leaveTime":120},{"arriveTime":30,"leaveTime":40},{"arriveTime":50,"leaveTime":50},{"arriveTime":60,"leaveTime":60},{"arriveTime":50,"leaveTime":40},{"arriveTime":60,"leaveTime":50}],"Santuario de los martires de cristo rey":[{"arriveTime":120,"leaveTime":120},{"arriveTime":30,"leaveTime":40},{"arriveTime":50,"leaveTime":50},{"arriveTime":60,"leaveTime":60},{"arriveTime":50,"leaveTime":40},{"arriveTime":60,"leaveTime":50}],"España":[{"arriveTime":120,"leaveTime":120},{"arriveTime":30,"leaveTime":40},{"arriveTime":50,"leaveTime":50},{"arriveTime":60,"leaveTime":60},{"arriveTime":50,"leaveTime":40},{"arriveTime":60,"leaveTime":50}],"Patria":[{"arriveTime":120,"leaveTime":120},{"arriveTime":30,"leaveTime":40},{"arriveTime":50,"leaveTime":50},{"arriveTime":60,"leaveTime":60},{"arriveTime":50,"leaveTime":40},{"arriveTime":60,"leaveTime":50}]}}');
        return $this->sendResponse($prediction2Get, "");
    }
    public function predictionPostType2($id, Request $request) {
        $data = $request->all();
        return $this->sendResponse($data, "Data captured successfully");
    }

    public function predictionGetType4($id) {
        $prediction4Get = json_decode('{"1":{"Periferico sur":[{"personas":50},{"personas":52},{"personas":58},{"personas":51},{"personas":45},{"personas":60}],"Santuario de los martires de cristo rey":[{"personas":78},{"personas":80},{"personas":72},{"personas":73},{"personas":79},{"personas":73}],"España":[{"personas":75},{"personas":74},{"personas":71},{"personas":70},{"personas":79},{"personas":65}],"Patria":[{"personas":80},{"personas":82},{"personas":85},{"personas":81},{"personas":75},{"personas":78}]}}');
        return $this->sendResponse($prediction4Get, "");
    }

    public function predictionPostType4($id, Request $request) {
        $data = $request->all();
        return $this->sendResponse($data, "Data captured successfully");
    }

    public function predictionWebType2($id) {
        $prediction2Web = json_decode('{"R'.$id.'":[{"estacion":"Periferico Sur","hora":"05:00","retraso":60},{"estacion":"Santuario de los martires de cristo rey","hora":"05:05","retraso":0},{"estacion":"España","hora":"05:10","retraso":-10},{"estacion":"Patria","hora":"05:15","retraso":60}]}');
        return $this->sendResponse($prediction2Web, "");
    }

    public function predictionWebType4($id) {
        $prediction4Web = json_decode('{"R'.$id.'":[{"estacion":"Periferico Sur","personas":50},{"estacion":"Santuario de los martires de cristo rey","personas":50},{"estacion":"España","personas":50},{"estacion":"Patria","personas":50}]}');
        return $this->sendResponse($prediction4Web, "");
    }
}
