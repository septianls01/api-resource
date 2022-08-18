<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function getAllVillages(Request $request)
    {
        $villages = Village::all();
        return sendSuccess($villages, "Berhasil mendapatkan data semua villages");
    }
}
