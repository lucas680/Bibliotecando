<?php

      $email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Início | Bibliotecando</title>

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
    
    					<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> </script>
					
    
    				
				<!--quando o usuario agendar doacao-->
				
				<?php
				
				      if($email == NULL){
          
          						 echo "
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
				
				$ag = $_GET['ag'];
				
				if($ag == 1){
				     
				     echo "
				     <script>
				     
				  swal({

  title: 'Bibliotecando',
  text: 'Doação agendada com sucesso!',
  icon: 'success',
  button: 'ok',

}).then((willDelete) => {

        window.location.href = 'site-usuario.php?email=$email';       

});
				  
				        </script>";
				     
				}
				
				
				?>
				
								<!--quando o usuario editar-->
				
				<?php 
				$e = $_GET['e'];
				
				if($e == 1){
				     
				     echo "
				     <script>
				     
				  swal({

  title: 'Bibliotecando',
  text: 'Editado com sucesso!',
  icon: 'success',
  button: 'ok',

}).then((willDelete) => {

       window.location.href = 'site-usuario.php?email=$email';     

});
				  
				        </script>";
				     
				}
				
				
				?>
				
				
				<!--Verificar se o gerente editou, confirmou ou excluiu a doação-->
			<?php
		
		   include "control/conexao.php";
			
	    $usucodigo = "SELECT usu_codigo FROM `usuario` WHERE `usu_email` LIKE '$email'";
		$usucodigo = mysqli_query($conexao, $usucodigo);
		$usucodigo = mysqli_fetch_assoc($usucodigo);
	$usucodigo = $usucodigo['usu_codigo'];
			
			$sqlnot = "SELECT d_not, d_codigo, p_not, p_codigo, usu_not FROM  `doacoes`, `pedidos`, `usuario` WHERE (doacoes.`usu_codigo` LIKE '$usucodigo') AND (pedidos.`usu_codigo` LIKE '$usucodigo') AND (usuario.`usu_codigo` LIKE '$usucodigo')";					 			 $resultadonot = mysqli_query($conexao, $sqlnot);
						 						while($linhanot = $resultadonot -> fetch_assoc()){
						 	
			 $d_not = $linhanot['d_not'];
			 $dcodigo = $linhanot['d_codigo'];
			 
			 
			 $p_not = $linhanot['p_not'];
			 $pcodigo = $linhanot['p_codigo'];
			 
			 $usu_not = $linhanot['usu_not'];
			
			
			
							if($d_not == 1){
				
						$sqldc = "UPDATE `doacoes` SET `d_not` = '0' WHERE `d_codigo` = $dcodigo; ";
		
		mysqli_query($conexao, $sqldc);
		
				     echo "
				     <script>
				     
				  swal({

  title: 'Bibliotecando',
  text: 'Você tem novas notificações!',
  icon: 'success',
  button: 'ok',

});
			  
		        </script>";
				     
				}
			
			
										if($p_not == 1){
				
						$sqldc = "UPDATE `pedidos` SET `p_not` = '0' WHERE `p_codigo` = $pcodigo; ";
		
		mysqli_query($conexao, $sqldc);
		
				     echo "
				     <script>
				     
				  swal({

  title: 'Bibliotecando',
  text: 'Você tem novas notificações!',
  icon: 'success',
  button: 'ok',

});
			  
		        </script>";
				     
				}
			
											if($usu_not == 1){
				
						$sqldc = "UPDATE `usuario` SET `usu_not` = '0' WHERE `usu_codigo` = $usucodigo; ";
		
		mysqli_query($conexao, $sqldc);
		
				     echo "
				     <script>
				     
				  swal({

  title: 'Bibliotecando',
  text: 'Você tem novas notificações!',
  icon: 'success',
  button: 'ok',

});
			  
		        </script>";
				     
				}
			
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
		        
		        	 <li class="li_atual"><a href="#">Início</a></li>
		        	 <li><a href="solicitarLivro.php?email=<?php echo $email; ?>">Livros</a></li>
		        	 <li><a href="doarLivro.php?email=<?php echo $email; ?>">Doações</a></li>
		        	 <li><a href="sobre-usuario.php?email=<?php echo $email; ?>">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
				
      	<!-- bem vindo usuario -->
				
 <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a href="sobre.php?email=<?php echo $email; ?>" class="btn waves-effect white grey-text darken-text-2">Sobre nós</a>
    </div>
    
    <div class="carousel-item carosel_img1 white-text" href="#one!">
      <h2>Leia mais</h2>
      <p class="white-text">Um monte de livros, um mar de oportunidades. Este é o nosso lema, acreditamos que só a educação liberta e aqui, você pode aprender muito.</p>
    </div>
    
    <div class="carousel-item carosel_img2 white-text" href="#two!">
      <h2>Nossos serviços</h2>
      <p class="white-text">Solicite online um livro entre diversos tipos de gêneros.</p>
    </div>
    
    <div class="carousel-item carosel_img3 white-text" href="#three!">
      <h2>Faça um doação</h2>
      <p class="white-text">Dôe-nos livros que não utiliza e ganhe bônus para poder solicitar ainda mais.</p>
    </div>
    
    <div class="carousel-item carosel_img4 white-text" href="#four!">
      <h2>Visite-nos</h2>
      <p class="white-text">Conheça nossa biblioteca, leia a vontade e amplie seus horizontes.</p>
    </div>
  </div>
	  
	  <!-- solicitar livro -->
	  
	   <div class="selecoes">
	   		 <div><p>Solicitar livro</p></div><br>
	  			<p>Solicite um ebook para ler onde e quando quiser.</p>
	  							
	  		<section class="container-fluid">
	  						
	  						<a href="solicitarLivro.php?email=<?php echo $email; ?>" style="text-decoration:none"><button class="btn btn-outline-info mb-2 btn-block">Solicitar</button></a>	
	  							
	  	  </section>
	  			
	   </div>
	   
	   
	    <div>
	   				<img src="img/estante3.jpg" width="100%" height="200px">
	   </div>
	
	   
	   <!-- doar livro -->
	   
	   <div class="selecoes2">
	   		 <div><p>Dôe-nos um livro</p></div><br>
	  			<p>Ajude o Bibliotecando a dispersar o conhecimento doando para nossa coleção ebooks que você não utiliza mais.</p>
	  							
	  		<section class="container-fluid">
	  						
	  						<a href="doarLivro.php?email=<?php echo $email; ?>" style="text-decoration:none"><button class="btn btn-outline-info mb-2 btn-block">Fazer doação</button></a>	
	  							
	  	  </section>
	  			
	   </div>
	   
	   
	    <div>
	   				<img src="img/livros5.jpg" width="100%" height="200px">
	   </div>
	
	   
	   
	
			

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
	
	 <!-- script carousel -->
		 <script>
    				
  // Or with jQuery

$(document).ready(function(){
    $('.carousel').carousel({
    	fullWidth: true,
      indicators: true			
    });
  });
    </script>

			
		</div>
  
</body>

</html>
