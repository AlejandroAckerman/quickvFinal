<!DOCTYPE html>
<html>
  <head>
  <link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de los Artículos</title>
    <style>
     
	body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
		background: rgb(99,99,102);
		background: linear-gradient(90deg, rgba(99,99,102,1) 0%, rgba(0,1,106,1) 50%, rgba(0,2,255,1) 100%);
		color:white;
    }
      
    header {
			background-color: #2c3e50;	
			text-align: center; /* Centrar contenido */
	}
      
    #logoQe {
        max-width: 200px;
    }
	#logoQe{
			position: relative;
			left:35%;
			width:20%;
	}
      
    #articulos {
        margin: 20px;
		text-align :center;
    }
      
    h1 {
        font-size: 36px;
        margin-top: 0;
    }
      
    p {
        font-size: 18px;
        line-height: 1.5;
    }
      
    .article {
        font-weight: bold;
        font-style: italic;
        color: #4CAF50;
    }
      
    .article-info {
        display: none;
        margin: 20px 0;
        padding: 10px;
        border: 1px solid #4CAF50;
        border-radius: 5px;
        background-color: #F1F1F1;
		color:black;
    }
      
    .article-info h2 {
        font-size: 24px;
        margin-top: 0;
    }
      
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
      
    li {
        margin: 10px 0;
    }
      
    button {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        margin-right: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
     }
      
    button:hover {
        background-color: #3E8E41;
    }
      
    #quiz-form {
        margin: 20px auto;
		text-align:center;
		width: 50%;
    }
      
    #quiz-form div {
		text-align:center;
        margin-bottom: 20px;
		
    }
      
    label {
        display: block;
        font-size: 18px;
        margin-bottom: 10px;
 	}
      
    input[type="text"] {
        font-size: 18px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
    }
      
	button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
      
    button[type="submit"]:hover {
        background-color: #3E8E41;
    }
	.article-info {
		display: none;
	}

	.article-info.show {
		display: block;
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
		margin-bottom:20px;
		}

	#button-back:hover{
		background-color: #FF554D;
	}
	.acierto {
		color: green;
		background-color: #a3f7a3;
	}

	.error {
		color: red;
			background-color: #f7a3a3;
	}
	footer {
		width: 100%;
		bottom: 0;
		background-color: #333;
		color: #fff;
		padding: 0.5%;
		text-align: center;
	}
	.boton-info{
		width: 150px;
		height: 150px;
		font-size:50px;
		border:solid 3px #065001;
		transition: all 0.2s ease-in-out;
	}
	.boton-info:hover{
		transform: scale(1.1);
	}

    </style>
  </head>
  <body>
  <header>
			<a href="../../basico1.php">
				<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe">
			</a>
	</header>
	<div  id="articulos">
		<h1>Uso de los Artículos</h1>
		<h2>Los artículos son palabras que se utilizan antes de los sustantivos para indicar si estos son conocidos o desconocidos, o si se están utilizando en un sentido general o específico. En inglés, existen tres artículos: <span class="article">A</span>, <span class="article">An</span> y <span class="article">The</span>.</h2>
		<p>  presiona el articulo para conocer mas </p>
		<button class="boton-info"id="boton1"  onclick="toggleInfo('arti-a')">
			A
		</button>
		<button class="boton-info"id="boton2"  onclick="toggleInfo('arti-an')">
			AN
		</button>
		<button class="boton-info" id="boton3"  onclick="toggleInfo('arti-the')">
			THE
		</button>
		
		<div id="arti-a" class="article-info">
			<h2>El Artículo "A"</h2>
			<p>El artículo <span class="article">A</span> se utiliza delante de sustantivos en singular que comienzan por una consonante o un sonido de consonante. Ejemplo:</p>
			<ul>
			<li><span class="article">A</span> dog (un perro)</li>
			<li><span class="article">A</span> book (un libro)</li>
			<li><span class="article">A</span> house (una casa)</li>
			</ul>
		</div>
		
		<div  id="arti-an" class="article-info">
			<h2>El Artículo "An"</h2>
			<p>El artículo <span class="article">An</span> se utiliza delante de sustantivos en singular que comienzan por una vocal o un sonido de vocal. Ejemplo:</p>
			<ul>
			<li><span class="article">An</span> apple (una manzana)</li>
			<li><span class="article">An</span> umbrella (un paraguas)</li>
			<li><span class="article">An</span> hour (una hora)</li>
			</ul>
		</div>	
		
		<div  id="arti-the" class="article-info">
			<h2>El Artículo "The"</h2>
			<p>El artículo <span class="article">The</span> se utiliza delante de sustantivos en singular o plural para indicar que estos son conocidos o específicos. Ejemplo:</p>
				<ul>
				<li><span class="article">The</span> sun (el sol)</li>
				<li><span class="article">The</span> students (los estudiantes)</li>
				<li><span class="article">The</span> book (el libro)</li>
				</ul>
				<p>También se utiliza <span class="article">The</span> delante de sustantivos en singular o plural que se refieren a algo único o que es considerado como una categoría completa. Ejemplo:</p>
					<ul>	
					<li><span class="article">The</span> moon (la luna)</li>
					<li><span class="article">The</span> internet (el internet)</li>
					<li><span class="article">The</span> environment (el medio ambiente)</li>
				</ul>
		</div>		
	</div>
	
	
			<form id="quiz-form" action="" method="post" onsubmit="validarRespuestas();">
				<h2>Preguntas y respuestas</h2>
				<p>escribe el articulo correcto</p>
				<div>
					<label for="q1">___ flower is red</label>
					<input type="text" id="q1" autocomplete="off"required>
				</div>
				<div>
					<label for="q2">I would like _________  chocolate muffin</label>
					<input type="text" autocomplete="off" id="q2"required>
				</div>
				<div>
					<label for="q3">We will spend more than ______ hour there</label>
					
					
					<input type="text" autocomplete="off" id="q3"required>
				</div>
				<div>
					<label for="q4">I think studying is ______ best thing you can do.</label>
					
					
					<input type="text"  autocomplete="off" id="q4"required>
				</div>
				<div>
					<label for="q5">I love the place you live, it’s _____ nice house.</label>
					
					
					<input type="text"  autocomplete="off" id="q5" required>
				</div>

				<button type="submit">Enviar respuestas</button>
			</form>
		
		<br>
		<a href="../../basico2.php">
			<button id="button-back">regresar</button>
		</a>

	<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
	<script>
		function toggleInfo(id) {
			var info = document.getElementById(id);
			info.classList.toggle('show');
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
				if (q1 === "the") {
					document.getElementById("q1").classList.add("acierto");
				} else {
					
					document.getElementById("q1").classList.add("error");
				}
				if (q2 === "a") {
					
					document.getElementById("q2").classList.add("acierto");
				} else {
					
					document.getElementById("q2").classList.add("error");
				}
				if (q3 === "an") {
					
					document.getElementById("q3").classList.add("acierto");
				} else {
					
					document.getElementById("q3").classList.add("error");
				}
				if (q4 === "the") {
					
					document.getElementById("q4").classList.add("acierto");
				} else {
					
					document.getElementById("q4").classList.add("error");
				}
				if (q5 === "a") {
					
					document.getElementById("q5").classList.add("acierto");
				} else {
					
					document.getElementById("q5").classList.add("error");
				}
			}
			
			
	</script>
</body>
</html>