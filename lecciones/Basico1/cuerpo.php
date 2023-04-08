<!DOCTYPE html>
<html>
<head>
	<title>Parts of the Body</title>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);
			color:white;
		}
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
		
		h1 {
			text-align: center;
			font-size: 2.5rem;
		}
		
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-top: 2rem;
		}
		
		.part {
			margin: 1rem;
			text-align: center;
			cursor: pointer;
			transition: transform 0.2s ease-in-out;
		}
		
		.part:hover {
			transform: scale(1.1);
			
		}
		
		.part img {
			width: 150px;
			height: 150px;
			object-fit: cover;
			object-position: center;
			border-radius: 50%;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			margin-bottom: 0.5rem;
		}
		
		.part p {
			font-size: 1.2rem;
			font-weight: bold;
		}
		
		.modal {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 9999;
			overflow: auto;
			padding: 2rem;
		}
		
		.modal-content {
			background-color: #fff;
			border-radius: 10px;
			max-width: 500px;
			margin: 0 auto;
			padding: 2rem;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		
		.modal-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 1rem;
		}
		
		.modal-header h2 {
			font-size: 2rem;
			font-weight: bold;
			margin: 0;
		}
		
		.modal-header button {
			border: none;
			background-color: transparent;
			color: #666;
			font-size: 2rem;
			cursor: pointer;
			transition: color 0.2s ease-in-out;
		}
		
		.modal-header button:hover {
			color: #000;
		}
		
		.modal-body p {
			font-size: 1.5rem;
			line-height: 2rem;
			text-align: justify;
		}
		footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
			bottom: ;
		}
		
		.cuerpo-img:hover{
			box-shadow: 10px 10px 10px darkgrey;
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
	<h1>Parts of the Body</h1>
	<div class="container">
		<div class="part" onclick="showModal('head')">
			<img class="cuerpo-img"src="../../assets/img/head.jfif" alt="Head">
			<p>Head</p>
		</div>
		<div class="part" onclick="showModal('neck')">
			<img class="cuerpo-img" src="../../assets/img/neck.jpg" alt="Neck">
			<p>Neck</p>
		</div>
    <div class="part" onclick="showModal('shoulder')">
			<img class="cuerpo-img" src="../../assets/img/shoulder.jpg" alt="Shoulder">
			<p>Shoulder</p>
		</div>
		<div class="part" onclick="showModal('arm')">
			<img class="cuerpo-img" src="../../assets/img/arm.jfif" alt="Arm">
			<p>Arm</p>
		</div>
		<div class="part" onclick="showModal('elbow')">
			<img class="cuerpo-img" src="../../assets/img/elbow.jpg" alt="Elbow">
			<p>Elbow</p>
		</div>
		<div class="part" onclick="showModal('wrist')">
			<img class="cuerpo-img" src="../../assets/img/wrist.jpg" alt="Wrist">
			<p>Wrist</p>
		</div>
		<div class="part" onclick="showModal('hand')">
			<img class="cuerpo-img" src="../../assets/img/hand.jpg" alt="Hand">
			<p>Hand</p>
		</div>
		<div class="part" onclick="showModal('finger')">
			<img class="cuerpo-img" src="../../assets/img/finger.jpeg" alt="Finger">
			<p>Finger</p>
		</div>
		<div class="part" onclick="showModal('chest')">
			<img class="cuerpo-img" src="../../assets/img/chest.webp" alt="Chest">
			<p>Chest</p>
		</div>
		<div class="part" onclick="showModal('abdomen')">
			<img class="cuerpo-img" src="../../assets/img/abdomen.jpg" alt="Abdomen">
			<p>Abdomen</p>
		</div>
		<div class="part" onclick="showModal('hip')">
			<img class="cuerpo-img" src="../../assets/img/hip.webp" alt="Hip">
			<p>Hip</p>
		</div>
		<div class="part" onclick="showModal('leg')">
			<img class="cuerpo-img" src="../../assets/img/leg.jpg" alt="Leg">
			<p>Leg</p>
		</div>
		<div class="part" onclick="showModal('knee')">
			<img class="cuerpo-img" src="../../assets/img/knee.jfif" alt="Knee">
			<p>Knee</p>
		</div>
		<div class="part" onclick="showModal('ankle')">
			<img class="cuerpo-img" src="../../assets/img/ankle.jpg" alt="Ankle">
			<p>Ankle</p>
		</div>
		<div class="part" onclick="showModal('foot')">
			<img class="cuerpo-img" src="../../assets/img/foot.jfif" alt="Foot">
			<p>Foot</p>
		</div>
		<div class="part" onclick="showModal('toe')">
    <img class="cuerpo-img" src="../../assets/img/toe.jpg" alt="Toe">
			<p>Toe</p>
		</div>
	</div>
    <!-- Modal -->


<div id="modal" class="modal">
	<div class="modal-content">
		<span class="close" onclick="hideModal()">&times;</span>
		<h2 id="part-name"></h2>
		<img id="part-image" src="../../assets/img/" alt="">
		<p id="part-description"></p>
	</div>
</div>

<a href="../../basico1.php">
			<button id="button-back">regresar</button>
		</a>
		
<!-- JavaScript -->
<script>
	// Show modal when a body part is clicked
	function showModal(part) {
		// Get the modal and set its display to block
		var modal = document.getElementById("modal");
		modal.style.display = "block";

		// Get the body part's name, image source, and description
		var name = "";
		var imageSrc = "";
		var description = "";

		if (part == "head") {
			name = "Head";
			imageSrc = "";
			description = "The part of the body that contains the brain, eyes, ears, nose, and mouth.";
		} else if (part == "neck") {
			name = "Neck";
			imageSrc = "";
			description = "The part of the body that connects the head to the torso.";
		} else if (part == "shoulder") {
			name = "Shoulder";
			imageSrc = "";
			description = "The joint where the arm connects to the torso.";
		} else if (part == "arm") {
			name = "Arm";
			imageSrc = "";
			description = "The upper limb of the body that connects the shoulder to the elbow.";
		} else if (part == "elbow") {
			name = "Elbow";
			imageSrc = "";
			description = "The joint where the upper arm bone meets the forearm bones.";
		} else if (part == "wrist") {
			name = "Wrist";
			imageSrc = "";
			description = "The joint that connects the hand to the forearm.";
		} else if (part == "hand") {
			name = "Hand";
			imageSrc = "";
			description = "The body part at the end of the arm that includes the fingers and thumb.";
		} else if (part == "finger") {
			name = "Finger";
			imageSrc = "";
			description = "One of the five digits on the hand that is used for grasping objects.";
		} else if (part == "chest") {
			name = "Chest";
			imageSrc = "";
			description = "The part of the body between the neck and abdomen that houses the heart and lungs.";
		} else if (part == "stomach") {
		 name = "Stomach";
			imageSrc = "";
			description = "The organ in the body where food is digested.";
		} else if (part == "hip") {
			name = "Hip";
			imageSrc = "";
			description = "The joint where the leg connects to the pelvis.";
		} else if (part == "leg") {
			name = "Leg";
			imageSrc = "";
			description = "The lower limb of the body that connects the hip to the knee.";
		} else if (part == "knee") {
			name = "Knee";
			imageSrc = "";
			description = "The joint where the thigh bone meets the shin bone.";
		} else if (part == "ankle") {
			name = "Ankle";
			imageSrc = "";
			description = "The joint that connects the foot to the leg.";
		} else if (part == "foot") {
			name = "Foot";
			imageSrc = "";
			description = "The body part at the end of the leg that includes the toes.";
		} else if (part == "toe") {
			name = "Toe";
			imageSrc = "";
			description = "One of the five digits on the foot that is used for balance and walking.";
			// Set the modal's name, image source, and description
			var modalName = document.getElementById("part-name");
			modalName.innerHTML = name;

			var modalImage = document.getElementById("part-image");
			modalImage.src = imageSrc;

			var modalDescription = document.getElementById("part-description");
			modalDescription.innerHTML = description;
		}

	// Hide modal when the close button is clicked
	function hideModal() {
		var modal = document.getElementById("modal");
		modal.style.display = "none";
	}
</script>
</body>
<br><br><br><br><br>
<footer>
            <p>© 2023 QUICKENG </p>
			
 </footer>
</html>	
