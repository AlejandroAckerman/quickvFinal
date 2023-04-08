<!DOCTYPE html>
<html>
<head>
	<title>Animales en inglés</title>
	<link rel="shortcut icon" href="../../assets/img/icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	body {
		font-family: Arial, sans-serif;
		margin: 0;
		padding: 0;
		background: rgb(85,83,83);
		background: linear-gradient(53deg, rgba(85,83,83,1) 24%, rgba(0,29,120,1) 70%);
		
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

	h1 {
		color:white;
		text-align: center;
		margin: 50px 0 30px;
		font-size: 36px;
	}

	h2 {
		color:white;
		text-align: center;
		margin-bottom: 50px;
		font-size: 24px;
	}

	.animal-box {
		display: inline-block;
		width: 150px;
		height: 150px;
		margin: 10px;
		border: 2px solid black;
		border-radius:5px; 
		box-shadow:0 0 10px black;
		text-align: center;
		font-size: 24px;
		font-weight: bold;
		line-height: 150px;
		cursor: pointer;
		background: rgb(115,114,114);
		background: linear-gradient(53deg, rgba(115,114,114,1) 0%, rgba(177,177,177,1) 56%);
		transition: all 0.2s ease-in-out;
	}

	.animal-box:hover {
		background: rgb(115,114,114);
		background: linear-gradient(53deg, rgba(115,114,114,1) 0%, rgba(203,200,200,1) 56%);
		border-color: #3498db;
		transform: scale(1.1);
	}

	.img-animal {
		width: 80%;
		height: 80%;
		object-fit: cover;
	}

	#animal-info {
		display: flex;
		margin: 0 auto;
		width: 70%;
		background-color:white;
		border:solid 3px black;
		text-align: center;
		font-size: 24px;
		margin-top: 50px;
		padding: 20px;
		border-radius:5px; 
		box-shadow:0 0 10px black;
	}

	#animal-info strong {
		color: #3498db;
	}
	footer {
		width: 100%;
		background-color: #333;
		color: #fff;
		padding: 10px;
		text-align: center;
		position: relative;
		bottom:-150px;
	}
	

</style>

	</style>
</head>
<body>
<header>
			<a href="../../basico1.php">
				<img id="logoQe"src="../../assets/img/LOGO.png" alt="logoqe">
			</a>
</header>
	<h1>Animales en inglés</h1>
	<h2>presiona el animal para conocer más sobre él</h2>
	<div >
		<div class="animal-box" onclick="showAnimal('Dog')">
			<img class="img-animal" src="../../assets/img/perro2.png" alt="">
			
		</div>
		<div class="animal-box" onclick="showAnimal('Cat')">
			<img class="img-animal" src="../../assets/img/cat.png" alt="">
		</div>
		<div class="animal-box" onclick="showAnimal('Bird')">
			<img class="img-animal" src="../../assets/img/bird.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('Fish')">	
			<img class="img-animal" src="../../assets/img/fish.png" alt="">
		</div>
		<div class="animal-box" onclick="showAnimal('Rabbit')">
			<img class="img-animal" src="../../assets/img/rabbit.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('Horse')">	
			<img class="img-animal" src="../../assets/img/horse.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('Turtle')">
			<img class="img-animal" src="../../assets/img/turtle.png" alt="">
		</div>
		<div class="animal-box" onclick="showAnimal('Snake')">
			<img class="img-animal" src="../../assets/img/snake.png" alt="">
		</div>
		<div class="animal-box" onclick="showAnimal('Frog')">
			<img class="img-animal" src="../../assets/img/frog.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('Cow')">
			<img class="img-animal" src="../../assets/img/cow.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('monkey')">
			<img class="img-animal" src="../../assets/img/monkey.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('chicken')">
			<img class="img-animal" src="../../assets/img/chicken.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('donkey')">
			<img class="img-animal" src="../../assets/img/donkey.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('lizard')">
			<img class="img-animal" src="../../assets/img/lizard.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('pig')">
			<img class="img-animal" src="../../assets/img/pig.png" alt="">	
		</div>
		<div class="animal-box" onclick="showAnimal('sheep')">
			<img class="img-animal" src="../../assets/img/sheep.png" alt="">	
		</div>
	</div>
	<div id="animal-info"></div>
	<br>
	<footer>
            <p>© 2023 QUICKENG </p>
			
            </footer>
	

<script>
	function showAnimal(animal) {
  let animalInfo = document.getElementById('animal-info');
  
  switch(animal) {
    case 'Dog':
      animalInfo.innerHTML = 'The <strong>&nbsp;dog&nbsp;</strong> is a domesticated mammal and a common household pet.';
      break;
    case 'Cat':
      animalInfo.innerHTML = 'The <strong>&nbsp;cat&nbsp;</strong> is a domesticated mammal and a common household pet, known for its independent personality.';
      break;
    case 'Bird':
      animalInfo.innerHTML = ' <strong>&nbsp;Birds&nbsp;</strong> are feathered, winged animals that lay eggs.';
      break;
    case 'Fish':
      animalInfo.innerHTML = ' <strong>&nbsp;Fish&nbsp;</strong> are aquatic animals with gills that allow them to breathe underwater.';
      break;
    case 'Rabbit':
      animalInfo.innerHTML = '<strong>&nbsp;Rabbits&nbsp;</strong> are small, furry mammals known for their long ears and hopping gait.';
      break;
    case 'Horse':
      animalInfo.innerHTML = '<strong>&nbsp;Horses&nbsp;</strong> are large, strong mammals used for transportation, work, and sport.';
      break; 
    case 'Turtle':
      animalInfo.innerHTML = '<strong>&nbsp;Turtles&nbsp;</strong>are shelled reptiles that can live in water or on land.';
      break;
    case 'Snake':
      animalInfo.innerHTML = '<strong>&nbsp;Snakes&nbsp;</strong>are legless reptiles that come in a variety of shapes and sizes.';
      break;
    case 'Frog':
      animalInfo.innerHTML = ' <strong>&nbsp;Frogs&nbsp;</strong> are amphibians known for their ability to jump and their croaking sound.';
      break;
    case 'Cow':
      animalInfo.innerHTML = ' <strong>&nbsp;Cows&nbsp;</strong> are domesticated mammals primarily raised for meat and dairy products.';
      break;
    case 'monkey':
      animalInfo.innerHTML = '<strong>&nbsp;monkeys&nbsp;</strong> are primates that come in a variety of sizes and colors, and are known for their intelligence and dexterity';
      break;
 	case 'chicken':
      animalInfo.innerHTML = '<strong>&nbsp;chicken&nbsp;</strong> A domesticated bird that is commonly raised for its eggs and meat. Chickens have feathers, a beak, and wings that are not well-suited for flying';
      break;
    case 'donkey':
      animalInfo.innerHTML = '<strong>&nbsp;Donkey&nbsp;</strong>A domesticated mammal that is often used as a pack animal. Donkeys have long ears, a braying call, and are known for being surefooted and hardworking';
      break;
	case 'lizard':
      animalInfo.innerHTML = '<strong>&nbsp;Lizard&nbsp;</strong> A type of reptile that is characterized by its scaly skin and long tail. Lizards come in a variety of sizes and colors and are found all over the world';
      break;
	case 'pig':
      animalInfo.innerHTML = '<strong>&nbsp;Pig&nbsp;</strong> A domesticated mammal that is raised for its meat, lard, and other products. Pigs are known for their curly tails, pink skin, and intelligence';
      break;
	case 'sheep':
      animalInfo.innerHTML = '<strong>&nbsp;Sheep&nbsp;</strong> A domesticated mammal that is raised for its wool, meat, and milk. Sheep have thick woolly coats and are known for their gentle demeanor and tendency to flock together';
      break;  
  }
}

</script>
</body>
</html>



