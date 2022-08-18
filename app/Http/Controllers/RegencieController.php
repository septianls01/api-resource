<?php

namespace App\Http\Controllers;

use App\Models\Regencie;
use Illuminate\Http\Request;

class RegencieController extends Controller
{
    public function getAllRegencies(Request $request)
    {
        $regencies = Regencie::all();
        return sendSuccess($regencies, "Berhasil mendapatkan data semua regencies");
    }
}
