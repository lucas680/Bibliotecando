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
		        	 <li class="li_atual"><a href="#">Início</a></li>
		        	 <li><a href="cadastrar-livro.php?email=<?php echo $email; ?>">Adicionar livros</a></li>
		        	 <li><a href="lista-doacoes.php?email=<?php echo $email; ?>">Doações dos usuários</a></li>
		        	 <li><a href="lista-usuarios.php?email=<?php echo $email; ?>">Lista dos usuários</a></li>
		        	
		        		        	 		        	 <li><a href="lista-pedidos.php?email=<?php echo $email; ?>">Lista de Pedidos</a></li>
		        			     <li><a href="lista-pendentes.php?email=<?php echo $email; ?>">Entregas Pendentes</a></li>
		        	 	
		        	 <li><a href="sobre-gerente.php?email=<?php echo $email; ?>">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
				
      	<!-- bem vindo gerente -->
 <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a href="sobre-gerente.php?email=<?php echo $email; ?>" class="btn waves-effect white grey-text darken-text-2">Sobre nós</a>
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
	  
	  <!-- adicionar livro -->
	  
	   <div class="selecoes">
	   		 <div><p>Adicionar livro</p></div><br>
	  			<p>Adicione novos ebooks à vasta coleção do Bibliotecando.</p>
	  							
	  		<section class="container-fluid">
	  						
	  						<a href="cadastrar-livro.php?email=<?php echo $email; ?>" style="text-decoration:none"><button class="btn btn-outline-info mb-2 btn-block">Adicionar</button></a>	
	  							
	  	  </section>
	  			
	   </div>
	   
	   
	    <div>
	   				<img src="img/estante4.jpg" width="100%" height="200px">
	   </div>
	
	   
	   <!-- confirmar pedidos de livros -->
	   
	   <div class="selecoes2">
	   		 <div><p>Novos pedidos</p></div><br>
	  			<p>Confirme os pedidos de pessoas que desejam pegar um livro.</p>
	  							
	  		<section class="container-fluid">
	  						
	  						<a href="lista-pedidos.php?email=<?php echo $email; ?>" style="text-decoration:none"><button class="btn btn-outline-info mb-2 btn-block">Ver pedidos</button></a>	
	  							
	  	  </section>
	  			
	   </div>
	   
	   
	    <div>
	   				<img src="img/livros6.jpg" width="100%" height="200px">
	   </div>
	
	   
	   
	   <!-- ver entregas pendentes -->
			
			<div class="selecoes">
	   		 <div><p>Entregas pendentes</p></div><br>
	  			<p>Veja devolutivas que ainda não foram realizadas pelos usuários e confirme os ebooks que já foram entregues.</p>
	  							
	  		<section class="container-fluid">
	  						
	  						<a href="lista-pendentes.php?email=<?php echo $email; ?>" style="text-decoration:none"><button class="btn btn-outline-info mb-2 btn-block">Ver pendentes</button></a>	
	  							
	  	  </section>
	  			
	   </div>
	   
	   
	    <div>
	   				<img src="img/livros4.jpg" width="100%" height="200px">
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
