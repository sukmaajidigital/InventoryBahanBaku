<?php

namespace App\Http\Controllers;

use App\Models\DataKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // FUNGSI UNTUK MENAMPILKAN DASHBOARD
    public function index()
    {
        // MEMANGGIL DATA USER YANG LOGIN
        return view('dashboard.index');
    }
}
