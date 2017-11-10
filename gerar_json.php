<?php
// Informa o navegador que o conteúdo do arquivo é do tipo JSON
// Se for usar esse código como exemplo,
// coloque ele num arquivo chamado gera-json.php
//$lista = array(
  //  array('nome' => 'Eduardo Monteiro', 'idade' => 27),
    //array('nome' => 'Suzana Medeiros', 'idade' => 20),
    //array('nome' => 'Mônica de Sousa', 'idade' => 25),
//);

	require_once('models/clientesModel.php');
	$client = new clientesModel();
			$client -> listCliente();
			$result = $client -> getConsulta();

			$arrayClientes = array();

			while($line = $result->fetch_assoc())
			{
				array_push($arrayClientes,$line);
			}

			header('Content-Type: application/json');
			print json_encode($arrayClientes);
 
// Imprime o array php em forma de JSON
?>