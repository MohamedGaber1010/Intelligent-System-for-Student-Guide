<footer>
  <?php
  if (isset($_SESSION['Logedin'])) {
    ?>
    <div class="chat">
      <div class="users dropDownAnimation">
        <i class="fa fa-spinner"></i>

        <a href="#" class="dropDownAnimation">Dr: Hoassam</a>
        <a href="#" class="dropDownAnimation">Dr: Hoassam</a>
        <a href="#" class="dropDownAnimation">Dr: Hoassam</a>
        <a href="#" class="dropDownAnimation">Dr: Hoassam</a>
        <a href="#" class="dropDownAnimation">Dr: Hoassam</a>
      </div>
      <i class="fa fa-envelope"></i>
      <i class="fa fa-close"></i>
    </div>
    <div class="attendance">
      <div class="attend" id="gps">
        <i class="fa fa-spinner"></i>
      </div>
      <i class="fa fa-check"></i>
    </div>


    <?php
   }
   ?>
      <div class="about container-fluid">
          <a href="About.php">About us</a>
      </div>
      <div class="copy-right">
        <p>Copyright (c) 2017 <span>GP</span> All Rights Reserved.</p>
      </div>
    </footer>
    <script src="includes/layout/js/jQuery.js" type="text/javascript"></script>
    <script src="includes/layout/js/popper.min.js" type="text/javascript"></script>
    <script src="includes/layout/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="includes/layout/js/main.js" type="text/javascript"></script>
    <script src="includes\layout\js\tricks.js" type="text/javascript"></script>
    <script src="includes\layout\js\ajax.js" type="text/javascript"></script>
<script src="me\js.js"></script>


</body>
