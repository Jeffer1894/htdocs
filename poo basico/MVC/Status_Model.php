<?php
//Status_Model.php genera los querys para ejecutar en la tabla status Clase hija de Model
require_once('Model.php');//requiere_once:Requiere una sola vez el archivo Model.php

Class Status_Model extends Model {

//ORM: Mapear una tabla  de la Bd en una clase para luego utilizarla como objeto,  por cada campo de la Bd se crea un atributo en esta clase 

	public $status_id; 
	public $status;

	public function __construct (){

	$this->db_name='mexflix'; // $db_name Es heredado de la clase padre model
		
	}

    public function create( $status_create=array()) /* $status_data Recibe valores que va a insertar de status_model*/{ //metodo heredado de model.php pero en esta clase deben implementarse public, además se deben implementar todos los metodos de la clase padre

    	foreach ($status_create as $key => $value) {
    		
    		$$key=$value; /*$$ Variable de variable, $key extrae valor de status_id y status de $new_status_create=array( 'status_id'=>0, 'status'=>'Otro Status' ); y convierte esos valore en variables $status_id y $status que se implementan en el insert into de abajo*/
    	}

    	$this->querys="INSERT INTO status (status_id,status) VALUES ($status_id, '$status')";

    	$this->set_query();
    }
	
	public function read($status_read='') /*No es el $status_id definido arriba*/{//metodos heredados de model.php pero en esta clase deben implementarse public, además se deben implementar todos los emetodos de la clase padre

		/*este condicional inferior ejecuta si viene vacio read(); ver satus view ejecuta el select from * status, pero su le define un valor read(2); devuelve el valor de este status_id de la DB */

		$this->querys/*Variable heredada de Model*/= ($status_read != '')  
		? /* Operador ternario igual a if  '?' */ "SELECT * FROM status/*Tabla*/ WHERE status_id /*Campo DB*/=$status_read" 
		:/* ':'operador ternario else*/ "SELECT * FROM status/*tabla*/";

		$this->get_query(); //heredado de Model
		//var_dump($this->rows); //devuelve valor de campos de la BD
		

		$num_rows=count($this->rows); //cuenta la cantidad de filas de la tabla status //rows viene heredada de Model
		//echo '<p><mark>Cantidad de filas de tabla status:</mark></p>'. $num_rows;

		$data = array(); //declaro array $data

		foreach ($this->rows as $key /*campo */=> $value /*datos del campo de tabla*/) { //foreach 		recorre los valores de un array
			$data[$key]=$value; //hace la misma función que la linea de code inferior
			//array_push($data/*guarda los datos en este arreglo $data*/,$value);//array_push() metodo que agrega una posicion al final del arreglo
		}

		return $data;


	}
	
	public function update($status_update=array()){//metodos heredados de model.php pero en esta clase deben implementarse public, además se deben implementar todos los emetodos de la clase padre

		foreach ($status_update as $key => $value) {
    		
    		$$key=$value; /*$$ Variable de variable, $key extrae valor de status_id y status de $new_status_create=array( 'status_id'=>0, 'status'=>'Otro Status' ); y convierte esos valore en variables $status_id y $status que se implementan en el insert into de abajo*/
    	}

    	$this->querys="UPDATE status SET status_id=$status_id, status='$status' WHERE status_id=$status_id";

    	$this->set_query();


	}
	
	public function delete($status_id  =' '){//metodos heredados de model.php pero en esta clase deben implementarse public, además se deben implementar todos los emetodos de la clase padre

		
    	$this->querys = "DELETE FROM status WHERE status_id=$status_id";

    	$this->set_query();

	}

	public function __destruct(){

		unset($db_name); //unset destruye objeto de clase

	}
 
}