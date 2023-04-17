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

    public function show($id){
        $comics = Comic::findOrFail($id);

        return view('/comics.show', compact('comics'));
    }

    public function create(){
        return view('comics.create');
    }

    public function store(Request $request){

        $data = $request->all();

        $new_comic = new Comic;
        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];

        $new_comic->save();

        return to_route('comics.show', $new_comic);
    }
    
}
