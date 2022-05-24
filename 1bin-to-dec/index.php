<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/hello.png">
	<title>Conversor de Binário para Decimal</title>
</head>
<body>




	<div class="fundo">
		<h1>App Ideas 1 - Binário para Decimal</h1>

		<div class="input">

			<form action="" method="post" id="form">
			<input type="text" id="bin" class="bin" name="bin" value="<?php if(isset($_POST['bin'])){ echo $_POST['bin'];} ?>"><br>
			<input type="submit" class="submit" name="submit" value="Enviar">
		</form>
		</div>

		<?php
			$bin = '';
			if(isset($_POST['bin'])){
				$bin = $_POST['bin'];				
			}

			$decimal = 0;

			for($i = 1; $i <= strlen($bin); $i++){
				$binar = $bin[strlen($bin)-$i];
				

				if($binar <> 0 && $binar <> 1){
					$decimal = 'Número não é binário!';
					break;
				}

				$decimal += $binar * 2**($i-1);

				

			}

		?>



		<div class="numero">
			<p class="decimal">
				<?php
					
					if(isset($decimal)){
						echo $decimal;
					}else{
						echo 'Escreva teu número decimal acima';
					}
					
				?>
			</p>
		</div>
	</div>



<!--<script>
     const form = document.querySelector('#form');

     form.addEventListener('submit', function(event) {

          event.preventDefault();
          	
     });
</script>-->

</body>
</html>