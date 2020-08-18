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

<style>
  .fixed .whitespace{
    display: none
  }
</style>

    <?php
      // TOP NAV
      include('includes/templates/topNav.php');
      // LEFT NAV
      include('includes/templates/leftNav.php');
     ?>

     <div class="profileHeader">
       <div class="profilePicture">
         <div class="coverImage">
           <img src="includes/layout/images/profile/cover.png" alt="cover">
         </div>
         <div class="userImage">
           <img src="includes/layout/images/users/AbdelrahmanmohamedPhoto.png" alt="">
         </div>
         <button type="button" name="button"> <i class="fa fa-pencil-square-o"></i> ... </button>
         <div class="userInfo">
           <h4 class="userName"> <?php echo $logineduserData['Name']; ?> </h4>
           <p class="lead"> <?php echo $logineduserData['DepartmentID']; ?> </p>
           <span> <?php echo "Level : " . $logineduserData['Level']; ?> </span>
         </div>
         <div class="moreInfo container">
           <hr>
           <p>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                 Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
              <button class="seeMore" type="button" name="button"> See More <i class="fa fa-caret-down"></i> </button>
         </div>
       </div>
     </div>
     <div class="userActivities">
       <div class="container">
         <h4>Activities</h4>
         <div class="activity row">
           <div class="col-md-3 activityImage">
             <img src="includes/layout/images/profile/Activity.png" alt="Activity1">
           </div>
           <div class="col-md-9 ActivityName">
             <h5>organizer for IEEE sessions and activites </h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisici..</p>
           </div>
         </div>
         <div class="activity row">
           <div class="col-md-3 activityImage">
             <img src="includes/layout/images/profile/Activity.png" alt="Activity1">
           </div>
           <div class="col-md-9 ActivityName">
             <h5>participate at running Competition on 2011 </h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisici..</p>
           </div>
         </div>
         <button class="seeMore" type="button" name="button"> See More <i class="fa fa-caret-down"></i> </button>
       </div>
     </div>
     <div class="userSkills">
         <div class="row">
           <div class="col-md-6">
             <div class="container">
               <h4>Acquired Skills</h4>
               <ul class="list-unstyled">
                 <li>- mobile and web UI&UX designer</li>
                 <li>- mobile and web development</li>
                 <li>- mobile and web development</li>
                 <li>- mobile and web design</li>
                 <li>- java & android develpment </li>

               </ul>
             </div>

           </div>
           <div class="col-md-6">
             <img src="includes/layout/images/profile/skills.png" alt="skills">
           </div>
         </div>
     </div>
     <div class="userPersonalInfo">
       <div class="container">
         <h4>Contact And Personal Info</h4>
             <div class="">
               <i class="fa fa-envelope-o"></i>
               <p>Email : <?php echo $logineduserData['Email'] ?></p>
               <i class="fa fa-envelope-o"></i>
               <p>SSN : <?php echo $logineduserData['SSN'] ?></p>
               <i class="fa fa-envelope-o"></i>
               <p>Phone Number : <?php echo $logineduserData['PhoneNumber'] ?></p>
             </div>

       </div>

     </div>


    <?php
      include('includes/templates/footer.php');
    ?>
