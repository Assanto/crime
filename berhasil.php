<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil</title>

    <style type="text/css">
    	
    	* {
    		text-align: center;
    		background-image: url(img/BackgroundWebSuccess.webp);
    	}

    	h1, h4, a {
    		color: #0accc2;
    	}

    	a {
    		background-color: white;
    	}
    	.green {
    		color: #53f547;
    	}
    	.white {
    		color: white;
    	}
    	.orange {
    		color: orange;
    	}
    	.red {
    		color: red;
    	}
    	.black {
    		color: black;
    	}
    </style>

</head>
<body>
    <a href="logout.php">LogOut</a>
    <br><br><br><br>
    <h1>How To Defeat Crime</h1>
    <h4>Web By : Assanto | Source : Youtube VinOscar</h4>
    <br><br>
   
    <img src="img/Card.png" width="350px">
	

	<h1 class="green">Villains</h1>
    <br>


	<!-- Big Bertha -->
    
    <h1 class="green">< Big Bertha ></h1>
    <img src="img/BigBertha.png" width="100px">
    <img src="img/KillBigBertha.png" width="350px">


    <!-- Jimmy Snow -->
    <h1 class="green">< Jimmy Snow ></h1>
    <img src="img/JimmySnow.png" width="100px">
    <img src="img/KillJimmySnow.png" width="350px">


    <!-- Shockinator -->
    <h1 class="green">< Shockinator ></h1>
    <img src="img/Shockinator.png" width="100px">
    <img src="img/KillShockinator.png" width="350px">


    <!-- The Firebug -->
    <h1 class="green">< The Firebug ></h1>
    <img src="img/TheFirebug.png" width="100px">
    <img src="img/KillTheFirebug.png" width="350px">

    <h1 class="white">--------------------------</h1>
 

    <h1 class="orange">Masterminds</h1>

    <!-- Dragon Hand -->
    <h1 class="orange">< Dragon Hand ></h1>
    <img src="img/DragonHand.png" width="100px">
    <img src="img/KillDragonHand.png" width="350px">


    <!-- Generic Thug #17 -->
    <h1 class="orange">< Generic Thug #17 ></h1>
    <img src="img/GenericThug.png" width="100px">
    <img src="img/KillGenericThug.png" width="350px">


    <!-- Professor Pummel -->
    <h1 class="orange">< Professor Pummel ></h1>
    <img src="img/ProfessorPummel.png" width="100px">
    <img src="img/KillProfessorPummel.png" width="350px">


    <!-- Kat 5 -->
    <h1 class="orange">< Kat 5 ></h1>
    <img src="img/Kat5.png" width="100px">
    <img src="img/KillKat5.png" width="350px">

	<h1 class="white">--------------------------</h1>

	<h1 class="red">SuperVillains</h1>

    <!-- Dr. Destructo -->
    <h1 class="red">< Dr. Destructo ></h1>
    <img src="img/DrDestructo.png" width="100px">
    <img src="img/KillDrDestructo.png" width="350px">


    <!-- Z Everett Koop -->
    <h1 class="red">< Z Everett Koop ></h1>
    <img src="img/ZEverett.png" width="100px">
    <img src="img/KillZEverett.png" width="350px">  


    <!-- Almighty Seth -->
    <h1 class="red">< Almighty Seth ></h1>
    <img src="img/Almighty.png" width="100px">
    <img src="img/KillAlmighty.png" width="350px"> 


    <!-- Almighty Seth -->
    <h1 class="red">< Devil Ham ></h1>
    <img src="img/DevilHam.png" width="100px">
    <img src="img/KillDevilHam.png" width="350px">


    <!-- Ms. Terry -->
    <h1 class="black">< Ms.Terry ></h1>
    <img src="img/MsTerry.png" width="100px">
    <img src="img/KillMsTerry.png" width="350px">

    <p class="white">&copy Copyrights 2022</p>




</body>
</html>




