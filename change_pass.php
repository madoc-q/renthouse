<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(E_WARNING);

    $alert = '';
    require "config/config.php";
    

    if(isset($_POST['change'])){
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $old = mysqli_real_escape_string($db,$_POST['old']);
        $new = mysqli_real_escape_string($db,$_POST['new']);
        $cnew = mysqli_real_escape_string($db,$_POST['cnew']);


        if($new != $cnew){
			$alert = ucwords("passwords do not match");
		}else{
            // get old password
            $get = "SELECT password FROM owner WHERE email='$email'";
            $getp = mysqli_query($db,$get);
            $countget = mysqli_num_rows($getp);
            $getlist = mysqli_fetch_all($getp, MYSQLI_ASSOC);
            mysqli_free_result($getp);

            if($countget >= 1){
                if(password_verify($old, $getlist[0]['password'])){
                    //password matches
                    $new = password_hash($new, PASSWORD_DEFAULT);//hash new password
                    $set = "UPDATE owner SET password = '$new' WHERE email = '$email'";
                    if(mysqli_query($db, $set)){
                        $alert = ucwords('password updated successfully');
                        header('Location:../owner/owner-index.php');
                    }
                }else{
                    $alert = ucwords('old password incorrect');
                }
            }

            
		}
    }

