<?php

/**
* ANALIZAR LA FORMA DE CREAR ESTOS ARCHIVOS.. TODOS ADENTRO DE CONTROLLERS O CREAR SUBCARPETAS
*/
class Home extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index($name = '')
	{
		//$name viene de los parametros de la url Ej: home/index/$name
		echo 'i am in home/index';
		//esto lo hereda
		$this->model('User');
		$user->name = $name;

		$this->view('home/index', ['name' => $user->name]);
	}

}
?>