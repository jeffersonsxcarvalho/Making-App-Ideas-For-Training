<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/hello.png">
	<title>Conversor de Decimal para Binário</title>
</head>
<body>




	<div class="fundo">
		<h1>App Ideas 1.2 - Decimal para Binário</h1>

		<div class="input">

			<form action="" method="post" id="form">
			<input type="number" id="bin" class="bin" name="bin" value="<?php if(isset($_POST['bin'])){ echo $_POST['bin'];} ?>"><br>
			<input type="submit" class="submit" name="submit" value="Enviar">
		</form>
		</div>

		<?php
			$bin = 0;			
			
			if(isset($_POST['bin'])){
				$bin = $_POST['bin'];				
			}

			if($bin == 0){
				$binar = '0';
			}else{
				$binar = '';
			}

			$quociente = $bin;
			

			while ($quociente > 0){
				$binar .= $quociente%2;
				//$quociente -= 0.1;
				$quociente = floor($quociente/2);
				

			}
				
				


			



		?>



		<div class="numero">
			<p class="decimal">
				<?php
					
					if(isset($binar)){
						echo strrev($binar);
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