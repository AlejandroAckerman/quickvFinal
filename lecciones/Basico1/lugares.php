<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lugares Básicos en Inglés</title>
	<style>
		/* Fuentes */
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap');

/* Estilos generales */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}

body {
	background: rgb(85,83,83);
	background: linear-gradient(53deg, rgba(85,83,83,1) 15%, rgba(18,54,19,1) 84%);
  	color: whitesmoke;
}
header {
	background-color: #2c3e50;	
	text-align: center; /* Centrar contenido */
}
#logoQe{
	position: relative;
	left:35%;
	width:20%;
}

h1, h2 {
  text-align:center;
  font-weight: 700;
  margin-bottom: 10px;
  padding:20px;
}
h1{
	padding:10px;
	background-color:#262626;
	color:white;

}

ul {
	text-align:center;
  list-style: none;
  margin: 20px 0;
}

li {
  margin-bottom: 10px;
}

p {
	text-align:center;
  margin-bottom: 20px;
}

a {
  color: #444;
  text-decoration: none;
}

/* Estilos para los formularios */
form {
  margin-bottom: 20px;
}

form label {
  display: block;
  margin-bottom: 5px;
}

form input[type="text"],
form button[type="submit"] {
  padding: 10px;
  border-radius: 5px;
  border: none;
  margin-bottom: 10px;
  font-size: 16px;
}

form button[type="submit"] {
  background-color: #008CBA;
  color: #fff;
  cursor: pointer;
}

/* Estilos para los resultados */
#resultado { 
  display:flex;
  margin:0 auto;
  width: 30%;
  background-color:white;
  border:solid 3px black;
  border-radius:5px;
  box-shadow:0 0 2px black;
  text-align:center;
  margin-top: 10px;
  padding: 10px;
  border-radius: 5px;
  text-align:center;
  color:black;
}

.acierto {
  color: green;
  background-color: #a3f7a3;
}

.error {
  color: red;
  background-color: #f7a3a3;
}

/* Estilos para las imágenes */
.imagen-form {
  width: 100%;
  max-width: 200px;
  margin-bottom: 10px;
}

/* Estilos para el botón de regresar */
#button-back {
  display:flex;
  margin :0 auto ;
  background-color: #ddd;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  color: #444;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}

#button-back:hover {
  background-color: #ccc;
}
#traductor{
	justify-content:center;
	margin:0 auto;	
	background: rgb(43,42,42);
	background: linear-gradient(53deg, rgba(43,42,42,1) 15%, rgba(141,143,141,1) 65%);
	width: 100%;
	padding:20px;
	text-align:center;
	border-bottom:solid 10px #2c3e50;

}
#form-lugar{
	display:flex;
	justify-content:center;
	margin:0 auto;
	text-align:center;
	padding: 10px;
}
#traductor ul{
  width: 30%;
  background-color:white;
  border:solid 3px black;
  border-radius:5px;
  box-shadow:0 0 5px black;
  text-align:center;
  padding:10px;
  
}
#lista-lugares{
	color:black;
	display:flex;
	margin:0 auto;
	justify-content:center;

}

footer {
	width: 100%;
	background-color: #333;
	color: #fff;
	padding: 10px;
	text-align: center;
}
#form-preguntas{
	padding:10px;
	display: flex;
	justify-content:center;
}
	</style>

</head>
<body>
<header>
			<a href="../../basico1.php">
				<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe">
			</a>
	</header>
	<div id="traductor">
			<h1>Lugares Básicos en Inglés</h1>
			<br>
		<main>
			<section>
				<h2>¿Por qué es útil conocer estos lugares?</h2>
				<p>En inglés, existen varios lugares básicos que es útil conocer para poder comunicarse en situaciones cotidianas. Algunos de ellos son:</p>
				<div id="lista-lugares">
					<ul>
						<li>Supermarket (supermercado)</li>
						<li>Library (biblioteca)</li>
						<li>Park (parque)</li>
						<li>Hospital (hospital)</li>
						<li>Store (tienda)</li>
					</ul>
				</div>
			</section>
	
			<section >
				
				<form id="form-lugar">
					<h2>Practica tu inglés</h2>
					
					<label for="lugar">Ingresa un lugar en español para saber cómo se dice en inglés:</label>
					<input type="text" id="lugar" name="lugar">
					<button type="submit">Enviar</button>
				</form>
				<p id="resultado"></p>
			</section>
		</main>
	</div>	

	<h1>Preguntas y respuestas</h2>
		<p>escribe el color de los siguientes objetos :</p>
		<br>
		<div id="form-preguntas">
			<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
				<div>
					<div>
						<img class="imagen-form"  src="../../assets/img/bank.png" alt="" srcset="">
					</div>
					
					<input type="text" id="q1" autocomplete="off"required>
				</div>
				<div>
					<div >
						<img class="imagen-form" src="../../assets/img/playa.avif" alt="" srcset="">
					</div>
					
					<input type="text" autocomplete="off" id="q2"required>
				</div>
				<div>
					<div>
						<img class="imagen-form" src="../../assets/img/park.png" alt="" srcset="">
					</div>
					
					<input type="text" autocomplete="off" id="q3"required>
				</div>
				<div>
					<div>
						<img class="imagen-form" src="../../assets/img/church.png" alt="" srcset="">
					</div>
					
					<input type="text"  autocomplete="off" id="q4"required>
				</div>
				<div>
					<div>
						<img class="imagen-form" src="../../assets/img/cinema.jpg" alt="" srcset="">
					</div>
					
					<input type="text"  autocomplete="off" id="q5" required>
				</div>

				<button type="submit">Enviar respuestas</button>
			</form>
		</div>
		<a href="../../basico1.php">

			<button id="button-back">regresar</button>
		</a>
		<br>
		<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
	<script>
		// Definimos los lugares en inglés y su traducción al español
		const lugares = {
			'supermercado': 'supermarket',
			'biblioteca': 'library',
			'parque': 'park',
			'hospital': 'hospital',
			'tienda': 'store',
			'escuela': 'school',
			'cafetería': 'coffee shop',
			'cine': 'cinema',
			'estación de policía': 'police station',
			'estación de bomberos': 'fire station',
			'galería de arte': 'art gallery',
			'museo': 'museum',
			'teatro': 'theatre',
			'iglesia': 'church',
			'mezquita': 'mosque',
			'templo': 'temple',
			'sinagoga': 'synagogue',
			'estadio': 'stadium',
			'zoológico': 'zoo',
			'playa': 'beach',
			'banco': 'bank',
			'lago': 'lake'
		};


		// Obtiene la referencia al formulario
		const form = document.querySelector('#form-lugar');
		// Agrega un escucha al evento submit del formulario
		form.addEventListener('submit', (event) => {
			event.preventDefault(); // Previen la recarga de la página
			const lugarElegido = document.getElementById('lugar').value.trim().toLowerCase();
			// Comprueba si el lugar ingresado está en la lista
			if (lugarElegido in lugares) {
				const lugarEnIngles = lugares[lugarElegido];
				document.getElementById('resultado').innerHTML = `el lugar en inglés es:<strong>&nbsp  ${lugarEnIngles}</strong>`;
			} else {
				document.getElementById('resultado').textContent = 'Lo siento, no reconozco ese lugar.';
			}
		});
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
				if (q1 === "bank") {
					document.getElementById("q1").classList.add("acierto");
				} else {
					
					document.getElementById("q1").classList.add("error");
				}
				if (q2 === "beach") {
					
					document.getElementById("q2").classList.add("acierto");
				} else {
					
					document.getElementById("q2").classList.add("error");
				}
				if (q3 === "park") {
					
					document.getElementById("q3").classList.add("acierto");
				} else {
					
					document.getElementById("q3").classList.add("error");
				}
				if (q4 === "church") {
					
					document.getElementById("q4").classList.add("acierto");
				} else {
					
					document.getElementById("q4").classList.add("error");
				}
				if (q5 === "cinema") {
					
					document.getElementById("q5").classList.add("acierto");
				} else {
					
					document.getElementById("q5").classList.add("error");
				}
			}


	</script>
</body>
</html>