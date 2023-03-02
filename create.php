<!--called when new.php "Submit" button is clicked; updates MySQL database-->
<?php 
    require_once("./connect.php");
    $sql = "INSERT INTO collectables (name,description,value,image) VALUES (:name,:description,:value,:image)"; #to put form information in SQL table
    $stmt = $conn->prepare($sql); #MySQL Database sends VALUES to populate bound parameters
    $stmt->bindParam(":name",$_POST["name"], PDO::PARAM_STR); 
    $stmt->bindParam(":description",$_POST["description"], PDO::PARAM_STR);
    $stmt->bindParam(":value",$_POST["value"], PDO::PARAM_STR); #value must be string (STR) as integer (INT) will not allow for decimal value
    $stmt->bindParam(":image",$_POST["image"], PDO::PARAM_STR);
    $stmt->execute(); 
    header("Location: ./index.php");
?>