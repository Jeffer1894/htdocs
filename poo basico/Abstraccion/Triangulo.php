<?php

class Triangulo extends Poligono /*Poligono es clase heredada del archivo Clase_Abstracta_Poligonos.php*/ {

	private $lado_a;//private ya que estos atributos solo seran usados por esta clase y proyecto triangulo.php
	private $base;
	private $lado_c;
	private $altura;

public function __construct($a,$b,$c,$h){

		$this->lados=3; //se hereda de clase_Abstracta_poligonos el atributo lados y se asigna valor en esta clase de 3 
		$this->lado_a=$a;
		$this->base=$b;
		$this->lado_c=$c;
		$this->altura=$h;
}

public function perimetro(){

	return ($this->lado_a+$this->base+$this->lado_c);  


}

public function area (){

	return ($this->base*$this->altura)/(2);

}

}