<?php

      $email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sobre Nós | Bibliotecando</title>

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
		        	 <li><a href="site-gerente.php?email=<?php echo $email; ?>">Início</a></li>
		        	 <li><a href="cadastrar-livro.php?email=<?php echo $email; ?>">Adicionar livros</a></li>
		        	 <li><a href="lista-doacoes.php?email=<?php echo $email; ?>">Doações dos usuários</a></li>
		        	<li><a href="lista-usuarios.php?email=<?php echo $email; ?>">Lista dos usuários</a></li>
		       		        		        		        	 		        	 <li><a href="lista-pedidos.php?email=<?php echo $email; ?>">Lista de Pedidos</a></li>
		        			     <li><a href="lista-pendentes.php?email=<?php echo $email; ?>">Entregas Pendentes</a></li>
		         
		        
		        	 <li class="li_atual"><a href="#">Sobre</a></li>
		        	 <li><a href="index.php">Sair</a></li>
		        </ul>
		    </div>
		    
		</nav>
			
			<!-- sobre -->	
				
		  <div class="sobre">
		  	
		  	 	<h2>Sobre o Bibliotecando</h2>	
		  	 	
		  	 	<p>Bibliotecando oferece acesso a livros e informação a Canindé desde 2021. A cada dia, construímos essa tradição, melhorando o acesso e ampliando nosso acervo. Mas somos mais do que apenas um fornecedor de materiais gratuitos.</p>
		  	 	<p>Nossa Biblioteca pública reúne muitos recursos e muitas oportunidades para que todos possam desfrutar. Estamos sempre trabalhando para atender às necessidades de nossos clientes e permanecemos comprometidos em desempenhar um papel fundamental na comunidade. Para saber mais, entre em contato.</p>
		  				
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
			
		</div>
  
</body>

</html>
