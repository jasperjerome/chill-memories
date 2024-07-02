<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $enquiries = Enquiry::get();
// return $enquiries;
        return view('pages.backend.dashboard.dashboard', compact('enquiries'));
    }
}
