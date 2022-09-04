<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bibliotecando</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">

     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<body>
    
    <?php
    
    $s = $_GET['s'];
    
    if($s == 2){
       
    echo "
    	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
				<script>
				
						swal({

  title: 'Bibliotecando',
  text: 'Email e ou senha incorretos!',
  icon: 'error',
  button: 'ok',

}).then((willDelete) => {

       window.location.href = 'index.php';     

});
						
				</script>";
				
    }
    else if($s == 1){
        echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
				<script>
swal({
  title: 'Bibliotecando',
  text: 'Senha incorreta!',
  icon: 'error',
  buttons: ['Cancelar', 'Recuperar senha'],
  dangerMode: true,
})
.then((willDelete) => {

 if (willDelete) {

 swal({

  title: 'Bibliotecando',
  text: 'Sua recuperação não pode ser realizada no momento, estamos trabalhando em atualizações!',
  icon: 'warning',
  button: 'ok',

      }).then((willDelete) => {

        window.location.href = 'index.php';
        
                           });

}else{
    window.location.href = 'index.php'; 
    
}

});	
				</script>";
    }
				
				?>
								
				<!--quando o usuario excluir-->
				
				<?php 
				$ex = $_GET['ex'];
				
				if($ex == 1){
				     
				     echo "
				     <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
				     <script>
				     
				  swal({

  title: 'Bibliotecando',
  text: 'Excluido com sucesso!',
  icon: 'success',
  button: 'ok',

}).then((willDelete) => {

        window.location.href = 'index.php';       

});
				  
				        </script>";
				     
				}
				
				
				?>
				
				
								
				<!--quando o usuario se cadastrar-->
				
				<?php 
				$usucad = $_GET['usucad'];
				
				if($usucad == 1){
				     
				     echo "
				     <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
				     <script>
				     
				  swal({

  title: 'Bibliotecando',
  text: 'Cadastro realizado com sucesso!',
  icon: 'success',
  button: 'ok',

}).then((willDelete) => {

        window.location.href = 'index.php';       

});
				  
				        </script>";
				     
				}
				
				
				?>
                    
                    
                                            
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
		        	 <li class="li_atual"><a href="#">Início</a></li>
		        	  <li><a href="login.php">Login</a></li>
		        	 <li><a href="cadastro.php">Fazer Cadastro</a></li>
		        	 <li><a href="sobre.php">Sobre</a></li>
		        </ul>
		    </div>
		    
		</nav>

		 
		 
	  <!-- bem vindo -->
	  
        <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a href="sobre.php" class="btn waves-effect white grey-text darken-text-2">Sobre nós</a>
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
	  
	  
				<!-- form -->
	
    <section class="container-fluid espacos" id="cadastrar">
				<div class="text-center">
								
						<div class="container espacos">
							 <div class="row">
									<div class="col-lg-2">
										  <!-- imagem -->		
									</div>	
									<div class="col-lg-10 espacos">
						
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
	
	
	 <div>
	   				<img src="img/estante3.jpg" width="100%" height="200px">
	   </div>
	
	<!-- seleções em destaque -->
	
	   <div class="selecoes">
	   		 <div><p>Seleções em destaque</p></div><br>
	  			<p>Bibliotecando criou uma vasta coleção de livros, periódicos e uma crescente coleção digital. Nosso repositório também inclui materiais exclusivos sobre assuntos específicos que podem ser acessados mediante solicitação especial.</p>
	  			<br>
	  		
	   </div>
	   
	   <div>
	   				<img src="img/estante2.jpg" width="100%" height="200px">
	   </div>
	   
	   <div class="selecoes2">
	   		 <div><p>Clássicos literários</p></div> <br>
	  			<p>Estamos constantemente atualizando os títulos de nossos(as) Clássicos literários, levando em conta as recomendações de nossa equipe e comunidade de leitores. Explore e descubra a sua próxima grande leitura neste acervo.</p>
	  			<br>
	  		
	   </div>
	   
	    <div>
	   				<img src="img/bibli1.jpg" width="100%" height="200px">
	   </div>
	   
	   <div class="selecoes">
	   		 <div><p>Dôe-nos um livro</p></div> <br>
	  			<p>Se você possui um livro que não utiliza mais, poderá dôa-lo para o Bibliotecando e ajudar a dispersar o conhecimento.</p>
	  			<br>
	  		
	   </div>
	   
	    <div>
	   				<img src="img/bibli2.jpg" width="100%" height="200px">
	   </div>
	   
	   <div class="selecoes2">
	   		 <div><p>Contando histórias</p></div> <br>
	  			<p>Faça o cadastro, solicite um livro e busque-o no dia e horário selecionado. Nossa equipe se orgulha de dizer que você terá acesso gratuito a uma vasta coleção bibliográfica.</p>
	  			<br>
	  		
	   </div>
	   
	   
	   <div class="horarios">
	   		 <div><p>Horário de funcionamento</p></div> <br>
	  			<p>Seg - Sex: 8h - 17h</p><br>
	  		
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
