<?php

namespace App\Http\Controllers;

use App\Models\Rekamedis;
use Illuminate\Http\Request;

class RekamedisController extends Controller
{
    public function index()
    {
        $rekam = Rekamedis::all();

        return view('rekamedis', [
            'rekam' => $rekam
        ]);
    }
}
