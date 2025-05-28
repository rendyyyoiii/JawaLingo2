<?php

namespace App\Http\Controllers;

use App\Models\Level;

class DashboardController extends Controller {
    public function index() {
        $levels = Level::all(); // Mengambil semua level
        return view('dashboard', compact('levels'));
    }
}
