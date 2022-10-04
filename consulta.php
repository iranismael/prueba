<?php 
	require 'conexion.php';

	if(!empty($_POST['id_lote'])){
    $data = array();
    
    //obtener información del lote en la bd
    $query = $conn->query("SELECT * FROM lotes WHERE num_lote = {$_POST['id_lote']}");
    
    if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;
    }else{
        $data['status'] = 'err';
        $data['result'] = '';
    }
    
    //retornar la informacion en formato JSON
    echo json_encode($data);
}else{
	echo " id vacio";
}

	

	//https://cybmeta.com/ajax-con-json-y-php-ejemplo-paso-a-paso	
	//https://www.baulphp.com/respuesta-json-de-ajax-usando-jquery-y-php/
	//https://programacion.net/articulo/como_devolver_datos_en_formato_json_desde_un_script_php_utilizando_jquery_ajax_1834


?>