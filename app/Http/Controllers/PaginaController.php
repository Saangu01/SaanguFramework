<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function home(){
        return view('Paginas.Home');
    }

    public function blog(){
        return view('Paginas.Blog');
    }

    public function juegos(){
        return view('Paginas.Juegos');
    }

    public function musica(){
        return view('Paginas.Musica');
    }

    public function rcss(){
        return view('Paginas.rcss');
    }

    public function a1(){
        return view('Paginas.a1');
    }

    public function a2(){
        return view('Paginas.a2');
    }

    public function a4(){
        return view('Paginas.a4');
    }

    public function ab1(){
        return view('Paginas.ab1');
    }

    public function pcbuild(){
        return view('Paginas.PCbuild');
    }

    public function intel(){
        return view('Paginas.Intel');
    }

    public function ryzen(){
        return view('Paginas.Ryzen');
    }

    public function PCIntel(){
        return view('Paginas.PCIntel');
    }

    public function PCRyzen(){
        return view('Paginas.PCRyzen');
    }

    public function Productos(){
        return view('Paginas.Productos');
    }

    public function Proyect(){
        return view('Paginas.Proyect');
    }

    public function Pblog(){
        return view('Paginas.PaginaPrincipal');
    }

    public function dbd(){
        return view('Paginas.DeadByDaylight');
    }

    public function music(){
        return view('Paginas.Music');
    }

    public function about(){
        return view('Paginas.Sobremi');
    }
}