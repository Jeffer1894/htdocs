<?php
//archivo donde se va a invocar
require 'Clase_Abstracta_Poligonos.php'; //llamado
require 'Triangulo.php';
require 'Cuadrado.php';
require 'Rectangulo.php';
require 'Hexagono.php';

echo '<h1> Polígonos </h1>
	  <p> Figura geométrica plana que está limitada por tres o más rectas y tienes tres o más ángulos y vértices. </p>';

echo '<h2> Perímetro Triángulo </h2>
	
	<p> <b> Equilátero:</b>  P = 3 * L </p>  	
	<p> <b> Isóceles:  </b>  P = 2 * L + b </p>
	<p> <b> Escaleno:  </b>  P = a + b + c </p>  

	<h3> Área:  </h3>
	<p>B * h / 2</p>';
	
echo '<h1> Triangulo</h2>';

$triangulo=new triangulo(3,6,9,10);
echo  '<p>'. $triangulo->numero_lados() . '</p>'; //se ejecuta metodo numero_lados() de la clase abstract Poligono propia del archivo Clase_Abstracta:Poligonos.php

echo  '<p>Perimetro del ' . get_class($triangulo)/* funcion que trae el nombre de la clase del archivo Triangulo.php */ . ':' . '<mark> ' . $triangulo->perimetro() .'</mark></p>';

echo  '<p>Área del ' . get_class($triangulo)/* funcion que trae el nombre de la clase del archivo Triangulo.php */ . ':' . '<mark> ' . $triangulo->area() .'</mark></p> <hr>'/*<hr> separa con una linea horizontal*/;


echo '<h1> Cuadrado</h2>';

$cuadrado=new cuadrado(7);
echo  '<p>'. $cuadrado->numero_lados() . '</p>'; //se ejecuta metodo numero_lados() de la clase abstract Poligono propia del archivo Clase_Abstracta:Poligonos.php

echo  '<p>Perimetro del ' . get_class($cuadrado)/* funcion que trae el nombre de la clase del archivo Triangulo.php */ . ':' . '<mark> ' . $cuadrado->perimetro() .'</mark></p>';

echo  '<p>Área del ' . get_class($cuadrado)/* funcion que trae el nombre de la clase del archivo Triangulo.php */ . ':' . '<mark> ' . $cuadrado->area() .'</mark></p> <hr>'/*<hr> separa con una linea horizontal*/;

echo '<h1> Rectangulo </h2>';

$rectangulo=new rectangulo(5,3);
echo  '<p>'. $rectangulo->numero_lados() . '</p>'; //se ejecuta metodo numero_lados() de la clase abstract Poligono propia del archivo Clase_Abstracta:Poligonos.php

echo  '<p>Perimetro del ' . get_class($rectangulo)/* funcion que trae el nombre de la clase del archivo Triangulo.php */ . ':' . '<mark> ' . $rectangulo->perimetro() .'</mark></p>';

echo  '<p>Área del ' . get_class($rectangulo)/* funcion que trae el nombre de la clase del archivo Triangulo.php */ . ':' . '<mark> ' . $rectangulo->area() .'</mark></p> <hr>'/*<hr> separa con una linea horizontal*/;

echo '<h1> Hexagono </h2>';

$hexagono=new hexagono(8,9);
echo  '<p>'. $hexagono->numero_lados() . '</p>'; //se ejecuta metodo numero_lados() de la clase abstract Poligono propia del archivo Clase_Abstracta:Poligonos.php

echo  '<p>Perimetro del ' . get_class($hexagono)/* funcion que trae el nombre de la clase del archivo Triangulo.php */ . ':' . '<mark> ' . $hexagono->perimetro() .'</mark></p>';

echo  '<p>Área del ' . get_class($hexagono)/* funcion que trae el nombre de la clase del archivo Triangulo.php */ . ':' . '<mark> ' . $hexagono->area() .'</mark></p> <hr>'/*<hr> separa con una linea horizontal*/;