<!DOCTYPE html>
<html>
<head>
	<title>Meses en Inglés</title>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			text-align: center;
			background: rgb(50,50,78);
			background: linear-gradient(231deg, rgba(50,50,78,1) 14%, rgba(54,54,54,1) 51%, rgba(50,50,78,1) 83%);
			color:white;
		}
		header {
			background-color: #2c3e50;
			text-align: center; /* Centrar contenido */
		}

			#logoQe {
			width:20%;
			max-width: 100%;
		}
		h1 {
			margin-top: 50px;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-top: 50px;
		}

		.box {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: 10px;
			width: 200px;
			height: 200px;
			border: 2px solid black;
			border-radius: 10px;
			cursor: pointer;
			transition: all 0.3s ease;
			background: rgb(130,130,130);
			background: linear-gradient(231deg, rgba(130,130,130,1) 0%, rgba(255,255,255,1) 51%, rgba(151,151,153,1) 100%);
			color:black;
		}

		.box:hover {
			transform: scale(1.1);
		}

		img {
			width: 100px;
			height: 100px;
			margin-bottom: 10px;
		}
		.acierto {
			color:green;
			background-color: #a3f7a3;
		}
		.error {
			color:red;
			background-color: #f7a3a3;
		}
		form {
			margin-top: 50px;
			font-size: 20px;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

			label {
			margin-right: 20px;
			}

			input[type='text'] {
			padding: 10px;
			font-size: 20px;
			border-radius: 10px;
			border: 2px solid #ccc;
			margin-bottom: 20px;
			}

			button[type='submit'] {
			margin-top: 20px;
			padding: 10px;
			font-size: 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 10px;
			cursor: pointer;
			}

			button[type='submit']:hover {
			background-color: #3e8e41;
			}

			/* Estilos para el pie de página */
			footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
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
	<h1>Meses en Inglés</h1>
	<div class="container" style="width:100%;" >
		<div class="box" onclick="showInfo('January', '../../assets/img/january.jpg', 'January is the first month of the year.')">
			<img src="../../assets/img/january.jpg">
			<h2>January</h2>
		</div>
		<div class="box" onclick="showInfo('February', '../../assets/img/february.jpg', 'February is the second month of the year.')">
			<img src="../../assets/img/february.jpg">
			<h2>February</h2>
		</div>
		<div class="box" onclick="showInfo('March', '../../assets/img/march.jpg', 'March is the third month of the year.')">
			<img src="../../assets/img/march.jpg">
			<h2>March</h2>
		</div>
		<div class="box" onclick="showInfo('April', '../../assets/img/april.jpg', 'April is the fourth month of the year.')">
			<img src="../../assets/img/april.jpg">
			<h2>April</h2>
		</div>
		<div class="box" onclick="showInfo('May', '../../assets/img/may.jpg', 'May is the fifth month of the year.')">
			<img src="../../assets/img/may.jpg">
            <h2>May</h2>
		</div>
		<div class="box" onclick="showInfo('June', '../../assets/img/june.png', 'June is the sixth month of the year.')">
			<img src="../../assets/img/june.png">
			<h2>June</h2>
		</div>
		<div class="box" onclick="showInfo('July', '../../assets/img/july.png', 'July is the seventh month of the year.')">
			<img src="../../assets/img/july.png">
			<h2>July</h2>
		</div>
		<div class="box" onclick="showInfo('August', '../../assets/img/august.jpg', 'August is the eighth month of the year.')">
			<img src="../../assets/img/august.jpg">
			<h2>August</h2>
		</div>
		<div class="box" onclick="showInfo('September', '../../assets/img/september.jpg', 'September is the ninth month of the year.')">
			<img src="../../assets/img/september.jpg">
			<h2>September</h2>
		</div>
		<div class="box" onclick="showInfo('October', '../../assets/img/october.jpg', 'October is the tenth month of the year.')">
			<img src="../../assets/img/october.jpg">
			<h2>October</h2>
		</div>
		<div class="box" onclick="showInfo('November', '../../assets/img/november.jpg', 'November is the eleventh month of the year.')">
			<img src="../../assets/img/november.jpg">
			<h2>November</h2>
		</div>
		<div class="box" onclick="showInfo('December', '../../assets/img/december.jpg', 'December is the twelfth and last month of the year.')">
			<img src="../../assets/img/december.jpg">
			<h2>December</h2>
		</div>
	</div>

    <div id="info">
	<h2 id="month"></h2>
	<img id="image">
	<p id="description"></p>
</div>
<h2>Preguntas y respuestas</h2>
		<p>Selecciona la opción correcta para cada pregunta:</p>
		<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
			<div>
				<label for="q1">¿en que mes se celebra el hallowen</label>
				<input type="text" id="q1" autocomplete="off"required>
			</div>
			<div>
				<label for="q2">¿cual mes va antes de junio?</label>
				<input type="text" autocomplete="off" id="q2"required>
			</div>
			<div>
				<label for="q3">¿como se le dice al mes de agosto en ingles?</label>
				<input type="text" autocomplete="off" id="q3"required>
			</div>
			<div>
				<label for="q4">¿en que mes se celebra el amor y amistad?</label>
				<input type="text"  autocomplete="off" id="q4"required>
			</div>
			<div>
				<label for="q5">¿que mes sigue despues de octubre?</label>
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
<script>
	function showInfo(month, imageSrc, description) {
		document.getElementById('month').innerHTML = month;
		document.getElementById('image').src = imageSrc;
		document.getElementById('description').innerHTML = description;
		document.getElementById('info').style.display = 'block';
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
				if (q1 === "october") {
					document.getElementById("q1").classList.add("acierto");
				} else {
					
					document.getElementById("q1").classList.add("error");
				}
				if (q2 === "may") {
					
					document.getElementById("q2").classList.add("acierto");
				} else {
					
					document.getElementById("q2").classList.add("error");
				}
				if (q3 === "august") {
					
					document.getElementById("q3").classList.add("acierto");
				} else {
					
					document.getElementById("q3").classList.add("error");
				}
				if (q4 === "february") {
					
					document.getElementById("q4").classList.add("acierto");
				} else {
					
					document.getElementById("q4").classList.add("error");
				}
				if (q5 === "november") {
					
					document.getElementById("q5").classList.add("acierto");
				} else {
					
					document.getElementById("q5").classList.add("error");
				}
			}
			


</script>

</body>
</html>