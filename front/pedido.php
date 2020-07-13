<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
}

include('config.php');
$_SESSION['NOME']= $_POST['nomecliente'];
$_SESSION['CATEGORIA']= $_POST['categoria'];

if ($_SESSION['CONT']==0){

	if (empty($_SESSION['NOME'])){
	
	header('location:index.php?validauser=2');

  	exit();
					
	}	
}

			$_SESSION['Espeto'] = "";
			$_SESSION['Torta']  = "";
			$_SESSION['Sonho'] = "";
			$_SESSION['Churros'] = "";
			$_SESSION['CheeseCake'] = "";
			$_SESSION['CupCake'] = "";

$_SESSION['CONT']=1;

	
			



			
      



?>


   <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
	
	<style>
	html {
		
		font-family: Tahoma; 
		font-size: 40px;
	  background-color: #0d47a1;
	  margin-left: 20px;
}
	</style>

    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  
	    
		
				<div align="center"> <img width = "385px" src="imagens/logo.png"> </div>
						
				<div class="header center  blue-text text-darken-2">Faça Seu Pedido</div>
				
				
				
				
				
				
	
 

				
				
				
				
				
				
			
				
 	 		
		<form action="pedido2.php" name ="form1" method="post">
	  		
			
			
				 
      
				<div class="input-field col s6">
					  
					  <p>
						<label>
							
							<input type="checkbox" name="Espeto" Value="Espeto" class="filled-in" />
							<span>Espeto</span>
					 	</label>
					 </p>
					
				
				</div>  
				
				
					  <p>
						<label>
							<input type="checkbox" name="Torta" Value="Torta" class="filled-in"  />
							<span>Torta</span>
					 	</label>
					 </p>
			
					 <p>
						<label>
							<input type="checkbox" name="Sonho" Value="Sonho" class="filled-in"  />
							<span>Sonho</span>
					 	</label>
					 </p>
				
				
					<p>
						<label>
							<input type="checkbox" name="Churros" Value="Churros" class="filled-in" />
							<span>Churros</span>
					 	</label>
					 </p>
					 
					 
					  <p>
						<label>
							<input type="checkbox" name="CheeseCake" Value="CheeseCake" class="filled-in"  />
							<span>CheeseCake</span>
					 	</label>
					 </p>
					 
					  <p>
						<label>
							<input type="checkbox" name="CupCake" Value="CupCake" class="filled-in"  />
							<span>CupCake</span>
					 	</label>
					  </p>
				
				
        
				
			<div align="center">	
      				<div class ="input-field col s6">

						<button class="light-blue accent-4 btn-large waves-effect waves-dark center-align" type="submit" name="action" style="width: 400px; height: 100px; font-size: 30px;" >  Continuar </button>
					</div> 
			</div> 	
     	
						
			
		</form>
	  
	  <div class="header center  blue-text text-darken-2" style="font-size: 18px;">Todos os pedidos acompanham brigadeiro e bebida</div>
	
	  
	 <script>
			document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('select');
			var instances = M.FormSelect.init(elems, options);
			});

			// Or with jQuery

			$(document).ready(function(){
				$('select').formSelect();
			});
  	</script>

	
	
	

	  
    </body>
  </html>