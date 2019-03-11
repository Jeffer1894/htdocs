<?php

class Rectangulo extends Poligono /*Poligono es clase heredada del archivo Clase_Abstracta_Poligonos.php*/{

private $base;
private $altura;

public function __construct ($b,$h){

	$this->lados=4;//se hereda de clase_Abstracta_poligonos el atributo lados y se asigna valor en esta clase de 4 
	$this->base=$b;
	$this->altura=$h;
}

public function perimetro(){

	return  2*($this->base + $this->altura);

}

public function area (){

	return ($this->base * $this->altura);

}

}