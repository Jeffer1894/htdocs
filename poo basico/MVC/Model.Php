<?php


/*Clase Abstracta que genera conexión a la DB y que debe ser implementada por todas las clases hijas*/
abstract class model{

	//Atrubutos

		private static $db_host='localhost'; //se define static por que estos valores no van a cambiar 
		private static $db_user='root';
		private static $db_pass='';
		protected $db_name; //el nombre de Db se define en cada clase hija por si necesito mas Db's, protected permite solo usado en clases hijas 
		private static $db_charset= 'utf8'; //Codificador de caracteres
		private $conn;//guarda conexión a mysql
		protected $querys;//permite realizar consultas a mysql protected para que las clases hijas puedan usar essta variable $query 
		protected $rows= array(); //trae los registros  de la bd y se guarda en el array protected para que las clases hijas puedan usar esta variable $rows

		//Métodos Abstractos para CRUD, que serám heredados por clases que heredan y se crean en esta clase y se implementan en clases hijas 

		abstract protected function create();
		abstract protected function read();
		abstract protected function update();
		abstract protected function delete();	 

	//metodo privado para conectarse a la DB

	private function db_open() {

		//mysqli realiza conexión a Db definición new mysqli(host, us, pw, db);
		$this->conn = new mysqli(
			self::$db_host,
			self::$db_user,
			self::$db_pass,
			$this->db_name
		);
			
			//set_charset es un metodo de la clase mysqli  que garantiza el UTF-8
		$this->conn->set_charset(self::$db_charset); //cada vez que se conecte a la DB garantiza el UTF-8 

	}

	//metodo privado para desconectarse a la DB
	private function db_close(){

		//close es un metodo de la clase mysqli que cierrra conexión a Db
		$this->conn->close();

	}

	//establecer un query simple que afecte datos de tipo INSERT, DELETE,UPDATE
	protected function set_query(){

		$this->db_open(); //llamado a metodo db_open que abre conexión a Db
		$this->conn->query($this->querys/*este valor de querys se lo da la clase hija*/); //metodo query de mysqli que realiza consulta a Db y ejecuta query de la variable $querys
		$this->db_close();

	}
	//obtener datos de un query SELECT

	protected function get_query(){

		$this->db_open(); //llamado a metodo db_open que abre conexión a Db

		$result = $this->conn->query($this->querys);//$result guarda el query ejecutado $this->conn->query($this->querys)
		
		while( $this->rows[] = $result->fetch_assoc() );/*El while es sin cuerpo y se ejecuta por cada registro y genera dinamicamente una posicion en el arreglo rows[], el valor que se le va a asignar a cada una de las posiciones es el de la variable $result fetch_assoc(): Devuelve los resultados de una consulta invicando el nombre del campo en la tabla */
		
		$result->close(); //Cierra consulta y limpia memoria
		
		$this->db_close();

		return array_pop( $this->rows); //retorna el arreglo rows array pop: Extrae el último elemento final del array

	}



}






