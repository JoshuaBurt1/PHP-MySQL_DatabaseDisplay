<!--moves image from other directory to img/ directory>
<?php
if(isset($_POST['imgFile']))
{
    $imgName = $_FILES['imgName']['name'];
    $tempName = $_FILES['imgName']['tmp_name'];
    if(isset($imgName))
    {
        if(!empty($imgName))
        {
            $location = "img/";
            move_uploaded_file($tempName,$location.$imgName);
        }
    }
}
?>
<--changes row variables of existing entry on clicking edit-->
<?php
    require_once("./connect.php");
    $sql = "UPDATE collectables SET
        name= :name,
        description = :description,
        value = :value,
        image = :image
    WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":name",$_POST["name"], PDO::PARAM_STR); 
    $stmt->bindParam(":description",$_POST["description"], PDO::PARAM_STR);
    $stmt->bindParam(":value",$_POST["value"], PDO::PARAM_STR);
    $stmt->bindParam(":image",$_POST["image"], PDO::PARAM_STR); 
    $stmt->bindParam(":id",$_POST["id"], PDO::PARAM_INT);
    $stmt->execute(); 
    header("Location: ./index.php");
?>