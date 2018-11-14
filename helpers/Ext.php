<?php 
	class Ext 
	{
		function nome_ext($nome,$arquivo)
		{
			$path = $_FILES[$arquivo]['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			return $nome.'.'.$ext;
		}
	}
 ?>