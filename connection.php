<?php      
    $host = "localhost";  
    $user = "u986916771_mtfe";  
    $password = 'Mtfe#123';  
    $db_name = "u986916771_mtfelogin";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  