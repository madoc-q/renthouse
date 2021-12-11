        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="user_home.php">My home</a> 
                </li>
               
            </ul>
            <div class="navbar-nav mr-auto nav-item dropdown-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
                    <?php echo $_SESSION['active_email']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="change_password.php" >Change Password</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a> 
                </div>
            </div>
        </div>
    </nav>