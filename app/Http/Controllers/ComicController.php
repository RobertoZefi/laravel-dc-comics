<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        
        $comics = Comic::all();
        $data = [
            'comics' => $comics
        ];

        return view('/comics.index', $data);

    }
}