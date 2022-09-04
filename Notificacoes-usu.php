<!-- aqui o usuário vê novas notificações -->

<?php

      $email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Notificações | Bibliotecando</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">

 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
</head>
<body>
    
    				     <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
    
    <?php
    
          if($email == NULL){
          
          						 echo "
					<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>		 
					 <script>
				
				swal({

  title: 'Bibliotecando',
  text: 'Erro de login!',
  icon: 'error',
  button: 'ok',

}).then((willDelete) => {

       window.location.href= 'index.php';      

});			
				
				</script>";
		
          
      }
    
    $s = $_GET['s'];
    
    if($s == 1){
        echo "
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>
        <script>
			 swal('Bibliotecando', 'Conta desativada com sucesso!', 'success');	
				</script>";
    }
    
    
    ?>
				
				 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
       
       <script>
     $(function(){
    $(".button-collapse").sideNav(); });
    </script>


             <!--ver dados editados do pedido-->
				
				<?php
				include "control/conexao.php";
				
				$verpedido = $_GET['verpedido'];
				
				if($verpedido == 1){
				    
				  $titulo = $_GET['titulo'];
				  $l_codigo = $_GET['l_codigo'];
				  
				$usucodigo = $_GET['usu_codigo'];
				  
				  	
	        		$p_databusca = "SELECT p_databusca FROM `pedidos` WHERE `usu_codigo` LIKE '$usucodigo'";
		$p_databusca = mysqli_query($conexao, $p_databusca);
		$p_databusca = mysqli_fetch_assoc($p_databusca);
	$p_databusca = $p_databusca['p_databusca'];
	
	
		        		$p_horabusca = "SELECT p_horabusca FROM `pedidos` WHERE `usu_codigo` LIKE '$usucodigo'";
		$p_horabusca = mysqli_query($conexao, $p_horabusca);
		$p_horabusca = mysqli_fetch_assoc($p_horabusca);
	$p_horabusca = $p_horabusca['p_horabusca'];
	
		        		$p_dataE = "SELECT p_dataE FROM `pedidos` WHERE `usu_codigo` LIKE '$usucodigo'";
		$p_dataE = mysqli_query($conexao, $p_dataE);
		$p_dataE = mysqli_fetch_assoc($p_dataE);
	$p_dataE = $p_dataE['p_dataE'];
	
	

				
				?>
				<script>
				
				if(<?php echo $verpedido; ?> == 1){
				     

				    
          swal('Bibliotecando', 'Titulo: <?php echo $titulo; ?> \n Data da busca: <?php echo $p_databusca; ?> \n Hora da busca: <?php echo $p_horabusca; ?> \n Data de entrega: <?php echo $p_dataE; ?>', 'info');
				     
				}
				
				</script>
				
				<?php
				}
				
				?>
				
             <!--ver dados editados da doação-->
				
				<?php
				
				$verdoacao = $_GET['verdoacao'];
				
				if($verdoacao == 1){
				    
				  $titulo = $_GET['titulo'];
				  $d_codigo = $_GET['d_codigo'];
				  
				$usucodigo = $_GET['usu_codigo'];
				  
				  	
	        		$d_dataE= "SELECT d_dataE FROM `doacoes` WHERE `usu_codigo` LIKE '$usucodigo'";
		$d_dataE = mysqli_query($conexao, $d_dataE);
		$d_dataE = mysqli_fetch_assoc($d_dataE);
	$d_dataE = $d_dataE['d_dataE'];
	
	
		        		$d_horaE = "SELECT d_horaE FROM `doacoes` WHERE `usu_codigo` LIKE '$usucodigo'";
		$d_horaE = mysqli_query($conexao, $d_horaE);
		$d_horaE = mysqli_fetch_assoc($d_horaE);
	$d_horaE = $d_horaE['d_horaE'];
	

				
				?>
				<script>
				
				if(<?php echo $verdoacao; ?> == 1){
				     

				    
          swal('Bibliotecando', 'Titulo: <?php echo $titulo; ?> \n Data da entrega: <?php echo $d_dataE; ?> \n Hora da entrega: <?php echo $d_horaE; ?>', 'info');
				     
				}
				
				</script>
				
				<?php
				}
				
				?>   
				
<div class="tudo">
				
				<!-- menu -->
				
		<nav>
				  <div class="nav-wrapper">
				    <a href="#" class="brand-logo"> Bibliotecando </a>
				    <a href="#" data-activates="menu-mobile" class="button-collapse">
				    	 <i class="material-icons"> <img src="img/menu-burger2.png" width="10%"> </i>
				     </a>
		        
		        <ul class="side-nav" id="menu-mobile">    				
		        	 	 <li class="icon-usu"><img src="img/usuario.png" width="25%"></li>
		        	 <li><a href="cadastro_usuario_edite.php?email=<?php echo $email; ?>">Meu perfil</a></li>
		        		        	 
		        	 <li class="li_atual"><a href="#">Notificações</a></li>
		        	 
		        	 
		        	 <li><a href="site-usuario.php?email=<?php echo $email; ?>">Início</a></li>
		        
		        	 <li><a href="solicitarLivro.php?email=<?php echo $email; ?>">Livros</a></li>
		        	 <li><a href="doarLivro.php?email=<?php echo $email; ?>">Doações</a></li>
		        	 <li><a href="sobre-usuario.php?email=<?php echo $email; ?>">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
				
			
	
	    <?php 
	      include "control/conexao.php";
	    
	           		$usucodigo = "SELECT usu_codigo FROM `usuario` WHERE `usu_email` LIKE '$email'";
		$usucodigo = mysqli_query($conexao, $usucodigo);
		$usucodigo = mysqli_fetch_assoc($usucodigo);
	$usucodigo = $usucodigo['usu_codigo'];
	
	
	/*verificando se há notificações*/
	
		
	        		$usu_not2 = "SELECT usu_not2 FROM `usuario` WHERE `usu_codigo` LIKE '$usucodigo'";
		$usu_not2 = mysqli_query($conexao, $usu_not2);
		$usu_not2 = mysqli_fetch_assoc($usu_not2);
	$usu_not2 = $usu_not2['usu_not2'];
	
		
	        		$p_not2 = "SELECT p_not2 FROM `pedidos` WHERE `usu_codigo` LIKE '$usucodigo'";
		$p_not2 = mysqli_query($conexao, $p_not2);
		$p_not2 = mysqli_fetch_assoc($p_not2);
	$p_not2= $p_not2['p_not2'];
	
    	
	        		$d_not2 = "SELECT d_not2 FROM `doacoes` WHERE `usu_codigo` LIKE '$usucodigo'";
		$d_not2 = mysqli_query($conexao, $d_not2);
		$d_not2 = mysqli_fetch_assoc($d_not2);
	$d_not2 = $d_not2['d_not2'];
	
	

	if($usu_not2 == 1 || $p_not2 == 1 || $d_not2 == 1){
	    


	
	 
	 
	     /*mostrando as notificações*/
	     
	        		$usu_not2 = "SELECT usu_not2 FROM `usuario` WHERE `usu_codigo` LIKE '$usucodigo'";
		$usu_not2 = mysqli_query($conexao, $usu_not2);
		$usu_not2 = mysqli_fetch_assoc($usu_not2);
	$usu_not2= $usu_not2['usu_not2'];
	
	
	
	if($usu_not2 == 1){
	    
	    echo "		<div class='container-fluid LDtudo'>
				
						<div class='LivroT'>   
			   
			 
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>Seus Dados</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>Algum gerente alterou seus dados</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    	  			<a href='cadastro_usuario_edite.php?email=$email'>
									<button class=' btn mb-2 btn-block'>Visualizar</button>    		 	</a>
									
											    	  			<a href='control/fecharnot.php?usu_editado=1&usu_codigo=$usucodigo&email=$email'>
									<button class=' btn btn-outline-danger mb-2 btn-block'>Fechar</button>    		 	</a>
	
						    </div>
						  </div> 
										
						</div>
						
						  		</div>
						
		";
	    
	}
	
	
	
	
	/*Pedidos*/
	
			
			 					  	$sqlp = "Select p_codigo, p_horabusca, p_databusca, p_dataE, p_confirmado, p_editado, p_excluido, g_codigo, l_codigo, p_not2 from pedidos where usu_codigo like '$usucodigo'";
						 						
						 						$resultadop = mysqli_query($conexao, $sqlp);				 						while($linha = $resultadop -> fetch_assoc()){
						 					        		$l_titulo= "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '".$linha['l_codigo']."'";
		$l_titulo = mysqli_query($conexao, $l_titulo);
		$l_titulo = mysqli_fetch_assoc($l_titulo);
	$l_titulo= $l_titulo['l_titulo'];
	
		        		$g_nome = "SELECT g_nome FROM `Gerente` WHERE `g_codigo` LIKE '".$linha['g_codigo']."'";
		$g_nome = mysqli_query($conexao, $g_nome);
		$g_nome = mysqli_fetch_assoc($g_nome);
	$g_nome = $g_nome['g_nome'];
	

	  if($linha['p_not2'] == 1){

		   echo "
		   
		   	     <div class='container-fluid LDtudo'>
				
						<div class='LivroT'>   
			   
			 
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>Pedido: $l_titulo</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>O gerente $g_nome alterou a data e hora para a busca do seu livro assim como a data da devolutiva</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    	  			<a href='Notificacoes-usu.php?email=$email&usu_codigo=$usucodigo&verpedido=1&titulo=$l_titulo&l_codigo=".$linha['l_codigo']."'>
									<button class=' btn mb-2 btn-block'>Visualizar</button>    		 	</a>
									
											    	  			<a href='control/fecharnot.php?p_editado=1&p_codigo=".$linha['p_codigo']."&email=$email'>
									<button class=' btn btn-outline-danger mb-2 btn-block'>Fechar</button>    		 	</a>
	
						    </div>
						  </div> 
										
						</div>
						
						  		</div>
						
		   
		   ";
			
			}			 						}
	

    /*Doacoes*/
    
    
	
			 					  	$sqld = "Select d_codigo, d_horaE, d_dataE, d_titulo, d_not2 from doacoes where usu_codigo like '$usucodigo'";
						 						
						 						$resultadod = mysqli_query($conexao, $sqld);				 						while($linha = $resultadod -> fetch_assoc()){
						 
	

	  if($linha['d_not2'] == 1){

		   echo "
		   
		   	     <div class='container-fluid LDtudo'>
				
						<div class='LivroT'>   
			   
			 
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>Doação: ".$linha['d_titulo']."</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>Algum gerente alterou a data e a hora da entrega de sua doação</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    	  			<a href='Notificacoes-usu.php?email=$email&usu_codigo=$usucodigo&verdoacao=1&titulo=".$linha['d_titulo']."&d_codigo=".$linha['d_codigo']."'>
									<button class=' btn mb-2 btn-block'>Visualizar</button>    		 	</a>
									
											    	  			<a href='control/fecharnot.php?d_editado=1&d_codigo=".$linha['d_codigo']."&email=$email'>
									<button class=' btn btn-outline-danger mb-2 btn-block'>Fechar</button>    		 	</a>
	
						    </div>
						  </div> 
										
						</div>
						
						  		</div>
						
		   
		   ";
			
			}			 						}
	
	
	
		        		
	    
	}else{
	    
	    echo "<br><br><br><br><h2 style='text-align: center'>Não há notificações aqui</h2><br><br><br><br>";
	    
	}
	    
	    
	    
	    
	    ?>
	   
	


    	<!-- Rodapé -->
     	
	<footer class="page-footer cyan darken-4 text-center">
          <div class="container">  				
            <div class="row">
        				
              <div class="col l6 s12 rodape">
                <h5 class="white-text">Bibliotecando</h5>
                <p class="grey-text text-lighten-4">Ao abrir um livro, vislumbro um horizonte, onde a vista vai muito além do ponto.</p>
              </div>
              
              <div class="col l4 s12">             				
                <h5 class="white-text">Contatos</h5>
                <ul class="lirodape">
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/face.png"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/insta.png"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/twitter.png"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/snapchat.png"></a></li>                       
                </ul>
              </div>
          
              
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Todos os direitos reservados

            </div>
          </div>
        </footer>

  
</body>

</html>
