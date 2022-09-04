<?php

      $email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Agendar Livro | Bibliotecando</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">

 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>
<body>
				
				 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
       
       <script>
     $(function(){
    $(".button-collapse").sideNav(); });
    </script>

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
		        
		        		         	 <li><a href="Notificacoes-usu.php?email=<?php echo $email; ?>">Notificações</a></li>
		        
	
		        
		        	 <li><a href="site-usuario.php?email=<?php echo $email; ?>">Início</a></li>
		        	 <li class="li_atual"><a href="solicitarLivro.php?email=<?php echo $email; ?>">Livros</a></li>
		        	 <li><a href="doarLivro.php?email=<?php echo $email; ?>">Doações</a></li>
		        	 <li><a href="sobre-usuario.php?email=<?php echo $email; ?>">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
		
	
 
		<?php
		
		include "control/conexao.php";
		
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
		
		$Lcodigo = $_GET['lcodigo'];
		
		 if($Lcodigo != NULL){
		
		    	  $autor = "SELECT l_autor FROM `Livros` WHERE `l_codigo` LIKE '$Lcodigo'";
			  		$autor = mysqli_query($conexao, $autor);		  		 
            $autor = mysqli_fetch_assoc($autor);
	          $autor = $autor['l_autor'];
	
	          	  
	          $img = "SELECT l_imagem FROM `Livros` WHERE `l_codigo` LIKE '$Lcodigo'";
			  		$img = mysqli_query($conexao, $img);		  		 
            $img = mysqli_fetch_assoc($img);
	          $img = $img['l_imagem'];
	          
	            $genero = "SELECT l_genero FROM `Livros` WHERE `l_codigo` LIKE '$Lcodigo'";
			  		$genero = mysqli_query($conexao, $genero);		  		 
            $genero = mysqli_fetch_assoc($genero);
	          $genero = $genero['l_genero'];
	          
	          
	            $titulo = "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '$Lcodigo'";
			  		$titulo = mysqli_query($conexao, $titulo);		  		 
            $titulo = mysqli_fetch_assoc($titulo);
	          $titulo = $titulo['l_titulo'];
	          
	            $sinopse = "SELECT l_sinopse FROM `Livros` WHERE `l_codigo` LIKE '$Lcodigo'";
			  		$sinopse = mysqli_query($conexao, $sinopse);		  		 
            $sinopse = mysqli_fetch_assoc($sinopse);
	          $sinopse = $sinopse['l_sinopse'];
	          
	                  
        $anoA = date('Y');
        $mesA = date('m');
        $diaA = date('d')+1;
        
       $dia2A = date('d');


					echo "	<!-- Tudo da página de livro -->
		<div class='tudoPlivro'>
					
					<div class='Plivroimg'>
							<img src='$img' width='100%' height='300px'>		
					</div>
					
					<div class='Plivrotitulo'>
								<p>$titulo</p>
					</div>
					
					<div class='Plivrobotao' style='padding: 5% 20% 5% 20%'>
					
					
				<form class='formpedido' method='POST' action='control/solicitar-livro.php' name='formpedido'>
			
				 			   					  <input type='hidden' class='form-control mb-2' name='dataA' value='$anoA/$mesA/$dia2A' required>			   					  <input type='hidden' class='form-control mb-2' name='lcodigo' value='$Lcodigo' required>	  
			   					  <input type='hidden' class='form-control mb-2' name='usu_email' value='$email' required>
		
		 						  <label class='Label1'>Informe a data de busca do livro:</label>
					  
			   					  <input type='date' class='form-control mb-2' name='dataB' min='$anoA-$mesA-$dia' required>
			<br>
			    		 						  <label class='Label1'>Informe a hora de busca do livro:</label>
					  
			   					  <input type='time' class='form-control mb-2' name='horaB' required>
			   					<br>  
			   			 						  <label class='Label1'>Informe a data prevista para a entrega:</label>
					  
			   					  <input type='date' class='form-control mb-2' name='dataE' min='$anoA-$mesA-$dia' required>
		
		<br>
								<button type= 'submit' class='btn btn-block'>Agendar já</button>
								
								
								</form>
	   				
								
					</div>
					
				  <hr class='Plivrohr'>
				  
				  <div class='Plivroautor'>
				        <h5>Autor(es):</h5>				
				  			<p>$autor</p>	
				  </div>
				  
				  <div class='Plivrogenero'>
				  	  <h5>Gênero:</h5>
				  		<p>$genero</p>	
				  </div>
				  
				  <div class='Plivrodescricao'>
				  		<h5>Sinopse:</h5>
				  		<p>$sinopse</p>	
				  </div>
		
		</div>
		";
						
		}
		else if($Lcodigo == NULL && $email != NULL){
						 echo "
					<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>		 
						 <script>
				
				swal({

  title: 'Bibliotecando',
  text: 'Erro ao visualizar livro!',
  icon: 'error',
  button: 'ok',

}).then((willDelete) => {

       window.location.href= 'solicitarLivro.php?email=$email';      

});			
				
				</script>";
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
</div>

</body>
</html>
