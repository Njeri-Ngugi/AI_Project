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

    public function compare_2015_path($filename) {
        // Regular expression for finding a match between the filename and the image path
        if (preg_match('/^(.+)\.(\w+)\(.+\)$/', $filename, $matches)) {
            $trimmedFilename = $matches[1] . '.' . $matches[2];

            $imagename = public_path("2015Images\detected{$trimmedFilename}");

            if (str_contains($imagename, $trimmedFilename)) {
                return response()->file($imagename);
            } else {
                return response()->json(['message' => 'Image not found']);
            }
        } 
        
    }
    public function compare_2016_path($filename)
    {
        // Regular expression for finding a match between the filename and the image path
        if (preg_match('/^(.+)\.(\w+)\(.+\)$/', $filename, $matches)) {
            $trimmedFilename = $matches[1] . '.' . $matches[2];

            $imagename = public_path("2016Images\detected{$trimmedFilename}");

            if (str_contains($imagename, $trimmedFilename)) {
                return response()->file($imagename);
            } else {
                return response()->json(['message' => 'Image not found']);
            }
        }
    }

    public function get_severe_lake()
    {
        $data = Severe_Lake::all();

        return response()->json(['data' => $data]);
    }

    public function get_lake_image($filename) {

        
    }

}
