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

	$n1 = $_POST['t_num1'];
	$n2 = $_POST['t_num2'];
	$n3 = $_POST['t_num3'];

	//Testa se $n1 é igual a $n2
	if ($n1 == $n2) {
		$resultado1 = "Sim, $n1 == $n2";
	} else {
		$resultado1 = "Não, $n1 == $n2";
	}

	//Testa se $n1 é diferente de $n2
	if ($n1 <> $n2) {
		$resultado2 = "Sim, $n1 <> $n2";
	} else {
		$resultado2 = "Nao, $n1 <> $n2";
	}

	//Testa se $n1 é diferente de $n2
	if ($n1 != $n2) {
		$resultado3 = "Sim, $n1 != $n2";
	} else {
		$resultado3 = "Nao, $n1 != $n2";
	}



	//Testa se $n1 é menor que $n2
	if ($n1 < $n2) {
		$resultado4 = "Sim, $n1 < $n2";
	} else {
		$resultado4 = "Nao, $n1 < $n2";
	}



	//Testa se $n3 é maior que $n1
	if ($n3 > $n1) {
		$resultado5 = "Sim, $n3 > $n1";
	} else {
		$resultado5 = "Sim, $n3 > $n1";
	}



	//Testa se $n1 é menor ou igual a $n2
	if ($n1 <= $n2) {
		$resultado6 = "Sim, $n1 <= $n2";
	} else {
		$resultado6 = "Sim, $n1 <= $n2";
	}



	//Testa se $n1 é maior ou igual a $n2
	if ($n1 >= $n2) {
		$resultado7 = "Sim, $n1 >= $n2";
	} else {
		$resultado7 = "Sim, $n1 >= $n2";
	}



	//Testa se $n1 é idêntico a $n2
	if ($n3 === $n2) {
		$resultado8 = "Sim, $n3 === $n2";
	} else {
		$resultado8 = "Sim, $n3 === $n2";
	}



	//Testa se $n1 não é idêntico a $n2
	if ($n1 !== $n2) {
		$resultado9 = "Sim, $n1 !== $n2";
	} else {
		$resultado9 = "Sim, $n1 !== $n2";
	}
	
	}
?>

 <form action="index.php" method="post" style="width: fit-content; margin:0 auto;">
    <p>Informe o primeiro número</p>
    <input type="text" name="t_num1" placeholder="Digite aqui...">
	<p>Informe o segundo número</p>
    <input type="text" name="t_num2" placeholder="Digite aqui...">
	<p>Informe o terceiro número</p>
    <input type="text" name="t_num3" placeholder="Digite aqui...">

      
      
    </ul>
	<input class="btn btn-primary" type="submit" name="button">
    <h3><?php echo "Resultado: $resultado1";?></h3>
	<h3><?php echo "Resultado: $resultado2";?></h3>
	<h3><?php echo "Resultado: $resultado3";?></h3>
	<h3><?php echo "Resultado: $resultado4";?></h3>
	<h3><?php echo "Resultado: $resultado5";?></h3>
	<h3><?php echo "Resultado: $resultado6";?></h3>
	<h3><?php echo "Resultado: $resultado7";?></h3>
	<h3><?php echo "Resultado: $resultado8";?></h3>
	<h3><?php echo "Resultado: $resultado9";?></h3>
  </form>

  

  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>