<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservasi;
use App\Models\Pembangunan;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_user = User::count();
        $jumlah_preservasi = Reservasi::count();
        $jumlah_pembangunan = Reservasi::count();

        return view('dashboard.index', compact('jumlah_user', 'jumlah_preservasi', 'jumlah_pembangunan'));
    }
}
