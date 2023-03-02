<!--this code is called to make a connection to the SQL database for CRUD functions (CREATE, READ, UPDATE, DELETE)-->
<?php
try{
    $dsn = "mysql:host=localhost;port=3308;dbname=comp_1006"; #connection to SQL DATABASE named comp_1006
    $conn = new PDO($dsn, "root", ""); #creates (instance of class PDO, username = root, password = "")
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); #error handling (name of attribute, value of attribute)
} catch (PDOException $error){
    echo $error->getMessage();
    $conn = false;
}
?>
