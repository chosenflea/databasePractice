<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "UserAccounts";
        
        $usrnmFrom = htmlspecialchars($_POST['usrnm']);
        $psswrdFrom = htmlspecialchars($_POST['psswrd']);
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT UserName, Password FROM Login";
        $result = $conn->query($sql);
        
        while($row = $result->fetch_assoc()) {
            if ($row["UserName"] == $usrnmFrom && $row["Password"] == $psswrdFrom){
                echo "Login Successful";
            }
        }
        echo "Search Complete";
        

        $conn->close();
        ?>
    </body>
</html>