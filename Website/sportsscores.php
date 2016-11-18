<html>
    <head>
        <title>Sports Scores</title>
    </head>
    <body>
<?php 
    $servername = "138.68.46.83";
    $username = "root";
    $password = "javainmecrazy";

    $connect = new mysqli($servername, $username, $password)
    if (!$connect){
        die("Failed Connection: ".mysqli_connect_error());
    }
    else{
        echo "Successful Connection";
    }
?>
    </body>
</html>
