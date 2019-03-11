	<?php

	class Perro{

	public $nombre;
	public $raza;
	public $edad;
	public $sexo;
	public $adiestrado;
	public $foto;
	public $comida;
	private $pulgas;
	public static $mejor_amigo='Hombre'; //toca definir un valor constante a este atributo
	const MEJOR_CUALIDAD ='Fidelidad'; //Constantes en mayús y siempre tiene que ser pública

	//Método que se ejecuta  automáticamente al inicio de instanciar una clase, le paso los párametros  del objeto $abril
	public function __construct($nombre, $raza, $edad,$sexo, $adiestrado, $foto,$pulgas){

		//inicialización 
		$this->nombre=$nombre;
		$this->raza=$raza;
		$this->edad=$edad . 'años'; //concatenado con .
		$this->sexo=($sexo) ? 'Macho' : 'Hembra'; //definición operador ternario, verdadero Macho, else Hembra
		$this->adiestrado=($adiestrado) ? 'Adiestrado' : 'No Adiestrado';
		$this->foto=$foto;
		$this->pulgas=$pulgas;

		echo '<p> <mark> Soy el constructor de la Clase </p></mark>';

	}
//Método que se ejecuta automáticamente al final de instanciar una clase
	public function __destruct (){

		echo '<p> <mark> Soy el Destructor de la Clase </p></mark>';
	}

	//Métodos

	public function ladrar (){

		echo '<p><mark> GUAU GUAU </MARK></p>';

	}
//comida se inicializa aquí
	public function comer ($c){

		$this->comida=$c;
		echo '<p>'. $this->nombre . ' ' . 'come' . ' ' . $this->comida . '</p>'; 	

	}

	public function aparecer_foto (){

			echo '<img src='. $this->foto . '>' ;


	}

	public function tiene_pulgas(){ // acceder a atributo privado a través de atributo publico

			echo ($this->pulgas) ? '<p> Tiene pulgas </p>' : '<p>No tiene pulgas</p>';

	}

	public function informacion_adicional(){

			self::ladrar(); //llamar métodos que estan en la misma clase
			Perro::comer('huesos');	//llamar métodos invocando el nombre de la clase
			echo '<p> El mejor amigo del perro es ' . Perro::$mejor_amigo . '</p>'; //llamar atributos invocando el nombre de la clase
			echo '<p> La mejor cualidad del perro es '. self::MEJOR_CUALIDAD . '</p>';
	}

}
//instanciar un objeto de la clase
	$abril=new Perro('Abril','labrador',2,true,true,'https://misanimales.com/wp-content/uploads/2015/09/labrador.jpg',false);

	echo '<h1>' . $abril->nombre . '</h1>'; //imprimir nombre de perro con codigo html utilizando echo
	echo '<h2>' . $abril->raza . '</h2>';
	echo '<h3>' . $abril->edad . '</h3>';
	echo '<h4>' . $abril->sexo . '</h4>';
	echo '<h5>' . $abril->adiestrado . '</h5>';
	//echo '<h6>' . $abril->pulgas . '</h6>'; //Error No puede acceder al atributo, ya que es privado, tiene que accederse a través de un metodo publico


	$abril->ladrar(); //ejecución metodo ladrar ()
	$abril->comer('croqueta');
	$abril->aparecer_foto();
	$abril->tiene_pulgas(); 
	$abril->informacion_adicional();


//var_dump($abril);//analiza estructura del objeto abril