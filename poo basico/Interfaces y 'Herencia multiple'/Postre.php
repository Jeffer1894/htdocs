<?php

interface Ingredientes {
//metodos solo se definen sin cuerpo
 	public function establecer_ingredientes($lista);
	public function obtener_ingredientes();
}

interface Receta {
//metodos solo se definen sin cuerpo
	public function establecer_receta($pasos);
	public function obtener_receta();
}

class Postre implements Ingredientes,Receta{  

	/*se deben implementar todos los metodos de las interface*/

		private $ingredientes;
		private $postre;
	

	public function establecer_ingredientes($lista){

		$this->ingredientes/*arreglo*/= explode('|',$lista); /*explode rompe una cadena y convierte en varias posiciones de un arreglo, 
		definiendo un caracter delimitador, en esta es '|' */

	}
	public function obtener_ingredientes(){

		$num_ingredientes = count($this->ingredientes); /* Devuelve longitud del arreglo */ 

	    $html= '<ul>';

				for($i=0; $i < $num_ingredientes; $i++) { //ciclo que recorre hasta el tamaño del arreglo ingredientes e imprimi los ingredientes

					$html.= '<li>' . $this->ingredientes[$i] . '</li>';

				}

		$html .= '</ul>';

		return print ($html);

	}

	public function establecer_receta($pasos){

		$this->postre/*arreglo*/= explode('|',$pasos); //explode rompe una cadena y convierte en varias posiciones de un arreglo, definiendo un caracter delimitador, en esta es ','


	}
	public function obtener_receta(){


		$num_pasos = count($this->postre); /* Devuelve longitud del arreglo */ 

		$html= '<ol>';

				for($i=0; $i < $num_pasos; $i++){

					$html.= '<li>' . $this->postre[$i] . '</li>';
				}

		$html .= '</ol>';

		return print ($html);

	}

 }

echo '<h1> <center> Postres </center></h1>';

echo '<h2> Hot Cakes </h2>';
$hot_cakes=new Postre();

echo '<h3> Ingredientes:</h3>';
$hot_cakes->establecer_ingredientes (

	'1 taza de harina|
	1 huevo|
	1/3 taza de leche|
	10 gotas de vainilla|
	3 cucharadas de mantequilla');

$hot_cakes->obtener_ingredientes();

echo '<h3> Receta: </h3>';
$hot_cakes->establecer_receta(

	'En un recipiente grande, mezcla la harina, la sal, y el polvo para hornear.|

	Separa la yema de la clara, y ponlos en recipientes aparte.|

 	Mezcla la yema, el azucar y la leche, y agrega la mantequilla derretida.|

	Agrega la mezcla del huevo a la mezcla de la harina, y batelo muy bien 
	hasta que los grumos desaparezcan lo mas posible.|

	Bate la clara hasta que quede espumosa y blanca (a punto de turron).');

$hot_cakes->obtener_receta();

echo '<h2> Arroz con leche </h2>';

echo '<h3> Ingredientes:</h3>';
$hot_cakes->establecer_ingredientes (

	'1 taza de leche|
	1 taza de arroz|
	1/2 cucharada azúcar|
	uvas pasas');

$hot_cakes->obtener_ingredientes();

echo '<h3> Receta: </h3>';
$hot_cakes->establecer_receta(

	'Hervir leche.|

	Mezclar con arroz.|

	Servir decorado.');

$hot_cakes->obtener_receta();