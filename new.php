<!--web page display after "New Entry" button in index.php clicked; form action="./create.php" calls create.php file on "Submit" button click-->
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Collectable Database</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    </head>
    <body> <!-- for dark mode: <body data-bs-theme="dark"> -->
        <div class="container"> <!--class="container" bootstrap-->
        <header class="mt-3">
            <nav class="navbar sticky-top navbar-light bg-light justify-content-between">
                <h1>New Entry</h1>              
                <!--This form allows users to move images to local img directory so that it can be accessed by file name stored in SQL-->
                <div class="d-flex align-items-end flex-column">
                    <a class="btn btn-primary" role="button" href="./">Home</a>
                </div>
            </nav>
        </header>
            <form class="mt-5" action="./create.php" method="post"> <!--post modifies data--> <!--class="mt-5" bootstrap-->
                <div class="form-group mb-3"> <!--class="form-group mb-3" bootstrap-->
                    <label for="name">Name</label><br>
                    <input class="form-control" type="text" name="name" placeholder="Example: Golf Club">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label><br>
                    <input class="form-control" type="text" name="description" placeholder="Example: Tiger Woods 1st PGA tour"> <!--class="form-control" bootstrap-->
                </div>
                <div class="form-group mb-3">
                    <label for="value">Value</label><br>
                    <input class="form-control" type="number" step="0.01" name="value" placeholder="Example: 44444.44"> <!--input type email makes sure input is email format-->
                </div>
                <div class="form-group mb-3"> 
                    <label for="image">Image (Must be found within img directory)</label><br>
                    <input class="form-control"type="file" name="image"> <!--input type file adds "choose file" button-->
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-outline-dark" >Submit</button> <!--button type submit allows for form submission, value="Upload" updates MySQL database-->
                </div>
                
                
        </div>
    </body>
</html>

