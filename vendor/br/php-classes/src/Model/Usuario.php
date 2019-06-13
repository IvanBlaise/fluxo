<?php 

namespace Fsolutions\Model;

use \Fsolutions\Model;
use \Fsolutions\DB\Sql;


define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

class Usuario extends Model {

	

	

	public static function login($login, $password):Usuario
	{

		$sql = new Sql();



		$results = $sql->select("SELECT * FROM USR WHERE USR_CODE = :LOGIN", array(
			":LOGIN"=>$login
		));

		if (count($results) === 0) {
			throw new \Exception("Usuário inexistente ou senha inválida.");
		}

		$data = $results[0];
		

		

		if (password_verify($password, $data["SENHA"]) === true) {

			$user = new Usuario();

			

			$user->setData($data);

			$_SESSION[Usuario::SESSION] = $user->getValues();

			return $user;

		} else {

			throw new \Exception("Usuário inexistente ou senha inválida.");

		}

	}

	public static function logout()
	{

		$_SESSION[Usuario::SESSION] = NULL;

	}

	
	



}

 ?>