<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::latest()->paginate(9);
        return view('prestasi.index', compact('prestasis'));
    }

    public function show($id)
    {
        $item = Prestasi::findOrFail($id);
        return view('prestasi.prestasi-detail', compact('item'));
    }
}
