<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\PageController;

/**
 * @var RouteCollection $routes
 */ 
$routes->get('/',[PageController::class,'index']);

/*Bu satır, root URL (/) için bir yönlendirme tanımlar. GET isteği ile gelen ziyaretçileri, Home sınıfının index metoduna yönlendirir. Eğer kullanıcı tarayıcısında http://localhost:8080/ adresini ziyaret ederse, Home::index metodu çalıştırılır ve genellikle anasayfa sayfası gösterilir.*/

$routes->get('/dashboard',[PageController::class,'dashboard']);