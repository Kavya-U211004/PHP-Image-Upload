<?php
require_once('./operations.php');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

</head>
<body>
    <h1 class="text-center my-3">Registration form</h1>
    <div class="container d-flex justify-content-center">
        <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
          
            <?php inputFields("Username","username","","text") ?>
            <?php inputFields("","file","","file") ?>
            <button class="btn btn-warning" type="submit" name="submit">Submit</button>

        </form>
    </div>
</body>
</html>