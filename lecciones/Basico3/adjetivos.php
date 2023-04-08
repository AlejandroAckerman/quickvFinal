<!DOCTYPE html>
<html>
<head>
	<title>Traductor de Adjetivos en inglés</title>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style> 
	body{
		text-align:center;
		color:white;
		background: rgb(2,0,36);
		background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
	}
	footer {
		background-color: #333;
		color: #fff;
		padding: 10px;
		text-align: center;
	}
	
	p {
		font-size: 1.2em;
		line-height: 1.5;
		text-align: justify;
		margin-bottom: 20px;
		}
	header {
		display: flex;
		align-items: center;
		justify-content: center;
		background-color: #2c3e50;
		padding: 10px;
	}
	h1 {
		font-size: 2.5em;
		text-align: center;
		margin-top: 30px;
		margin-bottom: 20px;
		color: #333;
		}
	label {
 		display: block;
		font-size: 1.2em;
		margin-bottom: 10px;
	}

	#adjetivos{
		display: flex;
		padding: 10px;
		font-size: 1.2em;
		border: 1px solid #ccc;
		border-radius: 5px;
		margin-bottom: 30px;
		
		width: 100%;
		box-sizing: border-box;
		text align :center;

	}
	#resultado {
		width: 60%;
		font-size: 1.2em;
		margin-top: 20px;
		padding: 10px;
		border: 1px solid #ccc;
		border-radius: 5px;
		background-color: #f9f9f9;
		color:black;
		margin-top: 20px ;
		margin-bottom:20px;
		display:none;
		margin:0 auto;
		margin-top:20px;
		
	}

	#logoQe {
			width: 20%;
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
		text-align:center;
		
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
	#trad-adjetivo{
		text-align:center;
		padding: 10px;
		margin-bottom:30px;
	}
	
</style>
<body>
<header>
			<a href="../../basico1.php">
				<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe">
			</a>
	</header>
	<div id="trad-adjetivo">
		<h1>Traductor de Adjetivos en inglés</h1>
		<p>Los adjetivos son palabras que acompañan al sustantivo y que expresan cualidades y propiedades atribuidas a los nombres.</p>
		
		<label for="adjetivo">Ingresa un adjetivo:</label>
		<input type="text" id="adjetivo" oninput="traducirAdjetivo()">
		
		<div id="resultado"></div>
	</div>
	
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
		<a href="../../basico1.php"><button id="button-back">volver</button></a>
		<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
	<script>
		function traducirAdjetivo() {
			// Obtener el valor del input
			var adjetivo = document.getElementById("adjetivo").value;
			
			// Crear un objeto que contiene las traducciones de algunos adjetivos en inglés
			var traducciones = {
				"feliz": "happy",
				"triste": "sad",
				"grande": "big",
				"pequeño": "small",
				"rápido": "fast",
				"lento": "slow",
				"alegre": "heerful",
				"aburrido": "boring",
				"enojado": "angry",
				"ansioso": "anxious",
				"ardiente":"ardent",
				"asustado": "frightened",
				"astuto": "cunning",
				"audaz": "bold",
				"azul": "blue",
				"blanco": "white",
				"brillante": "bright",
				"caluroso": "hot",
				"cariñoso": "affectionate",
				"confiado": "confident",
				"confuso": "confused",
				"contento": "content",
				"creativo": "creative",
				"cruel": "cruel",
				"curioso": "curious",
				"débil":"weak",
				"delgado": "thin",
				"deseoso": "eager",
				"despierto": "awake",
				"divertido": "fun",
				"emocionado": "excited",
				"encantador": "charming",
				"energético": "energetic",
				"enfermo": "sick",
				"enérgico": "lively",
				"entusiasta": "enthusiastic",
				"estimulante": "stimulating",
				"estridente": "noisy",
				"extraño": "strange",
				"feliz": "happy",
				"feroz": "fierce",
				"frío": "cold",
				"fuerte":"strong",
				"gracioso": "amusing",
				"gris": "gray",
				"guapo":"handsome",
				"hábil": "skilled",
				"hermoso":"beautiful",
				"húmedo": "damp",
				"impaciente": "impatient",
				"inteligente": "intelligent",
				"interesante": "interesting",
				"joven": "young",
				"leal": "loyal",
				"lleno": "full",
				"loco": "crazy"
			};
			
			// Verificar si el adjetivo ingresado se encuentra en el objeto de traducciones
			if (adjetivo.toLowerCase() in traducciones) {
				document.getElementById("resultado").innerHTML = "El adjetivo en ingles es: " + "<strong>" + traducciones[adjetivo.toLowerCase()] + "</strong>";
				document.getElementById("resultado").style.display = "flex";
			} else {
				document.getElementById("resultado").innerHTML = "Lo siento, no tengo la traducción de ese adjetivo.";
				document.getElementById("resultado").style.display = "flex";
			}
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




