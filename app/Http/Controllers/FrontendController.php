<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Gallery;
use App\Models\Introduce;
use App\Models\Manfaat;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $datas = Introduce::all();
        $bahan = Bahan::all();
        $manfaat = Manfaat::all();
        $gallery = Gallery::all();
        return view('frontend.index', compact('datas', 'bahan', 'manfaat', 'gallery'));
    }
}
