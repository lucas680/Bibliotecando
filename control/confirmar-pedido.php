<?php 
    include "conexao.php";
    
    
    
    if(isset($_GET['p_codigo'])){
      $gemail = $_GET['gemail'];
      $codigo = $_GET['p_codigo'];
      
            		$gcodigo = "SELECT g_codigo FROM `Gerente` WHERE `g_email` LIKE '$gemail'";
		$gcodigo = mysqli_query($conexao, $gcodigo);
		$gcodigo = mysqli_fetch_assoc($gcodigo);
	$gcodigo = $gcodigo['g_codigo'];
	
	
      
      $sql = "UPDATE `pedidos` SET `p_confirmado` = '1', g_codigo = '$gcodigo' WHERE `pedidos`.`p_codigo` = $codigo;";
      
      mysqli_query($conexao, $sql);
      
      		
		echo "<script>
		
						location.href='../lista-pedidos.php?c=1&email=$gemail';
						
		</script>";
		
        
    }


?>