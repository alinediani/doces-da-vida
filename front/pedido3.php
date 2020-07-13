<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
}

include('config.php');

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

    <body>
	
	<style>
	html {
		
		font-family: Tahoma; 
		font-size: 40px;
		  background-color: #0d47a1;
		  margin-left: 20px;
		  
		  
		  
}
	</style>
	

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	 
	
		
				<div align="center"> <img width = "385px" src="imagens/logo.png"> </div>
				
				
				
		<div class="header left  red-text text-darken-2"> 
				
				
				<?php
						$_SESSION['rbcupkake'] =  $_POST['rbcupkake'];
						$_SESSION['rbtorta']  = $_POST['rbtorta'];
				
			
				echo 'Selecione o Refrigerante<br>';
				echo '<div align="left">';
				echo '<form action="pedido4.php" name ="refri" method="post" >';			
		
			
					echo '<label>';
							echo '<input name="rbrefri" type="radio" value="coca" checked />';
							echo '<span>Coca Cola</span>';
					echo '</label>';
 
			
				echo '<br>';
				
					echo '<label>';
							echo '<input name="rbrefri" type="radio" value="guarana" />';
							echo '<span>Guaran&aacute;</span>';
					echo '</label>';
 
			
			echo '<hr>';
			
		echo 'Qual Sabor do Brigadeiro?<br>';
			echo '<label>';
							echo '<input name="rbbrigadeiro" type="radio" value="capuccino" checked/>';
							echo '<span>Cappuccino</span>';
					echo '</label>';
 
				echo '<br>';
 
			
					echo '<label>';
							echo '<input name="rbbrigadeiro" type="radio" value="pacoca" />';
							echo '<span>Pa&ccedil;oca</span>';
					echo '</label>';
 
			//	echo '</p>';
 
					echo '</div>';
			
			
			
			
			
			
			
		echo '<div align="center">';
			//echo '<p> <a class="btn btn-primary light-blue accent-4" href="/front/pedido2.php" style="width: 400px; height: 100px; font-size: 30px;">Voltar</a>';
			echo '<p>	<button class="btn btn-primary light-blue accent-4" type="submit" name="action" style="width: 400px; height: 100px; font-size: 30px; ">Continuar</button></p>';
		echo '</div>';
				
				
				echo '</form>';
	
				
				
				
				
				
				
				
				
				
				
				
				
			
			
			

?>







			
				
		</div>		
				
 	 	
	 
	 
	  	
	  
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