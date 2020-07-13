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


.button {
  background-color: #0091ea; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  
  width: 300px; 
  height: 100px;
}

	

	</style>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	
	
		
				<div align="center"> <img width = "385px" src="imagens/logo.png"> </div>
				
				<div class="header center  blue-text text-darken-2"><?PHP echo strtoupper($_SESSION['NOME']); ?> , SEU PEDIDO FOI EFETUADO COM SUCESSO </br> </br>ITENS DO PEDIDO</div>
				
				
				<div class="header center  red-text text-darken-2"> 
				
				
				
				
				
				
				
				
				
				
				<?php
							
					if ($_SESSION['Espeto'] != ""){ 
						echo$_SESSION['Espeto']; 
						echo "<br>";

						$sSql = "INSERT INTO `tbPedidosSub`(`codProduto` , `numPedido`) VALUES ('1','" .$_SESSION['PedidoNumero']. "')";
						mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
						$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
						$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
					}

					if ($_SESSION['rbtorta'] != ""){ 
						if ($_SESSION['rbtorta']=="morango"){
						
								echo "Torta de Morango"; 
								echo "<br>";
						
								$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('2','" .$_SESSION['PedidoNumero']. "')";
								mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
								$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
								$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
						}elseif ($_SESSION['rbtorta']=="limao"){
								echo "Torta de Lim&atilde;o"; 
								echo "<br>";
						
								$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('3','" .$_SESSION['PedidoNumero']. "')";
								mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
								$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
								$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
						}
					
					}
					
					

					if ($_SESSION['Sonho'] != ""){ 
						echo $_SESSION['Sonho']; //3
						echo "<br>";
						//insere registro na tabela
						$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('4','" .$_SESSION['PedidoNumero']. "')";
						mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
						$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
						$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
					}

					if ($_SESSION['Churros'] != ""){ 
							echo  $_SESSION['Churros']; 
							echo "<br>";

							$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('5','" .$_SESSION['PedidoNumero']. "')";
							mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
							$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
						$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
				
					}


					if ($_SESSION['CheeseCake'] != ""){ 
						echo $_SESSION['CheeseCake']; 
						echo "<br>";

						$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('6','" .$_SESSION['PedidoNumero']. "')";
						mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
						$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
						$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
					}
				
				
					if ($_SESSION['rbcupkake'] != ""){ 
						if ($_SESSION['rbcupkake']=="pacoca"){
						
								echo "Cupkake de Paçoca"; 
								echo "<br>";
						
								$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('7','" .$_SESSION['PedidoNumero']. "')";
								mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
								$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
								$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
						}elseif ($_SESSION['rbcupkake']=="chocolate"){
								echo "Cupkake de Chocolate";  
								echo "<br>";
						
								$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('8','" .$_SESSION['PedidoNumero']. "')";
								mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
								$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
								$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
						}
					
					}
					
					if ($_POST['rbrefri'] != ""){ 
						if ($_POST['rbrefri']=="guarana"){
						
								echo "Refrigerante - Guaraná"; 
								echo "<br>";
						
								$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('9','" .$_SESSION['PedidoNumero']. "')";
								mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
								$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
								$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
						}elseif ($_POST['rbrefri']=="coca"){
								echo "Refrigerante - Coca";  
								echo "<br>";
						
								$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('10','" .$_SESSION['PedidoNumero']. "')";
								mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
								$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
								$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
						}
					
					}
					
					if ($_POST['rbbrigadeiro'] != ""){ 
						if ($_POST['rbbrigadeiro']=="pacoca"){
						
								echo "Brigadeiro de Paçoca"; 
								echo "<br>";
						
								$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('11','" .$_SESSION['PedidoNumero']. "')";
								mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
								$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
								$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
						}elseif ($_POST['rbbrigadeiro']=="capuccino"){
								echo "Brigadeiro de Cappuccino";  
								echo "<br>";
						
								$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('12','" .$_SESSION['PedidoNumero']. "')";
								mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
								$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
								$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
						}
					
					}
					
					echo '<br>';
				echo '<div align="center">';	
					
					//echo '<p> <a class="btn btn-primary light-blue accent-4" href="/front/index.php" style=" width: 300px; height: 100px; font-size: 30px; ">Voltar</a>';
				
				echo '<a href="/front/index.php"><button class="button">VOLTAR</button></a>';


			echo '</div>';
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
		<br>
	
	  
    </body>
  </html>