 
<?php
 include 'conexao.php';


        $email = $_GET['email'];
		
		$usu_editado = $_GET['usu_editado'];
		$p_editado = $_GET['p_editado'];
		$d_editado = $_GET['d_editado'];
		
		
		if($usu_editado == 1){
		  $usu_codigo = $_GET['usu_codigo'];
		  
		 		$sql = "UPDATE `usuario` SET usu_not2 = 0 WHERE `usu_codigo` = $usu_codigo;";
		
		mysqli_query($conexao, $sql);
		
		echo "<script>
		
						location.href='../Notificacoes-usu.php?email=$email';
						
		</script>";
		 
		  
		    
		}
		else if($p_editado == 1){
		    $p_codigo = $_GET['p_codigo'];
		    
		    		$sql = "UPDATE `pedidos` SET p_not2 = 0 WHERE `p_codigo` = $p_codigo;";
		
		mysqli_query($conexao, $sql);
		
		echo "<script>
		
						location.href='../Notificacoes-usu.php?email=$email';
						
		</script>";
		
		    
		}
		else if($d_editado == 1){
		    $d_codigo = $_GET['d_codigo'];
		    
		    		$sql = "UPDATE `doacoes` SET d_not2 = 0 WHERE `d_codigo` = $d_codigo;";
		
		mysqli_query($conexao, $sql);
		
		echo "<script>
		
						location.href='../Notificacoes-usu.php?email=$email';
						
		</script>";
		
		    
		}else{
		    echo "erro ao fechar notificação";
		}
		


?>
