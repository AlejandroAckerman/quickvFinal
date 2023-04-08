<!DOCTYPE html>
<html>
<head>
	<title>Profesiones en inglés</title>
	<link rel="shortcut icon" href="../../assets/img/g">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background: rgb(43,42,42);
			background: linear-gradient(205deg, rgba(43,42,42,1) 25%, rgba(7,76,168,1) 65%);
		}

		.profesion {
			display:flex;
		}

		.active {
			display: block;
		}

		.btn {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border: none;
			cursor: pointer;
			margin-right: 10px;
		}

		.btn:hover {
			background-color: #3e8e41;
		}
		h1 {
			font-size: 2.5em;
			font-weight: bold;
			color: #333;
			text-transform: uppercase;
		}
		h2 {
			font-size: 1.5em;
			color: #666;
			margin-top: 10px;
		}

		.profesion-img {
			width: 10%;
			margin-top: 20px;
			display: flex;
			border: 1px solid #ccc;
			padding: 5px;
			border-radius: 5%;
			transition: transform 0.3s ease-in-out;
		}
		.profesion-img:hover {
			background-color:whitesmoke;
			transform: scale(1.1);
  			box-shadow: 0 0 5px rgba(0,0,0,0.3);
		}
		#profesion-info {
			background-color: #fff;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-top: 10px;
			background-color:grey;
			font-size:20px;
			
		}
		.btn:hover {
			background-color: #3e8e41;
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
		#cuadro-texto{
			background: rgb(164,162,162);
			background: linear-gradient(63deg, rgba(164,162,162,1) 0%, rgba(255,255,255,1) 34%, rgba(255,251,251,1) 72%, rgba(164,162,162,1) 100%);
			text-align :center;
			width: 70%;
			position:fixed;
			right: 10%;
			top:25%;
			border:solid 5px #202020;
			border-radius:5px;
		}
		#cuadro-texto a{
			padding:10px;
			margin-bottom:;
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
		@media screen and (max-width: 400px) {
			#cuadro-texto{
				font-size:10px;
				position:fixed;
				top:100px;
				width: 70%;
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
<div id="cuadro-texto">
	<h1>profesiones en inglés</h1>
	<h2>click en el profesional  para conocer más sobre él</h2>
	<p>conocer algunas profesiones en inglés es importante si deseas trabajar en un entorno internacional, comunicarte de manera efectiva con personas de diferentes nacionalidades y ampliar tus oportunidades de empleo en diferentes sectores.</p>
	
	<div id="profesion-info"></div>
	<br>	

	<a href="../../basico1.php">
			<button id="button-back">regresar</button>
		</a>
		
</div>

	<div >
		<div class="profesion" onclick="showProfesion('lawyer')">
			<img class="profesion-img" src="../../assets/img/lawyer.webp" alt="">
			
		</div>
		<div class="profesion" onclick="showProfesion('artist')">
			<img class="profesion-img" src="../../assets/img/artist.jpg" alt="">
		</div>
		<div class="profesion" onclick="showProfesion('chef')">
			<img class="profesion-img" src="../../assets/img/chef.webp" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('firefighter')">	
			<img class="profesion-img" src="../../assets/img/firefighter.jpg" alt="">
		</div>
		<div class="profesion" onclick="showProfesion('doctor')">
			<img class="profesion-img" src="../../assets/img/doctor.avif" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('engineer')">	
			<img class="profesion-img" src="../../assets/img/engineer.png" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('teacher')">
			<img class="profesion-img" src="../../assets/img/teacher.webp" alt="">
		</div>
		<div class="profesion" onclick="showProfesion('police')">
			<img class="profesion-img" src="../../assets/img/police.webp" alt="">
		</div>
		<div class="profesion" onclick="showProfesion('actress')">
			<img class="profesion-img" src="../../assets/img/actress.jpg" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('singer')">
			<img class="profesion-img" src="../../assets/img/singer.jpg" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('farmer')">
			<img class="profesion-img" src="../../assets/img/farmer.webp" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('carpenter')">
			<img class="profesion-img" src="../../assets/img/carpenter.jpg" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('plumber')">
			<img class="profesion-img" src="../../assets/img/plumber.webp" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('scientist')">
			<img class="profesion-img" src="../../assets/img/scientist.webp" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('mechanic')">
			<img class="profesion-img" src="../../assets/img/mechanic.jpg" alt="">	
		</div>
		<div class="profesion" onclick="showProfesion('programmer')">
			<img class="profesion-img" src="../../assets/img/programmer.jpg" alt="">	
		</div>
	</div>
	
	<br><br><br><br><br>
	
		<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
	<script>
			function showProfesion(profesion) {
  let profesionInfo = document.getElementById('profesion-info');
  
  switch(profesion) {
    case 'lawyer':
     profesionInfo.innerHTML = ' <strong>lawyer</strong> is professional who provides legal advice and representation to clients in legal matters.';
      break;
    case 'artist':
     profesionInfo.innerHTML = ' <strong>artist</strong> is  person who creates art as a profession or hobby, using a variety of mediums such as paint, clay, or digital software.';
      break;
    case 'chef':
     profesionInfo.innerHTML = ' <strong>chef</strong> is professional cook who prepares food in a restaurant or other food service establishment.';
      break;
    case 'firefighter':
     profesionInfo.innerHTML = ' <strong>firefighter</strong> is the person who is trained to respond to and extinguish fires, as well as provide emergency medical services';
      break;
    case 'doctor':
     profesionInfo.innerHTML = ' <strong>doctor</strong> is a  medical professional who diagnoses and treats illnesses and injuries in patients';
      break;
    case 'engineer':
     profesionInfo.innerHTML = ' <strong>engineer</strong> is the person who applies science and mathematics to design, build, and maintain machines, structures, and systems.';
      break; 
    case 'teacher':
     profesionInfo.innerHTML = ' <strong>teacher</strong> is the professional who educates and instructs students in academic subjects or specific skills.';
      break;
    case 'police':
     profesionInfo.innerHTML = ' <strong>police</strong>  is the law enforcement officer who enforces laws, investigates crimes, and maintains public safety.';
      break;
    case 'actress':
     profesionInfo.innerHTML = ' <strong>actress</strong> is a female actor who performs in film, television, or theater productions.';
      break;
    case 'singer':
     profesionInfo.innerHTML = ' <strong>singer</strong>  is a performer who uses their voice to sing songs or other types of musical compositions.';
      break;
    case 'farmer':
     profesionInfo.innerHTML = ' <strong>farmer</strong> ia the  person who cultivates crops or raises livestock for food or other products.';
      break;
 	case 'carpenter':
     profesionInfo.innerHTML = ' <strong>carpenter</strong>  is a skilled worker who constructs, repairs, or installs wooden structures or furniture.';
      break;
    case 'plumber':
     profesionInfo.innerHTML = ' <strong>plumber</strong>  is a professional who installs and repairs pipes, fixtures, and other plumbing systems.';
      break;
	case 'scientist':
     profesionInfo.innerHTML = ' <strong>scientist</strong>  is a  professional who installs and repairs pipes, fixtures, and other plumbing systems.';
      break;
	case 'mechanic':
     profesionInfo.innerHTML = ' <strong>mechanic</strong> is a skilled worker who repairs and maintains machinery and equipment, such as cars or industrial machinery.';
      break;
	case 'programmer':
     profesionInfo.innerHTML = ' <strong>programmer</strong> is a professional who writes and tests computer programs and software applications.';
      break;  
  }
}
	</script>
</body>
</html>
</html>

