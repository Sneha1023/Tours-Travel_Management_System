<?php

$conn=pg_connect("host=192.168.16.252 user=BG27 dbname=BG27 password=");
if(!$conn){
	echo "Not connected";
}
else
{
	
        if(isset($_POST['signup']))
        {
                
                $u=$_POST['naav'];
                $e=$_POST['email'];
                $c=$_POST['cpass'];
                $p=$_POST['pass'];

                $q="insert into user_credentials(user_name,user_email_id, user_confirmpass, user_password) values('$u','$e','$c','$p');";
echo $q;
                $res=pg_query($conn,$q);
                       
                                if($res)
                                {
                                      
                                       header("Location:log.php");
                                }
                                else
                                {
                                        echo "not inserted";
                                }
        }
}


       
?>                                                                                                                                              
