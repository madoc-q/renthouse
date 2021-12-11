<?php
include("../config/config.php");
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <title>Space2Share - Confirm Delete</title>
</head>
<body class="bg-dark">

<!-- main body -->
    <div class="container" style=" margin-top : 12.5rem; width: 20rem;">
        <div class="card card-body">
            <h5 class="card-title">Confirm Delete</h5>
            <h6 class="card-subtitle mb-2 text-muted">Are you sure you want to delete this space?</h6>
            <img class="card-img-top" style="height: 12rem;" src="<?php echo $result[0]['p_photo']; ?>" alt="Card image cap">
            <form action="./process/confirm_delete.php" method="POST">
                <input type="text" value="<?php echo $property_id; ?>" name="property_id" hidden>
                <input type="text" value="<?php echo $result[0]['p_photo']; ?>" name="img_name" hidden>
                <div class="form-row">
                    <div class="col-sm-6">
                        <input type="submit" value="YES" class="btn btn-danger btn-block mt-2" name="yes">
                    </div>
                    <div class="col-sm-6">
                        <a href="user_home.php" class="btn btn-info btn-block mt-2">NO</a>
                    </div>
                </div>
            </form>
        </div> 
    </div>
<!-- /main body -->
</body>
</html>



