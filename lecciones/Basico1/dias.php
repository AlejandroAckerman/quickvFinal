<!DOCTYPE html>
<html>
<head>
	<title>Días de la semana en inglés</title>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
/* Apply a reset to ensure consistency */
* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			background: rgb(116,116,116);
			background: linear-gradient(231deg, rgba(116,116,116,1) 0%, rgba(0,15,57,1) 30%, rgba(0,15,57,1) 70%, rgba(107,107,108,1) 100%);
			color:white;
		}

		/* Style the header */
		header {
			background-color: #2c3e50;
			padding: 10px;
			text-align: center; /* Centrar contenido */
		}

		/* Style the logo */
		#logoQe {
			width:20%;
			max-width: 100%;
		}

		/* Center the title */
		h1, h2, h3, p {
			text-align: center;
			margin: 0 auto;
		}

		/* Style the select and its options */
		#day {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border: 2px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
		}

		#day option {
			font-size: 16px;
		}

		/* Style the quiz form */
		form {
			max-width: 500px;
			margin: 0 auto; /* Centrar horizontalmente */
			padding: 20px;
			border: 2px solid #ccc;
			border-radius: 5px;
			text-align: center; /* Centrar contenido */
		}

		/* Style the quiz form inputs */
		form input[type=text] {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border: 2px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
		}

		/* Style the submit button */
		form button[type=submit] {
			background-color: #2c3e50;
			color: #fff;
			padding: 10px 20px;
			font-size: 16px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		/* Style the feedback messages */
		#feedback {
			text-align: center;
			margin-bottom: 20px;
		}

		.acierto {
			color: green;
			background-color: #a3f7a3;
		}

		.error {
			color: red;
			background-color: #f7a3a3;
		}

		/* Style the image */
		#div-imagen {
			display:none;
			margin:0 auto;
			text-align: center;
			margin-bottom: 20px;
		}

		#imagen {
			display:flex;
			margin:0 auto ;
			max-width: 100%;
		}

		/* Add media queries for responsiveness */
		@media (max-width: 768px) {
			form {
				padding: 10px;
			}

			form input[type=text] {
				margin-bottom: 10px;
			}

			form button[type=submit] {
				font-size: 14px;
			}
		}
		#resultado{
			display:flex;
			margin:0 auto ;
		}
		#result{
			display:flex;
			margin:0 auto ;
		}
		footer {
			width: 100%;
			position: fixed;
			bottom: 0;
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		#seleccion_dia{
			padding:10px;
			display:flex;
			margin:0 auto;
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
		
	</style>
</head>
<body>
	<header>
			<a href="../../basico1.php">
				<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe">
			</a>
	</header>
	<h1>Días de la semana en inglés</h1>
	<div id="seleccion_dia">
	
		<label for="day">Selecciona un día de la semana:</label>
		<select id="day" onchange="mostrarDia()">
			<option value="">- Selecciona un día -</option>
			<option value="lunes">lunes</option>
			<option value="martes">martes</option>
			<option value="miercoles">miercoles</option>
			<option value="jueves">jueves</option>
			<option value="viernes">viernes</option>
			<option value="sabado">sabado</option>
			<option value="domingo">domingo</option>
		</select>
	</div>
		<div id="result">
			<div id="resultado"></div>
		</div>
		
		<div id="div-imagen">
				<img id="imagen" src="" alt="dia">	

	</div>
	<h2>Preguntas y respuestas</h2>
		<p>Selecciona la opción correcta para cada pregunta:</p>
		<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
			<div>
				<label for="q1">¿cual es el primer dia de la semana?</label>
				<input type="text" id="q1" autocomplete="off"required>
			</div>
			<div>
				<label for="q2">¿que dia sigue despues del martes?</label>
				<input type="text" autocomplete="off" id="q2"required>
			</div>
			<div>
				<label for="q3">¿como se dice viernes en ingles?</label>
				
				
				<input type="text" autocomplete="off" id="q3"required>
			</div>
			<div>
				<label for="q4">¿cual es el significado de thursday en español?</label>
				
				
				<input type="text"  autocomplete="off" id="q4"required>
			</div>
			<div>
				<label for="q5">¿como dices domingo en ingles?</label>
				
				
				<input type="text"  autocomplete="off" id="q5" required>
			</div>

			<button type="submit">Enviar respuestas</button>
		</form>
		<br>
		<a href="../../basico1.php">
			<button id="button-back">regresar</button>
		</a>
		<br><br><br>
		<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
	<script>
		function mostrarDia() {
			// Obtener el valor del select
			var dia = document.getElementById("day").value;
			
			// Crear un objeto que contiene las traducciones de los días de la semana en inglés y en español
			var traducciones = {
            "lunes": "Monday",
            "martes": "Tuesday",
            "miercoles": "Wednesday",
            "jueves": "Thursday",
            "viernes": "Friday",
            "sabado": "Saturday",
            "domingo": "Sunday"
        };
			
			// Verificar si se seleccionó un día de la semana
			if (dia != "") {
				// Verificar si el día seleccionado se encuentra en el objeto de traducciones
				if (dia in traducciones) {
					document.getElementById("resultado").innerHTML = "El día en ingles es: " + traducciones[dia];
					mostrarImg();
				} else {
					document.getElementById("resultado").innerHTML = "Lo siento, no tengo la traducción de ese día de la semana.";
				}
			} else {
				document.getElementById("resultado").innerHTML = "";
			}
		}
		var formulario = document.getElementById("quiz-form");

			// Manejar el evento de envío del formulario
			formulario.addEventListener("submit", function(event) {
			event.preventDefault(); // evitar que la página se recargue después de enviar el formulario
			
			});
			// Función para validar las respuestas del formulario
			function validarRespuestas(){
				
				// Obtener las respuestas del usuario
				var q1= document.getElementById("q1").value.trim().toLowerCase();
				var q2= document.getElementById("q2").value.trim().toLowerCase();
				var q3= document.getElementById("q3").value.trim().toLowerCase();
				var q4= document.getElementById("q4").value.trim().toLowerCase();
				var q5= document.getElementById("q5").value.trim().toLowerCase();

				// Validar las respuestas
				if (q1 === "monday") {
					document.getElementById("q1").classList.add("acierto");
				} else {
					
					document.getElementById("q1").classList.add("error");
				}
				if (q2 === "wednesday") {
					
					document.getElementById("q2").classList.add("acierto");
				} else {
					
					document.getElementById("q2").classList.add("error");
				}
				if (q3 === "friday") {
					
					document.getElementById("q3").classList.add("acierto");
				} else {
					
					document.getElementById("q3").classList.add("error");
				}
				if (q4 === "jueves") {
					
					document.getElementById("q4").classList.add("acierto");
				} else {
					
					document.getElementById("q4").classList.add("error");
				}
				if (q5 === "sunday") {
					
					document.getElementById("q5").classList.add("acierto");
				} else {
					
					document.getElementById("q5").classList.add("error");
				}
			}
			function mostrarImg(){

				var seleccion = document.getElementById("day").value;
				var imagen = document.getElementById("imagen");
				

				if (seleccion == "lunes") {
				imagen.src = "../../assets/img/monday.png";
				} else if (seleccion == "martes") {
				imagen.src = "../../assets/img/tuesday.png";
				} else if (seleccion == "miercoles") {
				imagen.src = "../../assets/img/wednesday.png";
				} else if (seleccion == "jueves") {
				imagen.src = "../../assets/img/thursday.png";
				} else if (seleccion == "viernes") {
				imagen.src = "../../assets/img/friday.png";
				} else if (seleccion == "sabado") {
				imagen.src = "../../assets/img/saturday.png";
				} else if (seleccion == "domingo") {
				imagen.src = "../../assets/img/sunday.png";
				}
				var div = document.getElementById("div-imagen");
				div.style.display = "flex";
				
			}
			
			
	</script>
</body>
</html>

