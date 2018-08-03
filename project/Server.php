<?php 
   /*define("SERVER","http://localhost");
   define("USER","");
   define("PASSWORD","");
   define("DB","");*/
   
  /* $response = array();
   $mysql = new mysqli(SERVER,USER,PASSWORD,DB);
   if ($mysql->connect_error) {
   	echo "error !<br>";
   }
   else{*/
   	$jsonData=file_get_contents("Hajj.json");
   	$jsonDecode=json_decode($jsonData);
    $i=count($jsonDecode)-1;
    $result=array();
    if(is_array($jsonDecode))
    {
      while($i) 
      {
      	if($jsonDecode[$i]->Temp!=37)
      	{
      		if ($jsonDecode[$i]->Temp<34 || $jsonDecode[$i]->Temp > 40) {
      			//danger
      			array_push($result, "Danger !!");
      		}
      		else
      		{
      			//tanbih
      			array_push($result, "Caution");
      		}
      	}
        $i--;

      }

      
    	
    }
    //echo $_POST['first_name'];
   //}


 ?>