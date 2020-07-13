


<!DOCTYPE html>

<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();
}
$_SESSION['CONT']=0;

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
				<div class="header center  blue-text text-lighten-3">Bem-Vindo ao Doces da Vida</div>		
			
				<div class="header center  blue-text text-lighten-3">Faça Seu Cadastro</div>
				
				
		

 	 
	  	<form action="pedido.php" name ="form1" method="post" >
	  		
			
			
				 
	
				<div class="input-field col s6 ">
					
				  <div class="header left  blue-text text-darken-2" style="font-size: 30px;">Informe o Seu Nome</div>
					<input  id="nomecliente" type="text" name="nomecliente"  style="font-family: Tahoma; font-size: 30px;"/>
					
					
					<label for="nomecliente"></label>
					
				</div>  
	
				
					<div class="input-field col s6">
					 <label></label>
							<select class="browser-default" name="categoria">
								
								<option value="Aluno PTE">Aluno PTE</option>
								<option value="Admin Uirapuru">Admin Uirapuru</option>
								
							</select>
				</div> 
      				
			
			
		
			
		<div align="center">
			<div class ="input-field col s6">
				<button class="light-blue accent-4 btn-large waves-effect waves-dark center-align" type="submit" name="action" style="width: 400px; height: 100px; font-size: 30px;"> Continuar  </button>
			</div> 
		</div>
     		 
						
			
		</form>

	  
	  
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<?php if(isset($_GET['validauser'])){ 
			if ($_GET['validauser']=='0'){
		?>  
				<script>
				
			
		
				</script> 
		<?php 
			}elseif($_GET['validauser']=='1'){ //se for usuário invalido
		?>
 
			<script>
						
				M.toast({html: 'O pedido n&atilde;o pode estar vazio ou conter mais de 4 itens', classes: 'rounded'});
		
			</script> 
 
 <?php 
			}elseif($_GET['validauser']=='2'){ //Cadastro concluido com sucesso
	 ?>
 
			<script>
			
		
				M.toast({html: 'Nome em Branco', classes: 'rounded'});
		
			</script> 
 
 
  <?php 
			}elseif($_GET['validauser']=='3'){ //Erro!! Cadastro Não Concluido
	 ?>
 
			<script>
				
		
				M.toast({html: 'Erro!! Cadastro Não Concluido', classes: 'rounded'});
		
			</script> 
 
<?php 	 
	 }	 //fim validauser=0
 }else{ //se nao retornar valor no get inicia o modal somente?>
		 <script>
		//Init Modal
		$(document).ready(function(){
			$('.modal').modal();
		});
		 </script>
 <?php } ?>
 

	

	
	

	
	
	
	
	
	
	
	
	  
    </body>
  </html>