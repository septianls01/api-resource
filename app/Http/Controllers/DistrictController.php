<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getAllDistricts(Request $request)
    {
        $districts = District::all();
        return sendSuccess($districts, "Berhasil mendapatkan data semua district");
    }
    public function getDistrictsWithId(Request $request)
    {

        $districts = District::where('regency_id',$request->id)->get();
        return sendSuccess($districts, "Berhasil mendapatkan data semua regencies");
    }
}
