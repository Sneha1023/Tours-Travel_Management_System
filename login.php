<?php
$conn=pg_connect("host=192.168.16.252 user=BG27 dbname=BG27 password=");
if(!$conn){
	echo "Not connected";
}
else
{

	if(isset($_POST['login']))
	{
		
		
		$e=$_POST['email'];
	
		$p=$_POST['pass'];
                      
		$q="SELECT * FROM user_credentials WHERE user_email_id='$e' AND user_password='$p'";
		$exec=pg_query($conn,$q);
		$no_of_rows=pg_num_rows($exec);
		$row=pg_fetch_assoc($exec);
                echo $row['user_email_id'];
                if($no_of_rows==1)
	        {
		 header("Location:explore.php"); 
		
		}
		else{
		
		echo"Not validated";
		}
       }
}
?>
