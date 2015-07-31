<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticiaController extends Controller {
    
    
    
    public function noticias(){
        
        $noticia = [
            ['Titulo 1','Noticia 1'],
            ['Titulo 2','Noticia 2'],
            ['Titulo 3','Noticia 3']
        ];
        return view('Noticia.noticia', compact('noticia'));
    }
}
