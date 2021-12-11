<?php session_start();
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(E_WARNING);
?>

<?php if (isset($_SESSION['email'])): ?>
    <?php require 'change_pass.php'; ?>


	<?php require 'inc/header.php';?>
	<link rel="stylesheet" href="css/style.css">
	<title>Space2Share - Change Password</title>
	
    <body class="bg-dark">
    <!-- main area -->
    <div class="container cont">
        <div class="card card-body">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="logo_cont"> 
                    <?php if($alert != ''): ?>
                        <div class="alert alert-info"><?php echo $alert; ?><br><a href="owner/owner-index.php">Go Home</a></div>
                    <?php endif; ?>
                    <img src="images/logo.png" class="logo"><hr>
                    <h3>Change Password</h3>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="text" readonly name="email" required class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Old Password</label>
                    <div class="col-sm-9">
                    <input type="password" name="old" class="form-control" required id="inputPassword" placeholder="Enter Old Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">New Password</label>
                    <div class="col-sm-9">
                    <input type="password" name="new" id="pword" class="form-control" id="inputPassword"  required placeholder="Enter New Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Confirm New Password</label>
                    <div class="col-sm-9">
                    <input type="password" name="cnew" id="cpword" class="form-control" required id="inputPassword" placeholder="Enter New Password Again">
                    </div>
                </div>
                <input type="submit" name="change" value="Change Password" class="btn btn-info btn-block">
            </form>
        </div>
    </div>
    <script src="scripts/upvalidate.js"></script>
    <!--/main area -->

	<?php require 'inc/end.php';?>

<?php else: ?>
<?php header('Location:owner/owner-index.php');?>
<?php endif;?>