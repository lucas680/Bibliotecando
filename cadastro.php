<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Novo Cadastro | Bibliotecando</title>

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
    
    <!--confirmar senhas-->
   <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	 
    <script>

function confsenha(){
    var senha = formcad.senha.value;
    var confsenha = formcad.confirmsenha.value;
    if(senha != confsenha){
        
        swal('Bibliotecando', 'As senhas são diferentes!', 'error');

        return false;
    }
}
        
    </script>
    
       <!-- iniciar jquery select-->
 
 
    
    <script>
      $(document).ready(function(){
    $('select').material_select();
  });  
    </script>
    
    				
				<!--quando o usuario digitar email existente-->
				
				<?php 
				$usucad = $_GET['usucad'];
				
				if($usucad == 2){
				     
				     echo "
				     <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'> 
				</script>	
								<script>
swal({
  title: 'Bibliotecando',
  text: 'Este email já foi registrado!',
  icon: 'error',
  buttons: ['Cancelar', 'Reativar conta'],
  dangerMode: true,
}).then((willDelete) => {

 if (willDelete) {

 swal('Bibliotecando', {
      text: 'Sua recuperação não pode ser realizada, estamos trabalhando para corrigir o problema.',
          icon: 'warning',

});
}

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
		        	 <li><a href="index.php">Início</a></li>
		        	  <li><a href="login.php">Login</a></li>
		        	 <li class="li_atual"><a href="cadastro.php">Fazer Cadastro</a></li>
		        	 <li><a href="sobre.php">Sobre</a></li>
		        </ul>
		    </div>
		    
		</nav>
				
				
				<!-- form -->
	<section class="container-fluid espacos-cad" id="cadastrar">
				<div class="text-center">
						<h3 class="cad">cadastre-se</h3>
						<div class="container espacos-cad2">
							 <div class="row">
									<div class="col-lg-2">
											<img src="img/icon-cad.png" width="30%">		
									</div>	
									<div class="col-lg-10 espacos-cad2">
				
				<form name="formcad" method="POST" action="control/salvar_usuario.php">

						<input type="text" class="form-control mb-2" name="nome" placeholder="Nome" required>
					  <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
				    
				    	<input type="text" class="form-control mb-2" name="escola" placeholder="Escola" required>
				    	
	<select class="selectcad input-field mb-2" name="serie" required>
				    					<option value="" disabled selected>Série</option>
				    					<option value="1">1° ano</option>
				    					<option value="2">2° ano</option>
				    					<option value="3">3° ano</option>	    					
				    	</select>
			
				    	<select class="selectcad input-field mb-2 icons" name="curso" required>
				    					<option value="" disabled selected>Curso</option>
				    					<option value="informática" data-icon="img/informatica.png">Informática</option>
				    					<option value="enfermagem" data-icon="img/enfermagem.png">Enfermagem</option>
				    					<option value="finanças" data-icon="img/financas.png">Finanças</option>
				    					<option value="agropecuária" data-icon="img/agropecuaria.png">Agropecuária</option>
				    	</select>
				    	
           <input type="text" class="form-control mb-2" name="cidade" placeholder="Cidade" required>
            <input type="text" class="form-control mb-2" name="bairro" placeholder="Bairro" required>
             <input type="text" class="form-control mb-2" name="rua" placeholder="Rua" required>
              <input type="number" class="form-control mb-2" name="numeroCasa" placeholder="Número da casa" required>
               <input type="password" class="form-control mb-2" name="senha" placeholder="Senha" required pattern="^.{8,12}$" title="8 a 12 caracteres" minlength="8" maxlength="12">
				
				               <input type="password" class="form-control mb-2" name="confirmsenha" placeholder="Confirmar senha" required pattern="^.{8,12}$" title="8 a 12 caracteres" minlength="8" maxlength="12">
			
						
						<button type="submit" class="btn btn-info mb-2 btn-block" onclick="return confsenha()">
										cadastrar
						</button>
						
								
				</form>
				
				
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
