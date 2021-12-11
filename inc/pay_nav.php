<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../user_home.php">My Home</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../sharespace.php">Share Space</a> 
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="../tour.php">Tour</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about_us.php">About us</a> 
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contact us</a> 
                </li>
            </ul>
            <div class="navbar-nav mr-auto">
               
                <div class="navbar-nav mr-auto nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['active_email']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="change_password.php">Change Password</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a> 
                </div>
            </div>
            </div>
        </div>
    </nav>