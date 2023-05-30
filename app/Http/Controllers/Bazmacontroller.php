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
    public function encryptionData()
    {
        $encrypt = encrypt("ini adalah enkripsi");
        $derypt = decrypt($encrypt);
        dd($encrypt, $derypt);
    }
    public function redirectTo()
    {
        return "redirect to";
    }
    public function redirectFrom()
    {
        return redirect("/redirect/to");
    }
    public function redirectToNamedRoute()
    {
        return "redirect to with named route";
    }
    public function redirectFromNamedRoute()
    {
        return redirect(route("redirect.from"));
    }

}
