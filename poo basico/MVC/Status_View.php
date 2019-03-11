<?php

require_once('Status_Controller.php');

echo '<h1> CRUD con MVC de la Tabla Status</h1>';

$status=new Status_Controller();

$status_data=$status->read(); //$status_data guarda la info extraida del metode read de status_model
var_dump($status_data); // Var dump () Muestra información sobre una variable

$num_status =count($status_data); //cuenta numero de columnas de DB

echo '<h2>Número de Status:'.$num_status;

echo '<h2>Tabla de Status </h2>' ;

echo '<table>

	<tr>
		<th>status_id</th>
		<th>status</th>
	</tr>';
    for( $n = 0; $n< count($status_data); $n++){ // se recorre dinamicamente arreglo que tiene la cant de columnas de la tabla
    
    echo '<tr>
		<td>'. $status_data[$n/*extrae el campo status_id de la DB*/]['status_id'].'</td> 
		<td>'. $status_data[$n/*extrae el campo status de la DB*/]['status'].'</td>
	</tr>';

	}

echo '</table>';

echo '<h2> Insertando Status </h2>';

$new_status_create=array(

'status_id'=> 0, //el nuevo status creado revisa el ultimo valor asociado incremental y le suma 1
'status'=>'Otro Status' //nombre del status nuevo
);

//$status->create($new_status_create); // esta varriable llama a Status_model en la parte superior y se llama al metodo create

echo '<h2> Actualizando Status </h2>';

$new_status_update=array(

'status_id'=> 18, //el nuevo status creado revisa el ultimo valor asociado incremental y le suma 1
'status'=>'Update de Status' //nombre del status nuevo
);

//$status->update($new_status_update); //esta variable llama a Status_model en la parte superior y se llama al metodo update

echo '<h2> Eliminando Status </h2>';

//$status->delete(20); //esta variable llama a Status_model en la parte superior y se llama al metodo delete	