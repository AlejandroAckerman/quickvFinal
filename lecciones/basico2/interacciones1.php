<!DOCTYPE html>
<html>
<head>
	<title>Explicación de interacciones básicas en inglés</title>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background: rgb(99,99,102);
			background: linear-gradient(90deg, rgba(99,99,102,1) 0%, rgba(0,1,106,1) 50%, rgba(20,50,255,1) 100%);
			max-width: 200%;
		}
		header {
			background-color: #2c3e50;
			text-align: center;
		}
		#logoQe {
			max-width:100%;
			position: relative;
			left: 35%;
			width: 20%;
		}
		h1,h2 ,p{
			text-align: center;
			color:white;
		}
		ul {
			
			list-style-type: none;
			border-left: 2px solid #333;
			padding-left: 20px;
		}
		li {
			margin: 10px 0;
			padding-left: 20px;
			position: relative;
		}
		button {
			
			background-color: #333;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		button:hover {
			background-color: #555;
		}
		
		img[src$="quicky.png"] {
			position:relative;
			width:25rem;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		#respuesta {
			height: 50px;
		}
		footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		.globo {
			position: relative;
			width: 10rem;
			display: flex;
			padding: 10px;
			border-radius: 20px;
			background-color: #fff;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
			animation: globo 1s ease-in-out infinite alternate;
			left:2%;
  			bottom:60%;
		}
		@keyframes globo {
			0% {
				transform: translateY(px);
			}
			100% {
				transform: translateY(-20px);
			}
		}
		#explicacion{
			background-color:darkgrey;
			text-align:center;
			color:black;
			border-bottom:solid 30px #2c3e50;
			max-width: 600px;
			margin: 0 auto;
			margin-top:50px;
			padding: 10px;
			font-family: Arial, sans-serif;
		}
		.acierto {
			color:green;
			background-color: #a3f7a3;
		}
		.error {
			color:red;
			background-color: #f7a3a3;
		}
		div {
			font-family: Arial, sans-serif;
			text-align: center;
			padding: 20px;
		}


		form {
			display: inline-block;
			text-align: left;
			margin-bottom: 20px;
		}

		label {
			display: block;
			font-size: 18px;
			margin-bottom: 10px;
		}

		input[type="text"] {
			font-size: 16px;
			padding: 8px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
		}

		button[type="submit"],
		button#button-back {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
			margin-right: 10px;
		}

		button#button-back {
			background-color: #ccc;
			color: black;
			display:flex;
			margin:0 auto;

		}

		/* Estilos específicos */
		#quiz-form {
			background-color: #f2f2f2;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 2px 5px #ccc;
		}
		li:before {
			content: "▸";
			position: absolute;
			left: 0;
			color: #555;
		}

		strong {
			font-weight: normal;
			color: #666;
		}
		#actividad{
			background: rgb(32,46,94);
			background: linear-gradient(30deg, rgba(32,46,94,1) 0%, rgba(0,243,255,1) 49%, rgba(2,153,143,1) 100%);
			width: 40%;
			height: 715px;
			margin-top:30px ;
			border:solid 5px #323232;
			border-radius:10px;
			box-shadow:5px 5px 5px black;
			margin:0 auto;
			margin-top:30px;
		}
		form {
			display: block;
		}

		button[type="submit"],
		button#button-back {
			display: block;
			margin: 20px auto 0;
			width: 100%;
		}
		@media screen and (max-width: 400px) {
			#actividad{
				width: 80%;
			}
		}
				
	</style>
</head>
<body>
<header>
			<a href="../../basico1.php">
				<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe">
			</a>
	</header>
	<div id="explicacion">
		<h1>Explicación de interacciones básicas en inglés</h1>
		
		<h2>Saludos:</h2>
		
		<ul>
			<li>"Hello!" <strong>(¡Hola!)</strong></li>
			<li>"Hi there!"<strong> (¡Hola!)</strong></li>
			<li>"Good morning!"<strong> (¡Buenos días!)</strong></li>
			<li>"Good afternoon!"<strong> (¡Buenas tardes!)</strong></li>
			<li>"Good evening!"<strong> (¡Buenas noches!)</strong></li>

		</ul>
		
		<h2>Preguntas básicas:</h2>
		
		<ul>
			<li>"What is your name?"<strong>(¿Cuál es tu nombre?)</strong></li>
			<li>"Where are you from?"<strong> (¿De dónde eres?</strong>)</strong></li>
			<li>"How are you?"<strong> (¿Cómo estás?)</strong></li>
			<li>"What do you do?"<strong> (¿A qué te dedicas?)</strong></li>
			<li>"what is your favorite color?"</li>
			<li>"how old are you?"</li>
			<li>"how do you feel?"</li>
			<li>"what is your favorite food?</li>
			<li>"what kind of music do you like?"</li>
			<li>"how tall are you?"</li>
			<li>"do you have any pets?"</li>
		</ul>
		
		<h2>Respuestas básicas:</h2>
		
		<ul>
			<li>"My name is ____."<strong> (Mi nombre es ____.)</strong></li>
			<li>"I am from ____."<strong> (Soy de ____.)</strong></li>
			<li>"I am fine, thank you. And you?"<strong> (Estoy bien, gracias. ¿Y tú?)</strong></li>
			<li>"I am a ____."<strong> (Soy un/a ____. - dependiendo de tu trabajo o profesión)</strong></li>
		</ul>
	</div>
	<div id="actividad">
		<h1>interactua con <strong>QUICKY</strong></h1>
		<p>practica con quicky las interacciones anteriores</p>
		<div>
			<input type="text" id="frase">
			<button onclick="showFrase(document.getElementById('frase').value)">Enviar</button>
		</div>
		    <img src="../../assets/img/quicky.png" alt="quicky">
		
			<div id="quicky-txt"class="globo">
				<div id="respuesta"></div>
			</div>
		
		
	</div>
	<div >
		<h2>Preguntas y respuestas</h2>
			<p>Selecciona la opción correcta para cada pregunta:</p>
			<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
				<div>
					<label for="q1">¿cuantos años tiene quicky?</label>
					<input type="text" id="q1" autocomplete="off"required>
				</div>
				<div>
					<label for="q2">¿que musica le gusta a quicky??</label>
					<input type="text" autocomplete="off" id="q2"required>
				</div>
				<div>
					<label for="q3">¿cual es la comida favorita de quicky?</label>
					<input type="text" autocomplete="off" id="q3"required>
				</div>
				<div>
					<label for="q4">¿de donde es quicky?</label>
					<input type="text"  autocomplete="off" id="q4"required>
				</div>
				<div>
					<label for="q5">¿cual es el color favorito de quicky?</label>
					<input type="text"  autocomplete="off" id="q5" required>
				</div>

				<button type="submit">Enviar respuestas</button>
			</form>	
			<a href="../../basico2.php">
				<button id="button-back">regresar</button>
			</a>
	</div>

		
	<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
</body>
<script>
	
	
	function showFrase(frase) {
    switch(frase.toLowerCase()) {
        case 'hello':
            document.getElementById("respuesta").innerHTML = "hi i am quicky";
            break;
        case 'hi there':
            document.getElementById("respuesta").innerHTML = "hello my name is quicky";
            break;
        case 'good morning':
            document.getElementById("respuesta").innerHTML = "good morning the sky is beatuful today ";
            break;
        case 'good afternoon':
            document.getElementById("respuesta").innerHTML = "good afternoon!";
            break;
        case 'what is your name?':
            document.getElementById("respuesta").innerHTML = "my name is quiky";
            break;
        case 'where are you from?':
            document.getElementById("respuesta").innerHTML = "i am from  united states of America";
            break;
		case 'what do you do?':
            document.getElementById("respuesta").innerHTML = "i am a chef";
        break;	
		case 'what is your favorite color?':
            document.getElementById("respuesta").innerHTML = "my favorite color is  blue";
        break;
		case 'how old are you?':
            document.getElementById("respuesta").innerHTML = "i am a 20 years old";
        break;	
		case 'do you have a boyfriend?','do you have a boyfriend?' :
            document.getElementById("respuesta").innerHTML = "no, i do not";
        break;	
		case 'how are you?':
            document.getElementById("respuesta").innerHTML = "fine , thank you";
        break;	
		case 'how do you feel?':
            document.getElementById("respuesta").innerHTML = "I feel okay. A little sleepy, but fine.";
        break;	
		case 'what is your favorite food?':
            document.getElementById("respuesta").innerHTML = "I like a lot of different foods, but my favorite is sushi.";
        break;	
		case 'what kind of music do you like?' :
            document.getElementById("respuesta").innerHTML = " I like rock music.";
        break;	
		case 'do you have any pets?' :
            document.getElementById("respuesta").innerHTML = "Yeah, I have a cat";
        break;	
		case 'how tall are you?' :
            document.getElementById("respuesta").innerHTML = " I am about 6 feet tall.";
        break;	
        default:
            document.getElementById("respuesta").innerHTML = "sorry, i do not understand what do you mean.";
            break;
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
				if (q1 === "20") {
					document.getElementById("q1").classList.add("acierto");
				} else {
					
					document.getElementById("q1").classList.add("error");
				}
				if (q2 === "rock music") {
					
					document.getElementById("q2").classList.add("acierto");
				} else {
					
					document.getElementById("q2").classList.add("error");
				}
				if (q3 === "sushi") {
					
					document.getElementById("q3").classList.add("acierto");
				} else {
					
					document.getElementById("q3").classList.add("error");
				}
				if (q4 === "united states of America") {
					
					document.getElementById("q4").classList.add("acierto");
				} else {
					
					document.getElementById("q4").classList.add("error");
				}
				if (q5 === "blue") {
					
					document.getElementById("q5").classList.add("acierto");
				} else {
					
					document.getElementById("q5").classList.add("error");
				}
			}
			



	
</script>
</html>
