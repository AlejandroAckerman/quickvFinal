<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uso adecuado de "there is/there are"</title>
</head>
<style>
    body{
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
		color:white;
		text-align:center;
    }
    h1, h2 {
		margin-bottom: 0;
		}
	ul {
		margin-top: 0;
		}
	header {
		background-color: #2c3e50;
		padding: 10px;
		text-align: center; /* Centrar contenido */
	}

	#logoQe {
		width: 20%;
	}
	
	footer {
		position: relative;
		bottom:1;
		margin-top:20px;
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
			margin-top:30px;
			margin-bottom:80px;
		}

	#button-back:hover{
			background-color: #FF554D;
		}
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
	.acierto {
		color: green;
		background-color: #a3f7a3;
	}

	.error {
		color: red;
			background-color: #f7a3a3;
	}
   
</style>
<body>
<header>
		<a href="../../index.php">
			<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe" srcset="">
		</a>
		
	</header>
	<h1>Uso adecuado de "there is/there are"</h1>
	<p>En inglés, "there is/there are" se utilizan para indicar la existencia de algo. A continuación, te explicamos cómo utilizarlos correctamente:</p>

	<h2>There is</h2>
	<p>Usamos "there is" para hablar de la existencia de <strong>un solo objeto o persona</strong>. Por ejemplo:</p>
	<ul>
		<li>There is a cat in the garden. (Hay un gato en el jardín.)</li>
		<li>There is a book on the table. (Hay un libro sobre la mesa.)</li>
	</ul>

	<h2>There are</h2>
	<p>Usamos "there are" para hablar de la existencia de <strong>más de un objeto o persona</strong>. Por ejemplo:</p>
	<ul>
		<li>There are three apples in the basket. (Hay tres manzanas en la cesta.)</li>
		<li>There are many people in the park. (Hay mucha gente en el parque.)</li>
	</ul>

	<p>Recuerda que para formar frases afirmativas con "there is/there are", debes seguir la siguiente estructura:</p>
	<ul>
		<li>There is + sustantivo singular.</li>
		<li>There are + sustantivo plural.</li>
	</ul>

	<p>Por otro lado, para formar frases negativas e interrogativas, debes utilizar los siguientes auxiliares:</p>
	<ul>
		<li>There is not / There isn't + sustantivo singular.</li>
		<li>There are not / There aren't + sustantivo plural.</li>
		<li>Is there + sustantivo singular + ?</li>
		<li>Are there + sustantivo plural + ?</li>
	</ul>
	<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
		<h2>Preguntas y respuestas</h2>
		<p>Selecciona la opción correcta para cada pregunta:</p>
			<div>
				<label for="q1"> ________ a bus in the car park</label>
				<input type="text" id="q1" autocomplete="off"required>
			</div>
			<div>
				<label for="q2">_________ some interesting paintings in the museum.</label>
				<input type="text" autocomplete="off" id="q2"required>
			</div>
			<div>
				<label for="q3">______any water here.</label>
	
				<input type="text" autocomplete="off" id="q3"required>
			</div>
			<div>
				<label for="q4">_______ scary films at the cinema today</label>
				
				<input type="text"  autocomplete="off" id="q4"required>
			</div>
			<div>
				<label for="q5">Let's buy the medicine ______ a chemist in the corner	</label>
				
				<input type="text"  autocomplete="off" id="q5" required>
			</div>

			<button type="submit">Enviar respuestas</button>
			<div></div>
		</form>
	<a href="../../basico1.php">
			<button id="button-back">regresar</button>
		</a>
	<footer>
            <p>© 2023 QUICKENG </p>
			
     </footer>
	 <script>
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
	if (q1 === "there is") {
		document.getElementById("q1").classList.add("acierto");
	} else {
		
		document.getElementById("q1").classList.add("error");
	}
	if (q2 === "there are") {
		
		document.getElementById("q2").classList.add("acierto");
	} else {
		
		document.getElementById("q2").classList.add("error");
	}
	if (q3 === "there is not") {
		
		document.getElementById("q3").classList.add("acierto");
	} else {
		
		document.getElementById("q3").classList.add("error");
	}
	if (q4 === "there are not") {
		
		document.getElementById("q4").classList.add("acierto");
	} else {
		
		document.getElementById("q4").classList.add("error");
	}
	if (q5 === "there is") {
		
		document.getElementById("q5").classList.add("acierto");
	} else {
		
		document.getElementById("q5").classList.add("error");
	}
}
	 </script>
</body>
</html>