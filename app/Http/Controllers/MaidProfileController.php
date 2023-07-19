<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaidProfileController extends Controller
{
    public function maid(){
        return view('maid');
    }
}
