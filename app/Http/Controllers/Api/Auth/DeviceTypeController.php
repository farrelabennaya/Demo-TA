<?php

namespace App\Http\Controllers\api\Auth;

use App\Http\Controllers\Controller;
use App\Models\DeviceType;
use Illuminate\Http\Request;

class DeviceTypeController extends Controller
{
    public function index()
    {
    $devicetypes = DeviceType::all();
        return response()->json(['devicetypes' => $devicetypes], 200);
    }
}
