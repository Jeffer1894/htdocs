<?php
/*Hexagono=6  lados*/

class Hexagono extends Poligono /*Poligono es clase heredada del archivo Clase_Abstracta_Poligonos.php*/ {

private $lado; //longitud del lado de un hexagono regular
private $apotema;


public function __construct ($l,$ap){

	$this->lados=6;//se hereda de clase_Abstracta_poligonos el atributo lados y se asigna valor en esta clase de 4 
	$this->lado=$l;
	$this->apotema=$ap;
}

public function perimetro() /*P=n*l n:# de lados l:lado */{

	return  6*($this->lado);

}

public function area () /*apotema:distancia del centro del hexagono a cualquiera de sus lados */ {

	return (self::perimetro() * $this->apotema)/2;

}

}