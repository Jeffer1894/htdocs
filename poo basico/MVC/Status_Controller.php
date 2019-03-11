<?php //recibe peticiones de la vista y las dirige a Status_model y solicita las peticiones a los metodos de Status_Model
require_once('Status_Model.php');

class Status_Controller {

	private $model; //inicializa clase Status_Model

	public function __construct (){

		$this->model=new Status_Model();//instancia objeto de clase status_model

	}
	public function create( $status_create=array()){
	
		return $this->model->create($status_create); //instancia objeto model y ejecuta metodo create de clase status_model

	}
	
	public function read($status_read=''){

		return $this->model->read($status_read);	//instancia objeto model y ejecuta metodo read de clase status_model

	}		
	
	public function update($status_update=array()){

		return $this->model->update($status_update); //instancia objeto model y ejecuta metodo update de clase status_model	
	
	}

	public function delete($status_id  =' '){ //instancia objeto model y ejecuta metodo delete de clase status_model
		
		return $this->model->delete($status_id);	
	}

	public function __destruct(){

		unset($db_name);

	}	

}