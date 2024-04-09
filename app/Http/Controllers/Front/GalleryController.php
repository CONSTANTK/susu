<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    pucblic function index(){
        return view('front.gallery.php');
}
    //
}
