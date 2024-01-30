<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mild_Lake;
use App\Models\Moderate_Lake;
use App\Models\Severe_Lake;


class Mild_Lakes_Controller extends Controller
{
    public function get_mild_lake() {
        $data = Mild_Lake::all();
        return response()->json(['data' => $data]);
    }

    public function get_moderate_lake()
    {
        $data = Moderate_Lake::all();

        return response()->json(['data' => $data]);
    }

    public function get_severe_lake()
    {
        $data = Severe_Lake::all();

        return response()->json(['data' => $data]);
    }

}
