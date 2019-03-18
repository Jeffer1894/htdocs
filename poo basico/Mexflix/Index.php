<?php
require_once('./controllers/Autoload.php');//Autoload.php se encarga de llamar todos los archivos de esta aplicación 
$autoload=new Autoload(); // Objeto que inicializa Autoload
$route_index= isset ($_GET['r'])  ? $_GET['r']: 'home'; /*Si la variable 'r' viene definida asigna el valor de 'r'*/ /*en caso contrario que no venga definida se asigna valor 'home'*//*'r' variable definida en .htaccess en la raiz*/
/*Isset: funciona para conocer si una variable esta definida o no*/
$mexflix= new Router($route_index);