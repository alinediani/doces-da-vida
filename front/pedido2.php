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
				
				//Cadastra o Pedido
			$sSql = "INSERT INTO `tbPedidos`( `nome` , `categoria`,`encerrado`) VALUES ('" .$_SESSION['NOME']. "','" .$_SESSION['CATEGORIA']. "','0')";
			mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
				$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
				$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
				//$linha = mysqli_fetch_assoc($result); // transforma os dados em um array
		// Fim Cadastra o Pedido

			// Caputura o numero do Pedido Cadastrado ou seja ulitmo registro
					$sSql =("SELECT numPedido FROM tbPedidos ORDER BY numPedido DESC LIMIT 1");
						mysqli_select_db($conexao,DB) or die("Database error"); // seleciona a base de dados 
							$query = sprintf($sSql); // cria a instrução SQL que vai selecionar os dados
							$result = mysqli_query($conexao,$query) or die(mysqli_error()); // executa a query
							$linha = mysqli_fetch_assoc($result); // transforma os dados em um array
					$_SESSION['PedidoNumero'] = $linha['numPedido'] ;//cria a variavel de sessão
				
					
					
			// Fim Caputura o numero do Pedido Cadastrado ou seja ulitmo registro
				
				
			
$vaiprofim = 0;				
				
				
if ($_POST['Espeto'] != ""){ 
	$_SESSION['Espeto']= $_POST['Espeto']; //1
	$vaiprofim++;
}


if ($_POST['Sonho'] != ""){ 
	$_SESSION['Sonho'] = $_POST['Sonho']; //3
	$vaiprofim++;
}

if ($_POST['Churros'] != ""){ 
	$_SESSION['Churros'] = $_POST['Churros']; //4
	$vaiprofim++;
}

if ($_POST['CheeseCake'] != ""){ 
	$_SESSION['CheeseCake'] = $_POST['CheeseCake']; //5
	$vaiprofim++;
}

$radioselecionado=0;
if (($_POST['Torta'] != "") and ($_POST['CupCake'] != ""))
	{
			$radioselecionado++;
		
			echo '<div align="left">';
			echo 'Qual o Recheio do CupCake?<br>';
			
			echo '<form action="pedido3.php" name ="cupkake" method="post" >';			
		
			
					echo '<label>';
							echo '<input name="rbcupkake" type="radio" value="pacoca" checked />';
							echo '<span>Recheio de Pa&ccedil;oca</span>';
					echo '</label>';
 
			
				echo '<br>';
				
					echo '<label>';
							echo '<input name="rbcupkake" type="radio" value="chocolate" />';
							echo '<span>Recheio de Chocolate</span>';
					echo '</label>';
 
			
			echo '<hr>';
			
		echo 'Qual Sabor da torta?<br>';
			echo '<label>';
							echo '<input name="rbtorta" type="radio" value="morango" checked/>';
							echo '<span>Morango</span>';
					echo '</label>';
 
				echo '<br>';
 
			
					echo '<label>';
							echo '<input name="rbtorta" type="radio" value="limao" />';
							echo '<span>Lim&atilde;o</span>';
					echo '</label>';
 
				echo '</p>';
 
					echo '</div>';
			
			
			
						
			echo '<div align="center">';
			//echo '<p> <a class="btn btn-primary light-blue accent-4" href="/front/pedido2.php" style="width: 400px; height: 100px; font-size: 30px;">Voltar</a>';
			echo '<p>	<button class="btn btn-primary light-blue accent-4" type="submit" name="action" style="width: 400px; height: 100px; font-size: 30px; vertical-align: middle;
">Continuar</button></p>';
		echo '</div>';
			
			
					
				
		echo '</form>';
	
	
	
}elseif ($_POST['CupCake'] != ""){ 
	$_SESSION['CupCake'] =$_POST['CupCake']; //6
	$radioselecionado++;
	echo '<div class="container" align="left" >';
			echo 'Qual o Recheio do CupCake?';
			echo '<form action="pedido3.php" name ="cupkake" method="post" >';			
		
			
					echo '<label>';
							echo '<input name="rbcupkake" type="radio" value="pacoca" checked/>';
							echo '<span>Recheio de Pa&ccedil;oca</span>';
					echo '</label>';
 
			
				echo '<br>';
				
					echo '<label>';
							echo '<input name="rbcupkake" type="radio" value="chocolate" />';
							echo '<span>Recheio de Chocolate</span>';
					echo '</label>';
 
						
			echo '<div align="center">';
			//echo '<p> <a class="btn btn-primary light-blue accent-4" href="/front/pedido2.php" style="width: 400px; height: 100px; font-size: 30px;">Voltar</a>';
			echo '	<button class="btn btn-primary light-blue accent-4" type="submit" name="action" style="width: 400px; height: 100px; font-size: 30px; vertical-align: middle;
">Continuar</button></p>';
		echo '</div>';
			
				
				
				echo '</form>';
 
		echo '</div>';
}elseif ($_POST['Torta'] != ""){ 
	$_SESSION['Torta'] = $_POST['Torta'];
	
		$radioselecionado++;
		echo '<div class="container" align="left" >';
			echo 'Qual o Sabor da torta?';
				echo '<form action="pedido3.php" name ="cupkake" method="post" >';
				
					echo '<label>';
							echo '<input name="rbtorta" type="radio" value="morango" checked/>';
							echo '<span>Morango</span>';
					echo '</label>';
 
				echo '<br>';
 
			
					echo '<label>';
							echo '<input name="rbtorta" type="radio" value="limao" />';
							echo '<span>Lim&atilde;o</span>';
					echo '</label>';
 
				echo '</p>';
 
					
			echo '<div align="center">';
			//echo '<p> <a class="btn btn-primary light-blue accent-4" href="/front/pedido2.php" style="width: 400px; height: 100px; font-size: 30px;">Voltar</a>';
			echo '	<button class="btn btn-primary light-blue accent-4" type="submit" name="action" style="width: 400px; height: 100px; font-size: 30px; vertical-align: middle;
">Continuar</button></p>';
		echo '</div>';
				echo '</form>';
 
		echo '</div>';
		
		
	
		
		

}


		if (($radioselecionado==0) and ($vaiprofim>0)){
			header('location:pedido3.php');
			
		}
	
		

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