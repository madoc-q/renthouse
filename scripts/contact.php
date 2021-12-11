<?php session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
error_reporting(E_WARNING); ?>
<?php if(isset($_SESSION['email'])) : ?>
<?php require '../owner/navbar.php'; ?>

<title>Space2Share - About</title>
<!-- navbar -->

</ul>
</div>
</nav>

<body style=" background-color: #ebebeb;">
  <center> <div class="RegisArea" style="width: 40%;  position: relative; height: 500px; left: 0rem " >
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate>
              <h3>Contact Us</h3>
             
              <?php if(!empty($alert)): ?>
                  <button class="col-sm-12 alert alert-danger disable">
                      <?php echo $alert; ?>
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <script>
                        document.querySelector('.close').addEventListener('click',(e)=>{
                          e.target.parentElement.classList.add("fade");
                          e.preventDefault;
                        });
                      </script>
                  </button>
              <?php endif; ?><br>
              <div class="form-group">
                <label for="fname" style="text-align: left">Email</label>
                <input type="text" style = "width: 80%" name="fname" class="fname form-control" id="fname">
                <small class="invalid-feedback">
                 Please enter your email
                </small>
              </div>


                <div class="form-group">
                <label for="fname" style="text-align: left">Subject</label>
                <input type="text" style = "width: 80%" name="fname"  class="fname form-control" id="fname">
                <small class="invalid-feedback">
                  Name must be at least 2 characters
                </small>
              </div>

               <div class="form-group">
                <label for="fname" style="text-align: left">Message</label>
                <input type="text" style = "width: 80%; height: 150px;" name="fname"  class="fname form-control" id="fname">
                <small class="invalid-feedback">
                 Enter message
                </small>
              </div>

               <button type="submit" class="col-sm-10 btn btn-success" name="submit">Submit</button>
          </form>
</div>
</center>




</body>
<?php else : ?>
<?php header('Location: user_home.php'); ?>
<?php endif; ?>