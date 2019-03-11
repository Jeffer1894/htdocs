	<?php

	class Perro{

	public $nombre;
	public $raza;
	public $edad;
	public $sexo;
	public $adiestrado;
	public $foto;
	public $comida;

	//Método que se ejecuta  automáticamente al inicio de instanciar una clase, le paso los párametros  del objeto $abril
	public function__construct ($nombre, $raza, $edad, $sexo, $adiestrado, $foto  ){

		//inicialización 
		$this->nombre=$nombre;
		$this->raza=$raza;
		$this->edad=$edad . 'años'; //concatenado con .
		$this->sexo=($sexo) ? 'Macho' : 'Hembra'; //definición operador ternario, verdadero Macho, else Hembra
		$this->adiestrado=($adiestrado) ? 'Adiestrado' : 'No Adiestrado';
		$this->foto=$foto;

	}


	//Métodos

	public function ladrar (){


	}
//comida se inicializa aquí
	public function comer ($c){


	}

	public function aparecer (){

	}


	//Método que se ejecuta automáticamente al final de instanciar una clase
	public function__destruct (){


	}


}
//instanciar un objeto de la clase
$abril=new Perro('nombre','labrador',2,true,true 'https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiV_MWG2cjgAhVFwFkKHSV6CRoQjRx6BAgBEAQ&url=https%3A%2F%2Fmisanimales.com%2Flabrador-conoce-todas-las-ventajas-de-esta-raza%2F&psig=AOvVaw1fTfG9xYUiDhQaPRR5mctl&ust=1550696574114897',true)	

var_dump($abril);//analiza estructura del objeto abril