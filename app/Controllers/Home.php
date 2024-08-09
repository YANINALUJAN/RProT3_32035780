<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data["titulo"]="index";
       echo view("front/head",$data); 
       echo view('front/navbar');
        echo view('front/index');
        echo view('front/footer');
    }
    public function quienes_somos(): string
    {
         $data["titulo"]="quienes_somos";
        echo view("front/head",$data);
        echo view('front/navbar');
        echo view('front/Quienes somos');
        return view('front/footer');
    }
    public function acercade(): string
    {
         $data["titulo"]="acercade";
        echo view("front/head",$data); 
        echo view('front/navbar');
        echo view('front/Acerca de');
        return view('front/footer');
    }
    public function registro(): string
    {
        $data["titulo"]="registro";
        echo view("front/head",$data); 
        echo view('front/navbar');
        echo view('back/usuario/Registro');
        return view('front/footer');
    }
    public function login(): string
    {
        $data["titulo"]="Login";
       echo view("front/head",$data);
       echo view('front/navbar');
       echo view('back/usuario/Login');
       return view('front/footer');
       
    }
    public function cards(): string
    {
         $data["titulo"]="cards";
        echo view("front/head",$data); 
        echo view('front/navbar');
        echo view('front/Cards');
        return view('front/footer');
    }
    public function crearusuario(): string
    {
       /*  $data[ "titulo"]="cards_autoridades";
        echo view("Front/head",$data); */
        return view('back/usuario/crearusuario');
        
    }
}
