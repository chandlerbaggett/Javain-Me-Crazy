<html>
    <head>
        <title>Buffs Sports</title>
    </head>
    <body>
    <?php
        $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        if($db->connect_errno > 0){
            die('Unable to connect to database [' . $db->connect_error . ']');
        }
        $result = $db->query("SELECT * FROM sportsscores");
        while ($row = $result->fetch_assoc()){
            echo $row['opponent'] . '<br />';
        }
    ?>    
    </body>
</html>
