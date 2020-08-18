<?php
  session_start();
  if (!isset($_SESSION['Logedin'])) {
    header('location: index.php');
    die();
  }
  include('init.php');
  $title = "Home!";
  include('includes/templates/header.php');
?>

    <?php
      // TOP NAV
      include('includes/templates/topNav.php');
      // LEFT NAV
      include('includes/templates/leftNav.php');
     ?>


     <div class="coursesContent">
     <!-- start result page -->
       <section class="courseResult">
         <div class="result">
           <div class="col-xs">
             <h2>congreatulations</h2>
             <h4>your GPA is : 2.47</h4>
             <img src="includes/layout/images/result.jpg">
           </div>
         </div>
       </section>
       <!-- start proghress bar -->




       <!-- end progress bar -->
           <div class="col-sm-12 ">
             <form class="problem">
               <textarea name="name" placeholder="tell us about your problem"></textarea>
                 <input type="submit" value="send">
             </form>
           </div>
         </div>


    <?php
      include('includes/templates/footer.php');
    ?>
