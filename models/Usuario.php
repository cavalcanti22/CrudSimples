<?php 
	
	class Usuario extends Model
	{
		public function get_all_usuarios()
		{
			$q = "SELECT * FROM usuarios";
			return $this->execute($q);
		}

		public function insert_usuario($u)
		{
			$nome  = $u['nome'];
			$email = $u['email'];
			$cpf   = $u['cpf'];

			$q = "INSERT INTO usuarios (nome, email, cpf) VALUES ('$nome', '$email', '$cpf')";
			return $this->execute($q);
		}

		public function get_usuario($id)
		{
			$q = "SELECT * FROM usuarios WHERE id = '$id'";
			return mysqli_fetch_assoc($this->execute($q));
		}


		public function delete_usuario($id)
		{
			$q = "DELETE FROM usuarios  WHERE id = '$id' ";
			return $this->execute($q);
		}

		public function update_usuario($id, $u){

		$nome  = $u['nome'];
		$email = $u['email'];
		$cpf   = $u['cpf'];

		$q = "UPDATE usuarios SET nome = '$nome', email = '$email' , cpf = '$cpf' WHERE id = '$id'";
		return $this->execute($q);


	}
	}



 ?>