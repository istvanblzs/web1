<?php
// Include the database configuration file
include 'config.php';
$statusMsg = '';
$backlink = ' <a href="./">Vissza</a>';
// File upload path
$targetDir = "uploads/";


$nameErr = $emailErr =  $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    echo " Név megadása kötelező! ". $backlink;
  } 
  
  if (empty($_POST["mail"])) {
    echo " Email megadása kötelező! " . $backlink	;
  } else
  {
	  
	  
	  
	  
if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $mail = $_POST['mail'];
	 $komment = $_POST['komment'];
	 $uploaded_on = date("Y-m-d H:i:s");
	 
	 
}

          
			 $insert = $db->query("INSERT into uzenetek (name, mail, komment, uploaded_on) VALUES ('".$name."','".$mail."','".$komment."','".$uploaded_on."')");
              
		


			 // echo ("INSERT into uzenetek (name, mail, komment, uploaded_on) VALUES ('".$name."','".$mail."','".$komment."','".$uploaded_on."')");
			   if($insert){
                  $statusMsg = mysqli_error($db) . $backlink." ";
					echo $statusMsg;
               }else{
                    $statusMsg = mysqli_error($db) . $backlink." ";
					
                } 
				
				
	  
	  
	  
  }
    
}





?>


