<?php 

//     $servername = "us-cdbr-iron-east-03.cleardb.net";
//     $username = "b435fd5a3df40e";
//     $password = "ff1a102b";
//     $database = "heroku_93a392319043be9";
//    //mysql://b435fd5a3df40e:ff1a102b@us-cdbr-iron-east-03.cleardb.net/heroku_93a392319043be9?reconnect=true
//     // Create connection
//     $conn = new mysqli($servername, $username, $password,$database);
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
//     else{
//         echo "database connection was successful";
        
//         //sql to create table
//         $sql = "CREATE TABLE MyGuests (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         firstname VARCHAR(30) NOT NULL,
//         lastname VARCHAR(30) NOT NULL,
//         email VARCHAR(50),
//         reg_date TIMESTAMP
//         )";
        
//         if ($conn->query($sql) === TRUE) {
//             echo "Table MyGuests created successfully";
//         } else {
//             echo "Error creating table: " . $conn->error;
//         }
// }
include_once("home.html");

?>
