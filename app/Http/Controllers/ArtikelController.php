<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel;

class ArtikelController extends Controller{


    public function index(){
        $items= artikel::get_all();
        return view('layouts.artikel',compact('items'));
    }

    public function create(){
        return view('layouts.artikelform');
    }
  public function store(Request $request){
      
          $data=$request->all();
          $data["slug"]=strtolower(str_replace(' ', '-',$data["slug"]));
          unset($data["_token"]);
           $items=artikel::save($data);
           if($items){
               return redirect('/artikel');
           }
       }
    public function show($id){
        $artikel=artikelModel::find($id);
        $tag= explode(" ", $artikel->tag);
     
        return view('layouts.artikelshow',compact('artikel','tag'));
    }

    public function edit($id){
        $artikel= artikel::find($id);
        return view('layouts.artikeledit',compact('artikel'));
    }

    public function update($id, Request $request){
        $artikel=artikel::update($id,$request->all());
        return redirect('/artikel');
    }
    public function delete($id){
        $artikel= artikel::delete($id);
        return redirect('/artikel');
    }
}