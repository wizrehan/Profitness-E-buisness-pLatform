<?php
  $conn = mysqli_connect("localhost", "root", "", "profitness");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $Email = $_POST['email'];
	  $Password = $_POST['password'];
	  
   $sql = "select * from register where email= '$Email' and password = '$Password'";
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);
   
   if($num ==1){
	  
	   header ("location:reg.php");
   }
   else{
	   echo "Wrong Password";
   }
   
  }

?>