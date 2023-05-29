<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bazmacontroller extends Controller
{
    public function responseFunction(){
        return response("ini adalah bentuk respoonse");
    }
    public function responseHeader(){
        $bodyResponse = [
            'name' => 'bintang',
            'school' => 'SMK TI BAZMA',
        ];
        return response(json_encode($bodyResponse), 200)
        ->header('Content-Type', 'Aplication/Json')
        ->withHeaders([
            'App' => 'Bintang rizki sulistyo',
            'Class' => 'XI',
            'web' => 'Laravel'
        ]);
    }
}
