<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Sector;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getDistricts($provinceId)
    {
        $districts = District::where('province_id', $provinceId)->get(['id', 'name']);
        return response()->json($districts);
    }

    public function getSectors($districtId)
    {
        $sectors = Sector::where('district_id', $districtId)->get(['id', 'name']);
        return response()->json($sectors);
    }
}
