<?php
  session_start();
  if (isset($_SESSION['Logedin'])) {
    header('location: homePage.php');
    die();
  }
  include('init.php');
  $title = "Overview!";
  include('includes/templates/header.php');


 // Regestration!
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   if (isset($_POST['login'])) { // Login
     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     $password = $_POST['password'];
     $stmt = $con->prepare('SELECT ID, Email , Password, isDoctor FROM users WHERE Email = ? AND Password = ?');
     $stmt->execute(array($email, $password));
     $data = $stmt->fetch();
     if($stmt->rowCount() > 0){
       $_SESSION['Logedin'] = $data['ID'];
       $_SESSION['isDoctor'] = $data['isDoctor'];
       header('Location: homePage.php');
     }
     else {
       echo "<p class='error'> <fa class='fa fa-close' style='cursor: pointer; padding: 0 10px'></fa> invalid Inputs!</p>";
     }
   }
   elseif (isset($_POST['signup']))  { // sign up
     $name = $_POST['name'];
     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     $password = $_POST['password'];
     $level = $_POST['level'];
     $department = $_POST['department'];
     $isDoctor = 0;
     if (isset($_POST['isDoctor'])) { // doctor
      $isDoctor = 1;
      $department = 0;
     }
     $stmt = $con->prepare("INSERT INTO users (Name, Email, Password, level, DepartmentID, isDoctor)
                     VALUES (:zname, :zemail, :zpassword, :zlevel, :zdepartment, :zisDoctor)");
     $stmt->execute(array('zname' => $name, 'zemail' => $email,
     'zpassword' => $password, 'zlevel' => $level, 'zdepartment' => $department, 'zisDoctor' => $isDoctor));

     if($stmt->rowCount() > 0){
       ?>
       <p class='congratulation'>
         <fa class='fa fa-check' style='cursor: pointer; padding: 0 10px'></fa>
         Congratulation, you're now have a new account! please
         <button type="button" class="login_button" data-toggle="modal" data-target="#login">Login</button>
       </p>
       <?php

     }
     else {
       echo "<p class='error'> <fa class='fa fa-close' style='cursor: pointer; padding: 0 10px'></fa> invalid Inputs!</p>";
     }
   }
 }


?>


    <!--start modal-->
    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog col-9" role="document">
        <div class="modal-content text-center">
          <button type="button" class="close " data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-header text-center">
            <img src="includes\layout\images\logo.png" alt="">
            <p>Signup &amp; enjoy learning!</p>
          </div>
          <form class="modal-body" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="email">
              <label for="email"> <i class="fa fa-envelope"></i> </label>
              <input type="text" name="email" placeholder="Email">
            </div>
            <div class="password">
              <label for="password"> <i class="fa fa-lock"></i> </label>
              <input type="password" name="password" placeholder="Password">
            </div>

            <div class="modal-footer text-center">
              <input type="submit" name="login" value="Login">
              <div class="signup">
                New User , <button type="button"  class="signup" data-toggle="modal" data-target="#signup"  data-dismiss="modal">Signup</button>
              </div>
              <hr>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog col-9" role="document">
        <div class="modal-content text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-header text-center">
            <img src="includes\layout\images\logo.png" alt="">
            <p>Signup &amp; enjoy learning!</p>
          </div>
          <form class="modal-body" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="name">
              <label for="name"> <i class="fa fa-user"></i> </label>
              <input type="text" id="name" name="name" placeholder="Name">
            </div>
            <div class="email">
              <label for="email"> <i class="fa fa-envelope"></i> </label>
              <input type="text" name="email" placeholder="Email">
            </div>
            <div class="password">
              <label for="password"> <i class="fa fa-lock"></i> </label>
              <input type="password" name="password" placeholder="Password">
            </div>
            <div class="level">
              <label for="level"> <i class="fa fa-lock"></i> </label>
              <input type="text" id="level" name="level" placeholder="Level">
            </div>

            <div class="isDoctor">
                <label for="isDoctor">You're a Doctor?</label>
                <input type="checkbox" name="isDoctor">
            </div>

            <div class="department">
              <label for="department"> <i class="fa fa-lock"></i> </label>
              <select name="department">
                <option value="1">CS</option>
                <option value="2">IS</option>
                <option value="3">IT</option>
              </select>
            </div>
            <div class="modal-footer text-center">
              <input type="submit" name="signup" value="Signup">
              <div class="signup">
                Already have account , <button type="button"  class="login" data-toggle="modal" data-target="#login"  data-dismiss="modal">Login</button>
              </div>
              <hr>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--end modal-->
    <header>
      <div class="affairs container-fluid">
        <p>Student Affairs Number: +22265889</p>
      </div>
      <nav class="navbar navbar-light bg-faded">
        <div class="container-fluid">
          <a href="index.php" class="logo">
            <img src="includes/layout/images/Logo.png">
          </a>
          <div class="register">
            <button type="button" class="login_button" data-toggle="modal" data-target="#login">Login</button>
            <button type="button" class="signup_button" data-toggle="modal" data-target="#signup">Signup</button>
          </div>
        </div>
      </nav>
    </header>

    <section class="home-body">
      <h2>we can help you!</h2>
      <div class="container">
        <div class="row nopadding">
          <div class="col-lg-4 col-md-6">
            <img src="includes/layout/images/if_video-camera_322507.png">
            <div class="live-streaming">
              <h4>Live streaming</h4>
              <p>Assume you’re comming late
                Doctor may open a live streaming like 15 min for you to
                see what you may miss when you’re late
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <img src="includes/layout/images/1790655-64 (1).png">
            <div class="organized-materials">
              <h4>Organized materials</h4>
              <p>Nice accesses to every subject’s material.
                So you will find it easy to collect your information
                from one place where you can fined what you need
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <img src="includes/layout/images/if_stock_task-recurring_24332.png">
            <div class="assigenments">
              <h4>Submitte assigenments online!</h4>
              <p>You will be able to submit your assignment’s online.
                Then recive your degree directly from your doctor or
                his comments that you need to revice it!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php
  include('includes/templates/footer.php');
?>
