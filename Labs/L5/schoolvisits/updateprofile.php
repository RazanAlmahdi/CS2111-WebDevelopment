<?php
error_reporting(0);
session_start();
if(isset($_SESSION['username']) )
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>School Visits - Effat University</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/mystyle.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php include "sidebar.php" ?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <h3 class="mt-2"> School Visits Management System </h3> 
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Edit Profile</h1>

					<?php
                    $username = $_SESSION['username'];
					$connection = mysqli_connect("localhost","root","","schoolvisits2");
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);

                    

                    if(isset($_SESSION['username']) )
                    {
 
                        $_SESSION['username'] = $username;
                        $currentUsername = $_SESSION['username'];
                        $sql = "Select * from user where username = '".$currentUsername."'";
						$result = mysqli_query($connection,$sql);
						$row = mysqli_fetch_assoc($result);
						echo "<form method='post' action='updatinguser.php'>";

                        echo "<p><label> User ID: </label>";
						echo "<input type='text' id='username' name='username' value ='".$row['username']."'></p>";
						
						echo "<p><label> Name: </label>";
						echo "<input type='text' id='name' name='name' value ='".$row['name']."'></p>";

						

						echo "<p><label> Email: </label>";
						echo "<input type='email' id='email' name='email' value ='".$row['email']."'></p>";
						
						echo "<p><label> Passwors: </label>";
						echo "<input type='password' id='pass' name='pass' value ='".$row['pass']."'></p>";

						echo "<input type='submit' value='Update'>";
						echo "<input type='reset' value='Clear'>";
						
						echo "<input type = 'hidden' id='username' name='username' value = '".$username."'>";
						
						echo "</form>";
                        
                    }
                    else
                    {
                        echo "<h4>Please log in first to see this page.</h4>";
                        exit;
                    }
					
					error_reporting(0);
					?>
                 
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
