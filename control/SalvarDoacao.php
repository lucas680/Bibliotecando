<?php
include "conexao.php";

if(isset($_POST['titulo'])){
			$titulo = $_POST['titulo'];
			$autor = $_POST['autor'];
			$genero = $_POST['genero'];
			$quantidade = $_POST['quantidade'];
			$data = $_POST['data'];
			$hora = $_POST['hora'];
			$email = $_POST['email'];
			
			
			$CodigoBanco = "SELECT usu_codigo FROM `usuario` WHERE `usu_email` LIKE '$email'";
			$CodigoB = mysqli_query($conexao, $CodigoBanco);
			$CodigoB = mysqli_fetch_assoc($CodigoB);
	$CodigoB = $CodigoB['usu_codigo'];
			
	    
					$sql = "INSERT INTO `doacoes` (`d_dataE`, `d_horaE`, `d_titulo`, `d_autor`, `d_genero`, `d_quantidade`, `usu_codigo`, 	`d_confirmado`, 	`d_editado`, 	`d_excluido`, 	`d_not`, 	`d_not2`) VALUES ('$data', '$hora', '$titulo', '$autor', '$genero', '$quantidade', '$CodigoB', '0', '0', '0', '0', '0');";
					
					mysqli_query($conexao, $sql);
					
					echo "<script>
						
						location.href='../site-usuario.php?ag=1&email=$email';
						
		</script>";
			
				
}



?>
