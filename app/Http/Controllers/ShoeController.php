<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;

class ShoeController extends Controller
{
    function create() {
        return view('addProduct');
    }

    function create1(Request $request) {
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Size' => ['required'],
            'Color' => ['required']
        ]);

        Shoe::create([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color
        ]);
    }
}
