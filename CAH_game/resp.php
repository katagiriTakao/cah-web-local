<?php

$carta=$_POST['card'];
$resp=$_POST['ans'];






echo"


<!DOCTYPE html>
	<html lang='es'>


<!----------------------------------------------------------------------------------------------->
		<head>


				<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
				

				<style>


					body {
					    background-image: url('resources/fondito.gif');
					    background-size: auto;
					   	color:WHITE;


					}


					button {
						background-color: 	#999999;
					    border: none;
					    color: white;
					    padding: 15px 32px;
					    text-align: center;
					    text-decoration: none;
					    display: inline-block;
					    font-size: 36px;
					}



				</style>


			 
			 	<meta charset='utf-8'>

      			<meta name = 'viewport' content = 'width = device-width, initial-scale = 1'>      
  
      

  		</head>


<!----------------------------------------------------------------------------------------------->

   
   <body class = 'container'> 



   	<img id='demo' src='qs/".$carta.".png' style=' right:0; top:0;  margin:0;  padding:0;   position:fixed' alt='' > 
   	</br>  ";




   	switch($carta){


   		case 6:
   		case 22:
   		case 29:
   		case 36:
   		case 38:
   		case 47:
   		case 48:
   		case 77:
   		case 81:
   		case 86:
   		case 88:
///////////////////////////////////////2 cartas/////////////////////////////////////////

   				$result= explode(",",$resp);
   				$tama= sizeof($result);

   				for ($a=0;$a<$tama;$a++){
   					echo "<button  onclick='myFunction(".$a.")'>Click Me</button>";
   				
   					echo "<div id='".$a."' style='display:none'>";	
		   					echo "<img  src='ans/".$result[$a].".png' style='   '>";
							echo "<img  src='ans/".$result[$a+1].".png' style='   '>";
					

					echo "</div>";					
					echo "</br>";
					$a+=1;

   				}





   		
////////////////////////////////////////////////////////////////////////////////////////
   			break;
   		case 65:
   		case 82:
///////////////////////////////////////3 cartas/////////////////////////////////////////
   		   		$result= explode(",",$resp);
   				$tama= sizeof($result);

   				for ($a=0;$a<$tama;$a++){
   					echo "<button  onclick='myFunction(".$a.")'>Click Me</button>";
   				
   					echo "<div id='".$a."' style='display:none;'>";	
   						echo "<img  src='ans/".$result[$a].".png' style='   '>";
						echo "<img  src='ans/".$result[$a+1].".png' style='   '>";
						echo "<img  src='ans/".$result[$a+2].".png' style='   '>";
					

					echo "</div>";
					echo "</br>";
					$a+=2;

   				}






   		
////////////////////////////////////////////////////////////////////////////////////////
   			break;
   		default:

/////////////////////////////////////////1 carta//////////////////////////////////////////
				$result= explode(",",$resp);

				foreach($result as $key){
					echo "<button  onclick='myFunction(".$key.")'>Click Me</button>";
   				
   					echo "<div id='".$key."' style='display:none;'>";	
						echo "<img  src='ans/".$key.".png' style='  ; width:50%;'>";
					echo "</div>";
					echo "</br>";



				}

//////////////////////////////////////////////////////////////////////////////////////////		   			
			break;












   	}




echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


echo"




	


		



		<script>
			function myFunction(r) {
						

						var x = document.getElementById(r);
						if (x.style.display == 'none'){
							x.style.display ='block';
						}else{
							x.style.display ='none'
						}



			};
		</script>




	</body>

<!----------------------------------------------------------------------------------------------->

	</html>








";














?>