<!doctype html>
<html lang="pt-br">
  <head>
    <title>Aula 23/04</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php

	if(isset($_POST["button"]) == "POST"){
	
	$entrada1 = $_POST['t_con1'];
	$entrada2 = $_POST['t_con2'];
	$entrada3 = $_POST['t_con3'];
	
	$condicao1 = $entrada1 === 'true' ? true : false;
	$condicao2 = $entrada2 === 'true' ? true : false;
	$condicao3 = $entrada3 === 'true' ? true : false;

	 if ($condicao1 and $condicao2) {
	// somente se as duas forem verdadeiras
		echo 'Operador "and" Verdadeiro: ', var_dump($condicao1, $condicao2), '<br>';
	} else {
		echo 'Operador "and" Falso: ',var_dump($condicao1, $condicao2) ,'<br>';
	}

	 if ($condicao1 or $condicao2) {
	//Verdadeiro se qualquer uma das duas condições forem verdadeiras
	echo 'Operador "or" Verdadeiro: ', var_dump($condicao1, $condicao2), '<br>';
	} else {
	echo 'Operador "or" false: ', var_dump($condicao1, $condicao2), '<br>';
	}

	 if ($condicao1 xor $condicao3) {
	//somente se uma das duas forem verdadeiras
	echo 'Operador "xor" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
	} else {
	echo 'Operador "xor" false: ', var_dump($condicao1, $condicao3), '<br>';
	}

	 if (!$condicao2) {
	// Nega a condicao e entra aqui somente se negando for verdadeiro
	echo 'Operador "!" Verdadeiro: ', var_dump($condicao2), '<br>';
	} else {
	echo 'Operador "!" false: ', var_dump($condicao2), '<br>';
	}

	 if ($condicao1 && $condicao3) {
	// somente se as duas forem verdadeiras
	echo 'Operador "&&" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
	} else {
	echo 'Operador "&&" Falso: ', var_dump($condicao1, $condicao3), '<br>';
	}

	 if (!$condicao1 || !$condicao3) {
	//Verdadeiro se qualquer uma das duas condições forem verdadeiras
	echo 'Operador "||" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
	} else {
	echo 'Operador "||" false: ', var_dump($condicao1, $condicao3), '<br>';
	}
	
	}
?>

 <form action="index.php" method="post" style="width: fit-content; margin:0 auto;">
    <p>Informe o primeiro booleano</p>
    <input type="text" name="t_con1" placeholder="Digite aqui...">
	<p>Informe o segundo booleano</p>
    <input type="text" name="t_con2" placeholder="Digite aqui...">
	<p>Informe o terceiro booleano</p>
    <input type="text" name="t_con3" placeholder="Digite aqui...">

      
      
    </ul>
	<input class="btn btn-primary" type="submit" name="button">
    <!--<h3><?php echo "Resultado: $resultado1";?></h3>
	<h3><?php echo "Resultado: $resultado2";?></h3>
	<h3><?php echo "Resultado: $resultado3";?></h3>
	<h3><?php echo "Resultado: $resultado4";?></h3>
	<h3><?php echo "Resultado: $resultado5";?></h3>
	<h3><?php echo "Resultado: $resultado6";?></h3>
	<h3><?php echo "Resultado: $resultado7";?></h3>
	<h3><?php echo "Resultado: $resultado8";?></h3>
	<h3><?php echo "Resultado: $resultado9";?></h3> -->
  </form>

  

  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>