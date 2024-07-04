<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function destinations()
    {
        $data = Destination::get();
        return response()->json(['status'=>200,'data'=>$data]);
    }

    public function packages()
    {
        $data = Package::with('destination')->get();
        return response()->json(['status'=>200,'data'=>$data]);
    }
}
