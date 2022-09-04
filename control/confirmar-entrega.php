<?php 
    include "conexao.php";
    
    
    
    if(isset($_GET['p_codigo'])){
      $gemail = $_GET['gemail'];
      $codigo = $_GET['p_codigo'];
      
      
      $sql = "UPDATE `pedidos` SET `p_confEntrega` = '1' WHERE `pedidos`.`p_codigo` = $codigo;";
      
      mysqli_query($conexao, $sql);
      
      		
		echo "<script>
		
						location.href='../lista-pendentes.php?c=1&email=$gemail';
						
		</script>";
		
        
    }


?>