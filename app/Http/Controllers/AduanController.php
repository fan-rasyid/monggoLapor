<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index(Request $request): View
    {
        return view('aduan.inputAduan', []);
    }
}
