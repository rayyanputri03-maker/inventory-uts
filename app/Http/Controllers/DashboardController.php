<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total semua produk
        $totalProducts = Product::count();
        
        // Hitung produk dengan stok kurang dari 10
        $lowStockCount = Product::where('stock', '<', 10)->count();

        // Ambil daftar produk yang stoknya kurang dari 10 untuk widget notifikasi
        $lowStockProducts = Product::where('stock', '<', 10)->get();

        // Kirim semua data ke view dashboard
        return view('dashboard', compact('totalProducts', 'lowStockCount', 'lowStockProducts'));
    }
}