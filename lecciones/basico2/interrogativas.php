<!DOCTYPE html>
<html>
  <head>
    <title>Palabras interrogativas en inglés</title>
    <link rel="shortcut icon" href="../../assets/img/icon.png">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background: rgb(88,99,136);
        background: linear-gradient(232deg, rgba(88,99,136,1) 0%, rgba(0,52,116,1) 50%, rgba(90,95,255,1) 100%);
      }
      h1 {
        text-align: center;
      }
      .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
      }
      .question {
        width: 150px;
        height: 150px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        margin: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: all 0.2s ease;
        border:solid 5px black ;
        border-radius:10px;
      }
      .question:hover {
        background-color: #bebebe;
        transform: scale(1.1);
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
      }
      .question.active {
        background-color: #00bfff;
        color: #fff;
      }
      .definitions-container {
        position: relative;
        background-color: #b5b5b5;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 30%;
        margin:0 auto;
        margin-bottom:30px;
        margin-top:30px;
        border:solid 5px black ;
        border-radius:10px;
        transition: all 0.2s ease-in-out;
      }
      .definitions-container:hover{
        background-color: whitesmoke;
        transform: scale(1.1);
      }
      footer {
        
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
    header {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #2c3e50;
      padding: 10px;
    }

    #logoQe {
      width: 20%;
    }
    @media screen and (max-width: 400px) {
      header {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #2c3e50;
      padding: 10px;
    }

    #logoQe {
      width: 50%;
    }
      .definitions-container {
          width: 80%;
      }
      .question{
        padding: 20px;
        width: 20%;
        height: 20%;
        text-align:center;
      }
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
    <h1>Palabras interrogativas en inglés</h1>
    <div class="container"></div>
    <div class="definitions-container">
      <h2>Definición</h2>
      <div class="definitions"></div>
    </div>
    <a href="../../basico2.php">
			<button id="button-back">regresar</button>
		</a>
    <br><br>
    
    <script>
      const questions = [
        "What",
        "Where",
        "When",
        "Who",
        "Why",
        "How",
        "How much",
        "How many",
        "How often",
        "How long",
        "How far"
      ];

      const definitions = {
        "What": "Qué",
        "Where": "Dónde",
        "When": "Cuándo",
        "Who": "Quién",
        "Why": "Por qué",
        "How": "Cómo",
        "How much": "Cuánto",
        "How many": "Cuántos",
        "How often": "Con qué frecuencia",
        "How long": "Cuánto tiempo",
        "How far": "A qué distancia"
      };

      const container = document.querySelector(".container");
      const definitionsContainer = document.querySelector(".definitions");

      questions.forEach(question => {
        const div = document.createElement("div");
        div.classList.add("question");
        div.textContent = question;
        div.addEventListener("click", () => {
          container.querySelectorAll(".question").forEach(question => {
            question.classList.remove("active");
          });
          div.classList.add("active");
          const questionWord = div.textContent;
          const definition = definitions[questionWord];
          const definitionEl = document.createElement("p");
          definitionEl.textContent = definition;
          definitionsContainer.innerHTML = "";
          definitionsContainer.appendChild(definitionEl);
        });
        container.appendChild(div);
      });
    </script>
  </body>
  <footer>
            <p>© 2023 QUICKENG </p>
			
     </footer>
</html>