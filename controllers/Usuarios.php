<?php 

class Usuarios 
{
	private $usuario;

	function __construct()
	{
		require 'models/Usuario.php';
		$this->usuario = new Usuario;
	}

	public function index()
	{
		$data['layout']     = 'views/layouts/usuarios';
		$data['view']       = 'views/usuarios/index';
		$data['titulo']     = 'LISTA DE USUÁRIOS';
		$data['usuarios']   = $this->usuario->get_all_usuarios();
		return $data;
	}

	public function getOne($id){
		$data['layout']  = 'views/layouts/usuarios';
		$data['view'] 	 = 'views/usuarios/one';
		$data['titulo']  = 'PERFIL DO USUÁRIO';
		$data['usuario'] = $this->usuario->get_usuario($id);
		return $data;

	}

	public function add()
	{
		$data['layout']     = 'views/layouts/usuarios';
		$data['view']       = 'views/usuarios/add';
		$data['titulo']     = 'CADASTRAR USUÁRIO';

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$u['nome']	 = $_POST['nome'];
			$u['email']  = $_POST['email'];
			$u['cpf'] 	 = $_POST['cpf'];
			if (!$this->usuario->insert_usuario($u)) {
				$data['layout']     = 'views/layouts/usuarios';
				$data['view']       = 'views/usuarios/add';
				$data['titulo']     = 'CADASTRAR USUÁRIO';
				$_SESSION['feedback'] = "<h6 class='alert alert-danger' role='alert'>ERRO!</h6>";
			}
			else{
				$_SESSION['feedback'] = "<h6 class='alert alert-success' role='alert'>USUÁRIO ADICIONADO COM SUCESSO!</h6>";
			}

			header('Location: http://localhost/projetoImagine/');
		}

		return $data;
	}

	public function edit($id)
	{
		$data['layout']     = 'views/layouts/usuarios';
		$data['view']       = 'views/usuarios/edit';
		$data['titulo']     = 'EDITAR USUÁRIO';
		$data['usuario']	= $this->usuario->get_usuario($id);

		if ($data['usuario'])
		{
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$u['nome']	 = $_POST['nome'];
				$u['email']  = $_POST['email'];
				$u['cpf'] 	 = $_POST['cpf'];
				if (!$this->usuario->update_usuario($id,$u)) {
					die('erro');
				}
				else
				{
					$_SESSION['feedback'] = "<h6 class='alert alert-info' role='alert'>USUÁRIO ATUALIZADO COM SUCESSO!</h6>";
				}
				header('Location: http://localhost/projetoImagine/');
			}
		}
		else{
			die('NÃO EXISTE');
		}

		return $data;
	}

	public function remove($id)
	{
		$data['usuario'] = $this->usuario->get_usuario($id);

		if ($data['usuario']) {
			
			if (!$this->usuario->delete_usuario($id)) {
				
				die('ERRO ');

			}
			else
			{
				$_SESSION['feedback'] = "<h6 class='alert alert-danger' role='alert'>USUÁRIO REMOVIDO COM SUCESSO!</h6>";
			}

			header('Location: http://localhost/projetoImagine/');

		}
		else{
		 	die('USUÁRIO NÃO EXISTE');
		}

		return $data;
	}
}
?>