<div class="fixed">
<div class="studentAffairs">
  <div class="padding">
    <p>Student Affairs Number: +22265889</p>
  </div>
</div>
<div class="clearfix"></div>

<div class="topNav">
  <div class="padding">
    <div class="brand">
      <a href="index.php"> <img src="includes/layout/images/logo.png" alt=""> </a>
    </div>
    <div class="nav">

      <div class="notifications">
        <div class="divicon notify">
          <img src="includes/layout/images/icons/notficationsIcon.png" alt="">
          <div class="arrow"></div>
        </div>
        <div class="divicon message">
          <img src="includes/layout/images/icons/messagesIcon.png" alt="">
          <div class="arrow"></div>
        </div>
        <div class="divicon team">
          <img src="includes/layout/images/icons/teamsIcon.png" alt="">
          <div class="arrow"></div>
        </div>



        <div class="clearfix"></div>

        <div class="dropdownMenu teams">
          <p>There is no team requests yet!</p>
        </div>


        <div class="dropdownMenu messages">
          <p>There is no team requests yet!</p>
        </div>


        <div class="dropdownMenu notifies">
          <p>There is no team requests yet!</p>
        </div>


      </div>
      <div class="userImg">
        <img src="includes/layout/images/users/AbdelrahmanmohamedPhoto.png" alt="">
      </div>
      <div class="dropdown">
        <button class="btn btn-secondary dropBtn" type="button">
          <?php
            $logineduserData = get_username($_SESSION['Logedin']);
            if ($_SESSION['isDoctor'] == 1) {
              echo "Dr " . $logineduserData['Name'];
            }
            else {
              echo "STD " . $logineduserData['Name'];
            }
           ?>
           <i class="fa fa-caret-down" aria-hidden="true"></i>
        </button>
        <div class="dropdownMenu user">
          <a class="dropdown-item" href="profile.php">View profile</a>
          <a class="dropdown-item" href="logOut.php">Logout</a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<div class="whitespace">

</div>
</div>
