<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class artikel{
    public static function get_all(){
        $items=DB::table('articels')->get();
        return $items;
    }

    public static function save($data){
        $artikel_new=DB::table('articels')->insert($data);
        return $artikel_new;
    }

    public static function find($id){
        $artikel=DB::table('articels')->where('id','$id')->first();
    }

    public static function update($id,$request){
        $artikel= DB::table('articels')
                            ->where('id',$id)
                            ->update(['judul'=>$request['judul'],
                                        'isi'=>$request['isi'],
                                        'slug'=>$request['slug'],
                                        'tag'=>$request['tag'],]);
        return $artikel;
    }
    public static function delete($id){
        $artikel=DB::table('articels')->where('id',$id)->delete();
        return $artikel;
    }
}