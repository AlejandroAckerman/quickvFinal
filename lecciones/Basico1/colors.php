<!DOCTYPE html>
<html>
<head>
	<title>Colors in English</title>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			background: rgb(50,50,78);
			background: linear-gradient(231deg, rgba(50,50,78,1) 14%, rgba(54,54,54,1) 51%, rgba(50,50,78,1) 83%);
		}
		#caja-colores {
			margin: 0 auto;
			width: 800px;
			padding: 20px;
			border: 1px solid #ccc;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			border-radius: 10px;
		}
		#logoQe{
			width:20%;
		}
		header {
			width: 100%;
			background-color: #2c3e50;
			padding: 10px;
		}

		
		h1, h2, p{
			border-radius:5px;
			display: flex;
			margin:0 auto ;
			padding:10px;
			width:20%;
			background-color:#FFFFFF;
			text-align: center;
			color: #2c3e50;
		}
		
		.color-box {
			display: inline-block;
			width: 100px;
			height: 100px;
			margin: 10px;
			border: 2px solid black;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
		}
		.color-box:hover{
			transform: scale(1.1);
		}
		
		.imagen-form {
			width: 30%;
			margin-bottom: 10px;
			display: block;
			margin: 0 auto;
		}
		
		form {
			max-width: 600px;
			margin: 0 auto;
			text-align: center;
			border: 1px solid #ccc;
			padding: 20px;
			border-radius: 10px;
			background-color: #f2f2f2;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		
		form > div {
			margin-bottom: 20px;
		}
		
		form > div > div {
			margin-bottom: 10px;
		}
		
		input[type="text"] {
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			width: 100%;
			box-sizing: border-box;
		}
		
		button[type="submit"] {
			padding: 10px 20px;
			background-color: #2c3e50;
			color: white;
			border: solid 1px grey;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
			transition: background-color 0.3s ease-in-out;
		}
		
		button[type="submit"]:hover {
			background-color: #34495e;
		}
		
		.acierto {
			color:green;
			background-color: #a3f7a3;
		}
		
		.error {
			color:red;
			background-color: #f7a3a3;
		}
		#back-button{
			display: flex;
			margin: 0 auto;
			background-color: #fff;
			color: #333;
			border: 1px solid #333;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		#back-button:hover {
			background-color: #333;
			color: #fff;
		}
		footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		@media screen and (max-width: 400px) {
			#caja-colores{
				width: 80%;
			}
			h1,h2,p{
				width: 80%;

			}
		}
		
	</style>
</head>
<header>
			<a href="../../basico1.php">
				<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe">
			</a>
</header>
<body>
	<br>
	<h1>Colors in English</h1>
	<br>
	<div id="caja-colores">
		<p>presiona un color para conocer su nombre en ingles</p>
		<div class="color-box" style="background-color: red" onclick="showColor('red')"> </div>
		<div class="color-box" style="background-color: orange" onclick="showColor('orange')"> </div>
		<div class="color-box" style="background-color: yellow" onclick="showColor('yellow')"> </div>
		<div class="color-box" style="background-color: green" onclick="showColor('green')"> </div>
		<div class="color-box" style="background-color: blue" onclick="showColor('blue')"> </div>
		<div class="color-box" style="background-color: purple" onclick="showColor('purple')"> </div>
		<div class="color-box" style="background-color: pink" onclick="showColor('pink')"> </div>
		<div class="color-box" style="background-color: brown" onclick="showColor('brown')"> </div>
		<div class="color-box" style="background-color: gray" onclick="showColor('gray')"> </div>
		<div class="color-box" style="background-color: black" onclick="showColor('black')"> </div>
		<div class="color-box" style="background-color: white; border: 2px solid gray;" onclick="showColor('white')"> </div>
		<div id="color-info"></div>
	</div>
	<br>
	<h2>Preguntas y respuestas</h2>
		<p>escribe el color de los siguientes objetos :</p>
		<br>
		<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
			<div>
				<di>
					<img class="imagen-form"  src="../../assets/img/perro.jpg" alt="" srcset="">
				</div>
				
				<input type="text" id="q1" autocomplete="off"required>
			</div>
			<div>
				<div >
					<img class="imagen-form" src="../../assets/img/coche-rojo.jpg" alt="" srcset="">
				</div>
				
				<input type="text" autocomplete="off" id="q2"required>
			</div>
			<div>
				<div>
					<img class="imagen-form" src="../../assets/img/dino.jpg" alt="" srcset="">
				</div>
				
				<input type="text" autocomplete="off" id="q3"required>
			</div>
			<div>
				<div>
					<img class="imagen-form" src="../../assets/img/lapiz.png" alt="" srcset="">
				</div>
				
				<input type="text"  autocomplete="off" id="q4"required>
			</div>
			<div>
				<div>
					<img class="imagen-form" src="../../assets/img/telefono.png" alt="" srcset="">
				</div>
				
				<input type="text"  autocomplete="off" id="q5" required>
			</div>

			<button type="submit">Enviar respuestas</button>
		</form>
		<a href="../../basico1.php">
			<button id="button-back">regresar</button>
		</a>
		<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
	

	<script>
		const traducciones = {
			"red": "rojo",
			"orange": "naranja",
			"yellow": "amarillo",
			"green": "verde",
			"blue": "azul",
			"purple": "morado",
			"pink": "rosado",
			"brown": "café/marrón",
			"gray": "gris",
			"black": "negro",
			"white": "blanco"
			};

		function showColor(color) {
			var colorInfo = document.getElementById("color-info");
			colorInfo.innerHTML = "The color <strong>" + traducciones[color] + "</strong> in English is <strong>" + getColorName(color) + "</strong>.";
		}

		function getColorName(color) {
			switch(color) {
				case "red":
					return "red";
				case "orange":
					return "orange";
				case "yellow":
					return "yellow";
				case "green":
					return "green";
				case "blue":
					return "blue";
				case "purple":
					return "purple";
				case "pink":
					return "pink";
				case "brown":
					return "brown";
				case "gray":
					return "gray";
				case "black":
					return "black";
				case "white":
					return "white";
				default:
					return "";
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
				if (q1 === "brown") {
					document.getElementById("q1").classList.add("acierto");
				} else {
					
					document.getElementById("q1").classList.add("error");
				}
				if (q2 === "red") {
					
					document.getElementById("q2").classList.add("acierto");
				} else {
					
					document.getElementById("q2").classList.add("error");
				}
				if (q3 === "purple") {
					
					document.getElementById("q3").classList.add("acierto");
				} else {
					
					document.getElementById("q3").classList.add("error");
				}
				if (q4 === "green") {
					
					document.getElementById("q4").classList.add("acierto");
				} else {
					
					document.getElementById("q4").classList.add("error");
				}
				if (q5 === "yellow") {
					
					document.getElementById("q5").classList.add("acierto");
				} else {
					
					document.getElementById("q5").classList.add("error");
				}
			}
			
	</script>
</body>
</html>
