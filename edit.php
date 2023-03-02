<!--web page display after "edit" button in index.php clicked; form action="./update.php" calls update.php file on "Submit" button click-->
<?php
require_once("./connect.php");
    $sql = "SELECT 
        id, name, description, value, image
    FROM 
        collectables
    WHERE
        id = :id"; 

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET["id"], PDO::PARAM_INT); 
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ); 
?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Entry</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    </head>
    <body>
    <div class="container">
        <header class="mt-3">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <h1>Edit Entry</h1>              
            <!--This form allows users to move images to local img directory so that it can be accessed by file name stored in SQL-->
            <div class="d-flex align-items-end flex-column">
                <a class="btn btn-primary" role="button" href="./">Home</a><br>
                <a class="btn btn-primary" role="button" href="./new.php">New Entry</a>
            </div>
        </nav>
        </header>
            <form class="mt-5" action="./update.php" method="post"> <!--post modifies data--> <!--class="mt-5" bootstrap-->
                <input type="hidden" name="id" value ="<?= $row->id?>">
                <div class="form-group mb-3"> <!--class="form-group mb-3" bootstrap-->
                    <label for="name">Collectable</label><br>
                    <input class="form-control" type="text" name="name" value="<?=$row->name?>"> <!--need previously written first_name value from row --> <!--class="form-control" bootstrap-->
                </div>
                <div class="form-group mb-3"> 
                    <label for="description">Description</label><br>
                    <input class="form-control" type="text" name="description" value="<?=$row->description?>"> <!--need previously written last_name value from row -->
                </div>
                <div class="form-group mb-3"> 
                    <label for="value">Current Value</label><br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input class="form-control" type="number" step="0.01" name="value" value="<?=$row->value?>">
                    </div>
                </div>
                <div class="form-group mb-3"> 
                    <label for="image">Image</label><br>
                    <input class="form-control"type="file" name="image" value="<?=$row->image?>"> <!--type="file" makes choose file button in form field -->          
                </div>
                <div class="form-group mb-3"> 
                    <button type="submit" class="btn btn-outline-dark">Submit</button> <!--button type submit allows for form submission-->
                </div>
            </form>
        </div>
    </body>
</html>
