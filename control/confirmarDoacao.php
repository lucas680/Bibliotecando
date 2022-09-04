<?php 
    include "conexao.php";
    
    
    
    if(isset($_GET['d_codigo'])){
      $gemail = $_GET['gemail'];
      $codigo = $_GET['d_codigo'];
      
      
      $sql = "UPDATE `doacoes` SET `d_confirmado` = '1' WHERE `doacoes`.`d_codigo` = $codigo;";
      
      mysqli_query($conexao, $sql);
      
      		
		echo "<script>
		
						location.href='../lista-doacoes.php?c=1&email=$gemail';
						
		</script>";
		
        
    }


?>