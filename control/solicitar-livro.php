<?php
include "conexao.php";

if(isset($_POST['lcodigo'])){
            $lcodigo = $_POST['lcodigo'];
            $usuemail = $_POST['usu_email'];
            
            $dataA = $_POST['dataA'];
			$dataB = $_POST['dataB'];
			$horaB = $_POST['horaB'];
			$dataE = $_POST['dataE'];

                   	 	$usucodigo = "SELECT usu_codigo FROM `usuario` WHERE `usu_email` LIKE '$usuemail'";
		$usucodigo = mysqli_query($conexao, $usucodigo);
		$usucodigo = mysqli_fetch_assoc($usucodigo);
	$usucodigo = $usucodigo['usu_codigo'];
	
	    
	    
					$sql = "INSERT INTO `pedidos` (`p_data`, `p_horabusca`, `p_databusca`, `p_dataE`, `p_confEntrega`, `p_confirmado`, `p_editado`, `p_excluido`, `p_not`, `p_not2`, `usu_codigo`, `l_codigo`) VALUES ('$dataA', '$horaB', '$dataB', '$dataE', '0', '0', '0', '0', '0', '0', '$usucodigo', '$lcodigo');";
					
					mysqli_query($conexao, $sql);
					
					echo "<script>
						
						location.href='../solicitarLivro.php?s=1&email=$usuemail';
						
		</script>";
			
				
}



?>
