<?php 
    include "conexao.php";
    
    
    
    if(isset($_GET['p_codigo'])){
      $gemail = $_GET['gemail'];
      $codigo = $_GET['p_codigo'];
      
      
      $sql = "UPDATE `pedidos` SET `p_excluido` = '1' WHERE `p_codigo` = $codigo;";
      
      mysqli_query($conexao, $sql);
      
      		
		echo "<script>
		
						location.href='../lista-pedidos.php?s=1&email=$gemail';
						
		</script>";
		
        
    }


?>