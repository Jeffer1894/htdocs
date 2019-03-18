<?php
$route_index= isset ($_GET['r'])  ? $_GET['r'] /*Si la variable 'r' viene definida asigna el valor de 'r'*/: 'home' /*en caso contrario que no venga definida se asigna valor 'home'*/; /*'r' variable definida en .htaccess en la raiz*/
/*Isset: funciona para conocer si una variable esta definida o no*/
$mexflix= new Router($route_index);