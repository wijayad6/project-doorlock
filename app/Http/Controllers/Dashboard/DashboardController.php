<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $absensi = Absensi::where('user_id', $request->user()->id)
            ->latest()
            ->get();

        return view('dashboard', [
            'absensi' => $absensi,
        ]);
    }
}
