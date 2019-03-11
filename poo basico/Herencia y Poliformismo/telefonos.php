<?php

class Telefono {

	public $marca;
	public $modelo;
	protected $alambrico=true;
	protected $comunicacion;

	public function __construct($marca, $modelo){

		$this->marca=$marca;
		$this->modelo=$modelo;
		$this->comunicacion=($this->alambrico) ? 'Alámbrico' : 'Inalámbrico'; //boleano

	}

	public function llamar(){

		return  print ('<p> Riing Riing </p>');
	}

	public function mas_info(){

		return  print ('<ul>
					<li> Marca <b>' .	$this->marca . '</b></li>
					<li> Modelo <b>' .	$this->modelo . '</b></li>
					<li> Comunicacion <b>' .	$this->comunicacion . '</b> </li> 
					</ul>');
				
	}
}

class Celular extends Telefono {

	protected $alambrico=false; //celulares son inalámbricos

	public function __construct ($marca,$modelo){
		
		parent::__construct($marca,$modelo); //llamado de metodo constructor de clase padre

	}
}

final class Smartphone extends Celular { //se define cuando una clase no puede ser heredada por nada más

	public $alambrico=false; //un Celular es inalambrico	
	public $internet=true;

	public function __construct($marca,$modelo){ //ejemplo claro de polimorfismo ya que llamo el metodo __construct de la clase Celular y le agrego la inicialización del atributo $internet booleano

		parent::__construct($marca,$modelo); //llamado de metdodo constructor de clase padre
		$this->internet=($this->internet) ? 'Smartphone con acceso a Internet' : 'Smartphone sin acceso a Internet'; //boleano

		}
		
		public function mas_info(){	 //polimorfismo ya que tengo el mismo nombre del metodo mas_info original de la clase Telefono, pero redefinido en esta clase Smartphone ya que agrege el valor de internet

		return  print ('<ul>
					<li> Marca:<b>' .	$this->marca . '</b></li>
					<li> Modelo:<b>' .	$this->modelo . '</b></li>
					<li> Comunicacion: <b>' .	$this->comunicacion . '</b> </li> 
					<li>  Conectividad: <b>' .	$this->internet . '</b> </li>
					</ul>'); 
	}

}

echo '<h1> <center> Evolución del Telefono </center> </h1>';
echo '<h2> Teléfono: </h2>';

$tel_casa=new Telefono ('Panasonic', 'Kx-150');
$tel_casa->llamar();//invocar metodo
$tel_casa->mas_info(); 	

echo '<h2> Celular: </h2>';
$mi_cel=new Celular ('Nokia', '3220');
$mi_cel->llamar();
$mi_cel->mas_info(); 	

echo '<h2> Smartphone: </h2>';
$mi_smartphone=new Smartphone ('Huawei', 'P7');
$mi_smartphone->llamar();
$mi_smartphone->mas_info(); 