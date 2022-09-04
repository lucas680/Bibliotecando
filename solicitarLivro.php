<?php

      $email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Livros | Bibliotecando</title>

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
				
						swal({

  title: 'Bibliotecando',
  text: 'Solicitação realizada com sucesso!',
  icon: 'success',
  button: 'ok',

}).then((willDelete) => {

});
						
				</script>";
				
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
		        
		        		         	 <li><a href="Notificacoes-usu.php?email=<?php echo $email; ?>">Notificações</a></li>
		        
	
		        
		        	 <li><a href="site-usuario.php?email=<?php echo $email; ?>">Início</a></li>
		        	 <li class="li_atual"><a href="#">Livros</a></li>
		        	 <li><a href="doarLivro.php?email=<?php echo $email; ?>">Doações</a></li>
		        	 <li><a href="sobre-usuario.php?email=<?php echo $email; ?>">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>

       <!-- pesquisar -->
       <div class="pesqEfrase">
		<section class="container-fluid espacospesq" id="pesquisar">
				<div class="text-center">
						<div class="container">
						 <div class="row justify-content-center mb-2">
						 	 <form method="POST" action="solicitarLivro.php?email=<?php echo $email; ?>">
						 	 				
						 	<div id="divBusca1">
      <input type="text" id="txtBusca1" name="pesquisa" placeholder="Buscar..."/>
     
      <input type="image" id="btnBusca" src="img/lupa2.png" width="10%">
    
     
     </div>
						 				</form>
						 </div>	
						 <div class="row">
						 		<!-- essa div adiciona espaço -->
						 </div>									 								 										   	
	    </div>						
</section>
				
				<!-- frase de alocação -->
							
		   	<div class="categoria">
							<p>Veja os livros em destaque ou pesquise por gênero, título ou autor.</p>
			  </div>
			  
      </div>
			
			
			<!-- php para pesquisar os livros -->	
	  
	    
	    <?php 
	    
	    include 'control/conexao.php';

		
		$id1 = "SELECT MAX(l_codigo) FROM `Livros`";
		$ultimoID = mysqli_query($conexao, $id1);
		 $ultimoID = mysqli_fetch_assoc($ultimoID);
	$ultimoID = $ultimoID['MAX(l_codigo)'];
		
		
		$img1 = "SELECT l_imagem FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
 	  $titulo1 = "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
	  $autor1 = "SELECT l_autor FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
			
		
		$img1 = mysqli_query($conexao, $img1);
		$titulo1 = mysqli_query($conexao, $titulo1);
		$autor1 = mysqli_query($conexao, $autor1);
		
	$img1 = mysqli_fetch_assoc($img1);
	$img1 = $img1['l_imagem'];

    $titulo1 = mysqli_fetch_assoc($titulo1);
	$titulo1 = $titulo1['l_titulo'];

    $autor1 = mysqli_fetch_assoc($autor1);
	$autor1 = $autor1['l_autor'];
	
	$id1 = $ultimoID;
	
	
		
		$ultimoID = $ultimoID - 1;
		
		$img2 = "SELECT l_imagem FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
 	  $titulo2 = "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
	  $autor2 = "SELECT l_autor FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
			
		
		$img2 = mysqli_query($conexao, $img2);
		$titulo2 = mysqli_query($conexao, $titulo2);
		$autor2 = mysqli_query($conexao, $autor2);
		
		$img2 = mysqli_fetch_assoc($img2);
	$img2 = $img2['l_imagem'];

$titulo2 = mysqli_fetch_assoc($titulo2);
	$titulo2 = $titulo2['l_titulo'];

$autor2 = mysqli_fetch_assoc($autor2);
	$autor2 = $autor2['l_autor'];
	
	$id2 = $ultimoID;
		
		
		
		$ultimoID = $ultimoID - 1;
		
		$img3 = "SELECT l_imagem FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
 	  $titulo3 = "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
	  $autor3 = "SELECT l_autor FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
			
		
		$img3 = mysqli_query($conexao, $img3);
		$titulo3 = mysqli_query($conexao, $titulo3);
		$autor3 = mysqli_query($conexao, $autor3);
	
	$img3 = mysqli_fetch_assoc($img3);
	$img3 = $img3['l_imagem'];

$titulo3 = mysqli_fetch_assoc($titulo3);
	$titulo3 = $titulo3['l_titulo'];

$autor3 = mysqli_fetch_assoc($autor3);
	$autor3 = $autor3['l_autor'];
	
		$id3 = $ultimoID;
	
		
		
		$ultimoID = $ultimoID - 1;
		
		$img4 = "SELECT l_imagem FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
 	  $titulo4 = "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
	  $autor4 = "SELECT l_autor FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
			
		
		$img4 = mysqli_query($conexao, $img4);
		$titulo4 = mysqli_query($conexao, $titulo4);
		$autor4 = mysqli_query($conexao, $autor4);
	
	$img4 = mysqli_fetch_assoc($img4);
	$img4 = $img4['l_imagem'];

$titulo4 = mysqli_fetch_assoc($titulo4);
	$titulo4 = $titulo4['l_titulo'];

$autor4 = mysqli_fetch_assoc($autor4);
	$autor4 = $autor4['l_autor'];
	
		$id4 = $ultimoID;
	
		
		
		$ultimoID = $ultimoID - 1;
		
		$img5 = "SELECT l_imagem FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
 	  $titulo5 = "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
	  $autor5 = "SELECT l_autor FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
			
		
		$img5 = mysqli_query($conexao, $img5);
		$titulo5 = mysqli_query($conexao, $titulo5);
		$autor5 = mysqli_query($conexao, $autor5);
	
	$img5 = mysqli_fetch_assoc($img5);
	$img5 = $img5['l_imagem'];

$titulo5 = mysqli_fetch_assoc($titulo5);
	$titulo5 = $titulo5['l_titulo'];

$autor5 = mysqli_fetch_assoc($autor5);
	$autor5 = $autor5['l_autor'];
	
		$id5 = $ultimoID;
	
		
		
		$ultimoID = $ultimoID - 1;
		
		$img6 = "SELECT l_imagem FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
 	  $titulo6 = "SELECT l_titulo FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
	  $autor6 = "SELECT l_autor FROM `Livros` WHERE `l_codigo` LIKE '$ultimoID'";
			
		
		$img6 = mysqli_query($conexao, $img6);
		$titulo6 = mysqli_query($conexao, $titulo6);
		$autor6 = mysqli_query($conexao, $autor6);
	  
	  $img6 = mysqli_fetch_assoc($img6);
	$img6 = $img6['l_imagem'];

$titulo6 = mysqli_fetch_assoc($titulo6);
	$titulo6 = $titulo6['l_titulo'];

$autor6 = mysqli_fetch_assoc($autor6);
	$autor6 = $autor6['l_autor'];
	
		$id6 = $ultimoID;
	  
	  
	  if($_POST['pesquisa'] != NULL){
					   $pesquisa = $_POST['pesquisa'];
				
				$sql = "SELECT l_imagem, l_titulo, l_autor, l_codigo FROM `Livros` WHERE l_titulo LIKE '%$pesquisa%' OR l_autor LIKE '%$pesquisa%' OR l_genero LIKE '%$pesquisa%'";
				
				$resultado = mysqli_query($conexao, $sql);
				
				echo "<div class='container-fluid LDtudo'>";
						 						while($linha = $resultado -> fetch_assoc()){
						 echo "
						 
                 <!-- livro1 -->
						<div class='LivroT'>   
			   
			            <!-- imagem -->
										<img src='".$linha['l_imagem']."' width='100%' height='200px'>
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p> ".$linha['l_titulo']." </p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p> ".$linha['l_autor']." </p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    				<a href='agendar.php?lcodigo=".$linha['l_codigo']."&email=$email'>
						    				<button class=' btn mb-2 btn-block'>Agendar já</button>
						    				</a>
						    </div>
						  </div> 
										
						</div>
						 
						 ";
						 
						 }
						 
						 
						 echo "</div>";
						 						
		}else{
	  				echo "
	  		
	    
				
				<!-- Livros em destaque -->
				
		<div class='container-fluid LDtudo'>
													
                 <!-- livro1 -->
						<div class='LivroT'>   
			   
			            <!-- imagem -->
										<img src='".$img1."' width='100%' height='200px'>
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>".$titulo1."</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>".$autor1."</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    				<a href='agendar.php?lcodigo=$id1&email=$email'>
						    				<button class=' btn mb-2 btn-block'>Agendar já</button>
						    				</a>
						    </div>
						  </div> 
										
						</div>
						
						
						    <!-- livro2 -->
						<div class='LivroT'>   
			   
			            <!-- imagem -->
										<img src='".$img2."' width='100%' height='200px'>
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>".$titulo2."</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>".$autor2."</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    				<a href='agendar.php?lcodigo=$id2&email=$email'>
						    				<button class=' btn mb-2 btn-block'>Agendar já</button>
						    				</a>
						    </div>
						  </div> 
										
						</div>
						
						    <!-- livro3 -->
						<div class='LivroT'>   
			   
			            <!-- imagem -->
										<img src='".$img3."' width='100%' height='200px'>
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>".$titulo3."</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>".$autor3."</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    				<a href='agendar.php?lcodigo=$id3&email=$email'>
						    				<button class=' btn mb-2 btn-block'>Agendar já</button>
						    				</a>
						    </div>
						  </div> 
										
						</div>
						
						
						    <!-- livro4 -->
						<div class='LivroT'>   
			   
			            <!-- imagem -->
										<img src='".$img4."' width='100%' height='200px'>
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>".$titulo4."</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>".$autor4."</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    				<a href='agendar.php?lcodigo=$id4&email=$email'>
						    				<button class=' btn mb-2 btn-block'>Agendar já</button>
						    				</a>
						    </div>
						  </div> 
										
						</div>
						
						
						    <!-- livro5 -->
						<div class='LivroT'>   
			   
			            <!-- imagem -->
										<img src='".$img5."' width='100%' height='200px'>
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>".$titulo5."</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>".$autor5."</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    				<a href='agendar.php?lcodigo=$id5&email=$email'>
						    				<button class=' btn mb-2 btn-block'>Agendar já</button>
						    				</a>
						    </div>
						  </div> 
										
						</div>
						
						
						    <!-- livro6 -->
						<div class='LivroT'>   
			   
			            <!-- imagem -->
										<img src='".$img6."' width='100%' height='200px'>
						
						<div class='container LivroT2'>
										
							    <!-- titulo -->
						  <div class='Ltitulo'>
								<p>".$titulo6."</p>		
						  </div>			
							<hr noshade='noshade'>
							
							    <!-- autor -->  
							  <div class='Lautor'>
							  				<p>".$autor6."</p>
							  </div>	
							  		
						      <!-- botao agendar -->
						    <div class='Lbotao'>
						    				<a href='agendar.php?lcodigo=$id6&email=$email'>
						    				<button class=' btn mb-2 btn-block'>Agendar já</button>
						    				</a>
						    </div>
						  </div> 
										
						</div>
								
		</div>
		
				
	  				";
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