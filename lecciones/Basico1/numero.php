<!DOCTYPE html>
<html>
<head>
	<title>Números en inglés</title>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		<style>
	header {
		background-color: #2c3e50;
		padding: 10px;
		text-align: center; /* Centrar contenido */
	}


	header img {
		display: block;
		margin: 0 auto;
		width:20%;
		max-width: 100%;
	}
   
	h1 {
		color:#b7fffa;
		font-size: 36px;
		margin: 0;
		padding-top: 20px;
	}

	body {
		background: rgb(28,38,138);
		background: linear-gradient(235deg, rgba(28,38,138,1) 59%, rgba(162,158,158,1) 100%);
		color: white;
		font-family: Arial, sans-serif;
		font-size: 16px;
		line-height: 1.5;
		margin: 0;
		padding: 0;
		text-align: center;
	}

	button {
		background-color: #3366cc;
		border: none;
		border-radius: 3px;
		color: #ffffff;
		cursor: pointer;
		font-size: 16px;
		padding: 10px 20px;
		transition: background-color 0.3s ease;
	}

	button:hover {
		background-color: #1f4e96;
	}

	/* Alinear el botón de envío al centro */
	button[type="submit"] {
		
		display: block;
		margin: 0 auto;
	}

	/* Estilo para el resultado de la conversión a números en inglés */
	#resultado {
		margin-top: 20px;
		font-size: 18px;
		font-weight: bold;
	}

	/* Estilo para el formulario */
	form {
		border:solid 3px black;
		border-radius:10px;
		background: rgb(50,50,78);
		background: linear-gradient(235deg, rgba(50,50,78,1) 59%, rgba(162,158,158,1) 100%);
		margin-top: 20px;
		width:50%;
		margin: 0 auto;
	}
	

	/* Estilo para las preguntas del quiz */
	form div {
		margin-bottom: 10px;
	}

	/* Estilo para las etiquetas de las preguntas */
	form label {
		display: block;
		margin-bottom: 5px;
		font-weight: bold;
	}

	/* Estilo para los campos de texto del quiz */
	form input[type="text"] {
		width: 50%;
		padding: 10px;
		border: 1px solid #ccc;
		border-radius: 4px;
		font-size: 16px;
	}

	/* Estilo para el botón del quiz */
	form button[type="submit"] {
		display: block;
		margin-top: 20px;
		padding: 10px;
		background-color: #4CAF50;
		color: white;
		border: none;
		border-radius: 4px;
		font-size: 16px;
		cursor: pointer;
	}

	/* Estilo para las respuestas correctas en el quiz */
	.acierto {
		color: green;
		background-color: #a3f7a3;
	}

	/* Estilo para las respuestas incorrectas en el quiz */
	.error {
		color: red;
		background-color: #f7a3a3;
	}
	#numero-btn{
		display:none;
	}
	/* Estilos para el pie de página */
	footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
	@media screen and (max-width: 400px) {
		form{
				width: 80%;
				margin-top:20px;
			}
	}
	
	</style>
</head>
<body>
	<header>
		<a href="../../index.php">
			<img src="../../assets/img/LOGO.png" alt="logoqe" srcset="">
		</a>
		
	</header>
	<h1>Números en inglés</h1>
	<p>Los números en inglés son importantes en varios contextos, como en el aprendizaje del idioma inglés, en la comunicación con hablantes de inglés en situaciones cotidianas como al hacer compras o pedir direcciones, en el mundo de los negocios y el comercio internacional, y en el ámbito académico y científico.</p>
	<label for="numero">Ingresa un número del 1 al 50:</label>
	<input type="number" id="numero" min="1" max="100" onchange="mostrarNumero()">
	<br>
	<div id="resultado">
		
	</div>
	<br>
	<div id="numero-btn">
			<button class="btn-number" onclick="pronunciarNumero()">Pronunciar número</button>
		</div>
	<br>
	
		<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
		<h2>Preguntas y respuestas</h2>
		<p>Selecciona la opción correcta para cada pregunta:</p>
			<div>
				<label for="q1">¿Como se escribe 26 en ingles?</label>
				<input type="text" id="q1" autocomplete="off"required>
			</div>
			<div>
				<label for="q2">¿Como se escribe 30 en ingles?</label>
				<input type="text" autocomplete="off" id="q2"required>
			</div>
			<div>
				<label for="q3">¿Como se escribe 45 en ingles?</label>
	
				<input type="text" autocomplete="off" id="q3"required>
			</div>
			<div>
				<label for="q4">¿que numero sigue del 9?</label>
				
				<input type="text"  autocomplete="off" id="q4"required>
			</div>
			<div>
				<label for="q5">¿que numero va entre 14 y 16 ?</label>
				
				<input type="text"  autocomplete="off" id="q5" required>
			</div>

			<button type="submit">Enviar respuestas</button>
			<div></div>
		</form>
		<br>
		<a href="../../basico1.php"><button id="back-button">volver</button></a>
			
	
	<div id="resultado"></div>

	<footer>
            <p>© 2023 QUICKENG </p>
			
     </footer>
	
	<script>
		function mostrarNumero() {
			// Obtener el valor del input
			var numero = document.getElementById("numero").value;
			
			// Crear un arreglo con los números en inglés
			var numerosEnIngles = ["zero","one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten",
			                       "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen",
			                       "eighteen", "nineteen", "twenty", "twenty-one", "twenty-two", "twenty-three",
			                       "twenty-four", "twenty-five", "twenty-six", "twenty-seven", "twenty-eight",
			                       "twenty-nine", "thirty", "thirty-one", "thirty-two", "thirty-three", "thirty-four",
			                       "thirty-five", "thirty-six", "thirty-seven", "thirty-eight", "thirty-nine", "forty",
			                       "forty-one", "forty-two", "forty-three", "forty-four", "forty-five", "forty-six",
			                       "forty-seven", "forty-eight", "forty-nine", "fifty", "sixty","seventy","eighty","ninety","one hundred"];

			// Verificar si el número ingresado está en el rango válido
			if(numero < 1 || numero > 50) {
				document.getElementById("resultado").innerHTML = "Ingresa un número del 1 al 100";
				return;
			}
			
			// Mostrar el número en inglés correspondiente
			document.getElementById("resultado").innerHTML = "El número " + numero + " en inglés es " + numerosEnIngles[numero];
			document.getElementById("numero-btn").style.display = "block";
			}
		
			function pronunciarNumero() {
				// Obtener el valor del input
				var numero = document.getElementById("numero").value;
				
				
				// Verificar si el número ingresado está en el rango válido
				if(numero < 1 || numero > 100) {
					alert("Ingresa un número del 1 al 100");
					return;
				}else
				var audio = new Audio(`https://superatejugando.com/images/idiomas/loteria/audio/numeros_ingles/${numero}.mp3`);
				audio.play();
				
			}
			var formulario = document.getElementById("quiz-form");

			// Manejar el evento de envío del formulario
			formulario.addEventListener("submit", function(event) {
			event.preventDefault(); // evitar que la página se recargue después de enviar el formulario
			
			});
			function validarRespuestas(){
				
				// Obtener las respuestas del usuario
				var q1= document.getElementById("q1").value.trim().toLowerCase();
				var q2= document.getElementById("q2").value.trim().toLowerCase();
				var q3= document.getElementById("q3").value.trim().toLowerCase();
				var q4= document.getElementById("q4").value.trim().toLowerCase();
				var q5= document.getElementById("q5").value.trim().toLowerCase();

				// Validar las respuestas
				if (q1 === "twenty six") {
					document.getElementById("q1").classList.add("acierto");
				} else {
					
					document.getElementById("q1").classList.add("error");
				}
				if (q2 === "thirty") {
					
					document.getElementById("q2").classList.add("acierto");
				} else {
					
					document.getElementById("q2").classList.add("error");
				}
				if (q3 === "fourty five") {
					
					document.getElementById("q3").classList.add("acierto");
				} else {
					
					document.getElementById("q3").classList.add("error");
				}
				if (q4 === "ten") {
					
					document.getElementById("q4").classList.add("acierto");
				} else {
					
					document.getElementById("q4").classList.add("error");
				}
				if (q5 === "fifteen") {
					
					document.getElementById("q5").classList.add("acierto");
				} else {
					
					document.getElementById("q5").classList.add("error");
				}
			}
			
	</script>
	</body>
</html>