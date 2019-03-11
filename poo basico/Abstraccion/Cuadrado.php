<?php

class Cuadrado extends Poligono /*Poligono es clase heredada del archivo Clase_Abstracta_Poligonos.php*/{

private $lado;

public function __construct ($l){

	$this->lados=4;//se hereda de clase_Abstracta_poligonos el atributo lados y se asigna valor en esta clase de 4 
	$this->lado=$l;
}

public function perimetro(){

	return  ($this->lado)*4;

}

public function area (){

	return pow($this->lado,2);

}

}