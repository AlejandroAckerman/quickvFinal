<!DOCTYPE html>
<html>
	<head>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Alfabeto en inglés</title>
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
		body {
			font-family: 'Montserrat', sans-serif;
			font-size: 18px;
			line-height: 1.5;
			padding: 20px;
			background: rgb(50,50,78);
			background: linear-gradient(231deg, rgba(50,50,78,1) 14%, rgba(54,54,54,1) 51%, rgba(50,50,78,1) 83%);
		}
		header {
			background-color: #2c3e50;	
			text-align: center; /* Centrar contenido */
		}

		/* Estilos para pantallas con ancho menor a 768px */
		
		h1, h2 {
			position: relative;
			top:30%;
			padding:10px;
			font-size: 100%%;
			margin-bottom: 20px;
			text-align: center;
			text-transform: uppercase;
			align-items:center;
			color:white;
		}

		.letter {
			background-color: #4CAF50;
			border:solid 1px black;
			border-radius:5px;
			color: white;
			cursor: pointer;
			display: inline-block;
			font-size: 24px;
			margin: 5px;
			padding: 10px 20px;
			text-align: center;
			text-transform: uppercase;
			transition: background-color 0.3s ease-in-out;
			align-items:center;
		}

		.letter:hover {
			background-color: #2E8B57;
			border: 1px solid #2E8B57;
			box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
		}
		.letter:active {
			background-color: #1F573A;
			border: 1px solid #1F573A;
			box-shadow: none;
		}
		form {
			margin: 20px 0;
			padding: 20px;
			border: 1px solid #CCCCCC;
			border-radius: 5px;
			background-color: #F6F6F6;
			box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
			width:50%;
			margin:0 auto;
			
		}

		form div {
			margin: 10px 0;
			align-items:center;
		}

		form label {
			display: block;
			font-size: 18px;
			margin-bottom: 5px;
			
		}

		form select {
			font-size: 16px;
			padding: 5px;
			border: 1px solid #CCCCCC;
			border-radius: 5px;
			border:solid 1px black;
		}

		form button[type="submit"] {
			background-color: #4CAF50;
			border: none;
			color: white;
			cursor: pointer;
			font-size: 18px;
			padding: 10px 20px;
			text-transform: uppercase;
			transition: background-color 0.3s ease-in-out;
			position: relative;
			left:50%;
			border:solid 1px black;

		}

		form button[type="submit"]:hover {
			background-color: #2E8B57;
			border:solid 1px black;
		}

		form button[type="submit"]:active {
			background-color: #1F573A;
			box-shadow: none;
			border:solid 1px black;
		}
		#parrafo{
			width:50% ;
			background: rgb(158,159,159);
			background: linear-gradient(4deg, rgba(158,159,159,1) 0%, rgba(158,159,159,1) 0%, rgba(255,255,255,1) 42%);
			border:solid 1px grey;
			border-radius:7px;
			box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
			display: flex;
			margin:0 auto;
			justify-content: center;
			
		}

		.acierto {
			color:green;
			background-color: #a3f7a3;
		}
		.error {
			color:red;
			background-color: #f7a3a3;
		}
		#logoQe{
			position: relative;
			left:35%;
			width:20%;
		}
		#button-back{
			background-color: red;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			font-size: 16px;
			cursor: pointer;
			transition: all 0.3s ease;
			position: relative;;
			display: flex;
			margin:0 auto;
			justify-content: center;
		}

		#button-back:hover{
			background-color: #FF554D;
		}	
		footer {
			width: 100%;
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		#letras{
			align-items:center;
			margin:0 auto ;
			width: 50%;
		}
		@media screen and (max-width: 400px) {
			#letras,#parrafo,form{
				width: 80%;
				margin-top:20px;
			}
			form button[type="submit"]{
			margin:0 auto;
			width: 70%;
		}	
		}
		
		

	</style>
	<header>
			<a href="../../basico1.php">
				<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe">
			</a>
	</header>
	<body>
	
<br><br><br>
	<h1>Alfabeto en inglés</h1>
		<div id="parrafo">
			<p>El alfabeto en inglés consta de 26 letras, desde la A hasta la Z. Las letras pueden ser escritas en mayúsculas o minúsculas. Cada letra tiene un sonido asociado y se utiliza para formar palabras y comunicar en inglés. Es importante conocer el alfabeto para poder deletrear palabras, pronunciar correctamente y entender el idioma escrito y hablado.</p>
		</div>	
		<h2>Click en las letras para escuchar su pronunciación:</h2>
		<div id="letras">
			<button class="letter" onclick="pronounceLetter('a')">A</button>
			<button class="letter" onclick="pronounceLetter('b')">B</button>
			<button class="letter" onclick="pronounceLetter('c')">C</button>
			<button class="letter" onclick="pronounceLetter('d')">D</button>
			<button class="letter" onclick="pronounceLetter('e')">E</button>
			<button class="letter" onclick="pronounceLetter('f')">F</button>
			<button class="letter" onclick="pronounceLetter('g')">G</button>
			<button class="letter" onclick="pronounceLetter('h')">H</button>
			<button class="letter" onclick="pronounceLetter('i')">I </button>
			<button class="letter" onclick="pronounceLetter('j')">J</button>
			<button class="letter" onclick="pronounceLetter('k')">K</button>
			<button class="letter" onclick="pronounceLetter('l')">L</button>
			<button class="letter" onclick="pronounceLetter('m')">M</button>
			<button class="letter" onclick="pronounceLetter('n')">N</button>
			<button class="letter" onclick="pronounceLetter('o')">O</button>
			<button class="letter" onclick="pronounceLetter('p')">P</button>
			<button class="letter" onclick="pronounceLetter('q')">Q</button>
			<button class="letter" onclick="pronounceLetter('r')">R</button>
			<button class="letter" onclick="pronounceLetter('s')">S</button>
			<button class="letter" onclick="pronounceLetter('t')">T</button>
			<button class="letter" onclick="pronounceLetter('u')">U</button>
			<button class="letter" onclick="pronounceLetter('v')">V</button>
			<button class="letter" onclick="pronounceLetter('w')">W</button>
			<button class="letter" onclick="pronounceLetter('x')">X</button>
			<button class="letter" onclick="pronounceLetter('y')">Y</button>
			<button class="letter" onclick="pronounceLetter('z')">Z</button>
	</div>

		
		<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
		  <h3>Preguntas y respuestas</h3>
		  <p>Selecciona la opción correcta para cada pregunta:</p>

			<div>
				<label for="q1">¿Cuántas letras tiene el alfabeto en inglés?</label>
				<input type="text" id="q1" autocomplete="off"required>
			</div>
			<div>
				<label for="q2">¿Cuál es la letra del alfabeto que viene después de la 'J'?</label>
				<input type="text" autocomplete="off" id="q2"required>
			</div>
			<div>
				<label for="q3">¿escribe la letra escuchando su pronunciacion?</label>
				<div> 
					<button class="letter"  type="button" onclick="pronounceLetter('o');">?</button>
				</div>
				
				<input type="text" autocomplete="off" id="q3"required>
			</div>
			<div>
				<label for="q4">¿escribe la letra escuchando su pronunciacion?</label>
				<div>
					<button class="letter"  type="button" onclick="pronounceLetter('p');">?</button>
				</div>
				
				<input type="text"  autocomplete="off" id="q4"required>
			</div>
			<div>
				<label for="q5">¿escribe la letra escuchando su pronunciacion?</label>
				<div>
					<button class="letter" type="button" onclick="pronounceLetter('t');">?</button>
				</div>
				
				<input type="text"  autocomplete="off" id="q5" required>
			</div>

			<button type="submit">Enviar respuestas</button>
		</form>
		<br>
		<a href="../../basico1.php">
			<button id="button-back">regresar</button>
		</a>
		<br>
		<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
		
	</body>
	<script>
			var formulario = document.getElementById("quiz-form");

			// Manejar el evento de envío del formulario
			formulario.addEventListener("submit", function(event) {
			event.preventDefault(); // evitar que la página se recargue después de enviar el formulario
			
			});
			
		
			//funcion para reproducir el audio de una letra
			function pronounceLetter(letter) {
				var audio = new Audio(`https://ssl.gstatic.com/dictionary/static/sounds/20200429/${letter}--_gb_1.mp3`);
				audio.play();
			}
			// Función para validar las respuestas del formulario
			function validarRespuestas(){
				
				// Obtener las respuestas del usuario
				var q1= document.getElementById("q1").value.trim().toLowerCase();
				var q2= document.getElementById("q2").value.trim().toLowerCase();
				var q3= document.getElementById("q3").value.trim().toLowerCase();
				var q4= document.getElementById("q4").value.trim().toLowerCase();
				var q5= document.getElementById("q5").value.trim().toLowerCase();

				// Validar las respuestas
				if (q1 === "26") {
					document.getElementById("q1").classList.add("acierto");
				} else {
					
					document.getElementById("q1").classList.add("error");
				}
				if (q2 === "k") {
					
					document.getElementById("q2").classList.add("acierto");
				} else {
					
					document.getElementById("q2").classList.add("error");
				}
				if (q3 === "o") {
					
					document.getElementById("q3").classList.add("acierto");
				} else {
					
					document.getElementById("q3").classList.add("error");
				}
				if (q4 === "p") {
					
					document.getElementById("q4").classList.add("acierto");
				} else {
					
					document.getElementById("q4").classList.add("error");
				}
				if (q5 === "t") {
					
					document.getElementById("q5").classList.add("acierto");
				} else {
					
					document.getElementById("q5").classList.add("error");
				}
			}
			
		</script>
</html>