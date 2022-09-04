<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Fazer Login | Bibliotecando</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
     

      
       <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>    

 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<body>
				

                                            
       <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
       
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
		        	 <li><a href="index.php">Início</a></li>
		        	  <li class="li_atual"><a href="#">Login</a></li>
		        	  <li><a href="cadastro.php">Fazer Cadastro</a></li>
		        	 <li><a href="sobre.php">Sobre</a></li>
		        </ul>
		    </div>
		    
		</nav>
	   
	  
	  
				<!-- form -->
	
    <section class="container-fluid espacos_login2" id="cadastrar">
				<div class="text-center">
								
						<div class="container espacos_login">
							 <div class="row">
									<div class="col-lg-2">
										  
	   				<img src="img/usuario.png" width="50%">
	   
										  		
									</div>	
									<div class="col-lg-10 espacos_login">
						
					 	<form method="POST" action="control/login_verifica.php">
					 					
						<input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
						<input type="password" class="form-control mb-2" name="senha" placeholder="Senha" required pattern="^.{8,12}$" minlength="8" maxlength="12" title="8 a 12 caracteres">
					 
						<button type="submit" class="btn btn-info mb-2 btn-block boato">
										Entrar
						</button>
						
								
				</form>
				<br>
						
						<a href="cadastro.php" style="text-decoration:none"><button class="btn btn-outline-info mb-2 btn-block">Fazer cadastro</button></a>
						
	
				
				
		    </div>
		   </div>
		  </div>
		 </div>
		
	</section>		
	   
	
	
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
