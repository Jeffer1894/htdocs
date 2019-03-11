<?php

abstract class Poligono /*Clase Padre*/{

	protected $lados;

	abstract protected function perimetro (); //protected por que será implementada por una clase hija. Solo definimos el metodo, sin cuerpo

	abstract protected function area (); //Solo definimos el metodo, sin cuerpo

	public function numero_lados(){

	return 'Un ' . get_called_class() /* funcion que trae el nombre de la clase*/. ' tiene <mark>' . $this->lados .' lados </mark>'; //este metodo con cuerpo se puede crear en esta clase abstracta, debido a que es público y es implementado por los objetos $triangulo y $cuadrado en la clase figuras.
}

	} 



