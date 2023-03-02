<!--deletes sql table entry & index.php row entry-->
<?php
    require_once("./connect.php");
    $sql = "DELETE FROM collectables WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id",$_GET["id"], PDO::PARAM_INT);
    $stmt->execute();
    header("Location: ./index.php");
?>