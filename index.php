<!--initial webpage displayed on WAMP server http://localhost/Assignment2/ -->
<?php
$sql = "SELECT 
    id, name, description, value, image
FROM 
    collectables";
require_once("./connect.php");

$rows = [];
if($conn){
    $result = $conn->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_OBJ); 
}
?>

<!--Bootstrap codes: https://getbootstrap.com/docs/4.1/components/forms/-->
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Collectable Database</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/> <!--reference link to use bootstrap classes-->
    </head>
    <body>
        <div class="container"> <!--bootstrap class-->
            <header class="mt-3"> <!--bootstrap class-->
            <nav class="navbar navbar-light bg-light justify-content-between">
            <h1>Collectables</h1>                
                <!--This form allows users to move images to local img directory so that it can be accessed by file name stored in SQL-->
                <div class="d-flex align-items-end flex-column">
                    <form class="form-inline my-2 my-lg-0" action = "./update.php" method="POST" enctype="multipart/form-data">
                        <input class="form-control mr-sm-2" type="file" name="imgName">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="imgFile" value="Upload">Upload Image to /img</button><br> <!--class="btn btn-primary" bootstrap class: blue coloured button -->
                        <a class="btn btn-primary" role="button" href="./new.php">New Entry</a> <!--class="btn btn-primary" bootstrap class: makes nav links a button-->
                    </form>
                </div>
                </nav>
            </header>
            
            <table class="table table-striped" > <!--class="table table-striped" bootstrap class: creates striped table-->
                <thead>  <!--class="text-center" bootstrap class: centers table header over-->
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>VALUE</th>
                        <th>IMAGE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($rows as $row): ?>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->name?></td>
                            <td><?= $row->description?></td>
                            <td>$<?= $row->value?></td>
                            <td class = "col-md-3"><img src='img/<?=$row->image?>' id='<?=$row->image?>' class="w-50"></td> <!--class="w-50" bootstrap class: width to 25%--> <!--class = "col-md-3" bootstrap class: set column width to particular size (smaller)-->
                            <td>
                                <a class="btn btn-primary" href="./edit.php?id=<?=$row->id?>">Edit</a>
                                <a class="btn btn-danger" href="./delete.php?id=<?=$row->id?>" onclick="return confirm('Are you sure you want to delete')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

