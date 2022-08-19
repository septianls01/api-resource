<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function getAllProvinces(Request $request)
    {
        $provinces = Province::all();
        return sendSuccess($provinces, "");
        // return sendSuccess($provinces, "Berhasil mendapatkan data semua provinsi");
    }
}
