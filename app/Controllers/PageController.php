<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class PageController extends BaseController{

public function index(){
  // Bu metod, '/' adresine gelen isteği işler
    return view('home');
     // home.php görünümünü yükler
}

public function dashboard(){
    return view('dashboard');
}


}