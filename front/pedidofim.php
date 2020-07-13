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

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  <div class = "card-panel blue darken-4">  
	
		
				<div align="center"> <img width = "185px" src="imagens/logo.png"> </div>
				
				
				<div class="header center  blue-text text-darken-2"><?PHP echo strtoupper($_SESSION['NOME']); ?> , SEU PEDIDO FOI EFETUADO COM SUCESSO </br> </br>ITENS DO PEDIDO</div>
				
				<div class="header center  red-text text-darken-2"> 
				
				
				<?php
					$contador=0;
				//Validar só pode ter 4 itens
				if ($_POST['Espeto'] != ""){
					 $contador++;
				}
				if($_POST['Torta'] != ""){ 
					 $contador++;
				}
				if($_POST['Sonho'] != ""){ 
					 $contador++;
				}
				if($_POST['Churros'] != ""){ 
					 $contador++;
				}
				if($_POST['CheeseCake'] != ""){ 
					 $contador++;
				}
				if($_POST['CupCake'] != ""){ 
					$contador++;
				}
		
					if (($contador == 0) or ($contador > 4)){ //se tiver mais que 4 itens volta
							header('location:index.php?validauser=1');
					
				}	
				
				
				
if ($_POST['Espeto'] != ""){ 
echo $_POST['Espeto']; //1
echo "<br>";

//insere registro na tabela
 		
		$sSql = "INSERT INTO `tbPedidosSub`(`codProduto` , `numPedido`) VALUES ('1','" .$_SESSION['PedidoNumero']. "')";
	
	
		mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
		$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
		$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
				
}

if ($_POST['Torta'] != ""){ 
echo $_POST['Torta']; //2
echo "<br>";

//insere registro na tabela
 		$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('2','" .$_SESSION['PedidoNumero']. "')";
		mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
		$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
		$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
				


}


if ($_POST['Sonho'] != ""){ 
echo $_POST['Sonho']; //3
echo "<br>";
		//insere registro na tabela
 		$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('3','" .$_SESSION['PedidoNumero']. "')";
		mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
		$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
		$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
				

}

if ($_POST['Churros'] != ""){ 
echo $_POST['Churros']; //4
echo "<br>";

//insere registro na tabela
 		$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('4','" .$_SESSION['PedidoNumero']. "')";
		mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
		$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
		$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
				



}

if ($_POST['CheeseCake'] != ""){ 
echo $_POST['CheeseCake']; //5
echo "<br>";

//insere registro na tabela
 		$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('5','" .$_SESSION['PedidoNumero']. "')";
		mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
		$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
		$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
				

}

if ($_POST['CupCake'] != ""){ 
echo $_POST['CupCake']; //6
echo "<br>";

//insere registro na tabela
 		$sSql = "INSERT INTO `tbPedidosSub`( `codProduto` , `numPedido`) VALUES ('6','" .$_SESSION['PedidoNumero']. "')";
		mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
		$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
		$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
				

}



?>

				 <p><a class="btn btn-primary light-blue accent-4" href="/front/index.php">Voltar</a></p>
				
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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	</div>
	  
    </body>
  </html>