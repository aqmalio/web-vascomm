<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $data['count']['users'] = User::count();
        $data['count']['products'] = Product::count();
        $data['products'] = Product::latest()->take(5)->get();
        return view('dashboard', $data);
    }
}
