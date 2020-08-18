<nav class="courseNav courseNavRight">
  <ul class="nav justify-content-left">
    <li class="nav-item">
      <a class="nav-link active" href="?course_id=<?php echo $_GET['course_id']; ?>&do=materials&show=all">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?course_id=<?php echo $_GET['course_id']; ?>&do=materials&show=files">Files</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?course_id=<?php echo $_GET['course_id']; ?>&do=materials&show=videos">Videos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?course_id=<?php echo $_GET['course_id']; ?>&do=materials&show=photos">Photos</a>                        <!--pointer for me-->
    </li>
  </ul>

</nav>
<div class="clearfix"></div>

<?php
  if (isset($_GET['do']) && $_GET['do'] == 'materials') {
    if (isset($_GET['show']) && $_GET['show'] == 'all' || !isset($_GET['show'])) {
      $allFiles = get_files($_GET['course_id'], "All");
      ?>
      <div class="courseMaterialsAll">
        <div class="materials">
          <?php
            if(empty($allFiles)){
                echo "<div class='warning'>Empty</div>";
            }
            else{
                foreach ($allFiles as $file) {
                    ?>
                    <div class="row">
                      <div class="col-sm">
                        <h6> <?php echo get_publisher($file['UploaderID']); ?> </h6>
                        <img src="includes/layout/images/<?php echo $file['Type']; ?>.png">
                        <p> <?php echo $file['Title']; ?> </p>
                      </div>
                      <div class="col-xs time-materials">
                        <span> <?php echo $file['Date']; ?> </span>
                      </div>
                    </div>
                    <?php
                  }
                ?>
                   <div class="row">
                    <div class="col-sm more">
                      <a href="#">Load more</a>
                      <a href="#">Old materials</a>
                    </div>
                  </div>
                <?php
            }
           ?>
        </div>
      </div>
      <?php
    }


    elseif (isset($_GET['show']) && $_GET['show'] == 'files') {
      ?>
      <div class="courseMaterialsAll">
        <div class="materials">
            <?php
              $pdfs = get_files($_GET['course_id'], "pdf");
              if(empty($pdfs)){
                echo "<div class='warning'>Empty</div>";
              }
              else{
                foreach ($pdfs as $file) {
                ?>
                    <div class="row">
                      <div class="col-sm">
                        <h6> <span>Published by:</span> <?php echo get_publisher($file['UploaderID']); ?></h6>
                        <img src="includes/layout/images/if_pdf_3745.png">
                        <a href="uploads/pdf/<?php echo $file['Name'] . '.pdf';?>"> <p><?php echo $file['Name']; ?></p> </a>
                      </div>
                      <div class="col-xs time">
                        <span><?php echo $file['Date']; ?></span>
                      </div>
                    </div>
                <?php
                }
                ?>
                   <div class="row">
                    <div class="col-sm more">
                      <a href="#">Load more</a>
                      <a href="#">Old materials</a>
                    </div>
                  </div>
                <?php
  
              }
              
            ?>
        </div>
      </div>
      <?php
    }


    elseif (isset($_GET['show']) && $_GET['show'] == 'videos') {
      $videos = get_files($_GET['course_id'], "videos");
      ?>
      <div class="courseMaterialsVideos">
            <?php
            if(empty($videos)){
             echo "<div class='warning'>Empty</div>";
            }
            else{
              foreach ($videos as $file) {
                 ?>
                 <div class="">
                   <div class="video">
                   <!--Modal Videos-->
                   <div class="fixeddelay">
                     <i class="fa fa-close"></i>
                     <div class="videoPopup dropDownAnimation">
                       <video class="dropDownAnimation" width="100%" controls>
                         <source src="uploads/videos/<?php echo $file['Name'];?>.mp4" type="video/mp4">
                       </video>
                     </div>
                   </div>
                   <!--Modal Videos-->
                    <div class="courseVideo">

                      <div class="courseTitle">
                        <p class="courseVideoName"> <?php echo substr($file['Title'] , 0 , 8) . "<br>" . substr($file['Name'] , 8); ?> </p>
                        <img src="includes/layout/images/courseImages/courseBackground.png" alt="">
                        <i class="fa fa-play-circle"  data-toggle="modal" data-target="#videoModal"></i>
                      </div>
                      <span class="UploadedBy">
                        <?php echo get_publisher($file['UploaderID']); ?>
                      </span>
                      <span class="timeUploaded"> <?php echo $file['Date'];  ?> </span>

                    </div>
                  </div>
                </div>
                <?php
                }
                ?>
                    <div class="row">
                      <div class="col-sm more">
                        <a href="#">Load more</a>
                        <a href="#">Old materials</a>
                      </div>
                    </div>
                <?php
            }
            ?>
        
      </div>
      <?php
    }


    elseif (isset($_GET['show']) && $_GET['show'] == 'photos') {
      $photos = get_files($_GET['course_id'], "photos");
      ?>
      <div class="courseMaterialsPhotos">
          <div class="row">
            <?php
            if(empty($videos)){
             echo "<div class='warning'>Empty</div>";
            }
            else{

                foreach ($photos as $file) {
                 ?>
                  <div class="col-lg-4 col-md-6">
                    <div class="coursePhoto">
                      <a target="_blank" href="uploads/photos/<?php echo $file['Name']; ?>.jpg">
                        <img src="uploads/photos/<?php echo $file['Name']; ?>.jpg" alt="">
                      </a>
                      <span class="UploadedBy">
                        <?php echo get_publisher($file['UploaderID']); ?>
                      </span>
                      <span class="timeUploaded"><?php echo $file['Date']; ?></span>
                    </div>
                  </div>
                <?php } 
                ?>
                  <div class="row">
                    <div class="col-sm more">
                      <a href="#">Load more</a>
                      <a href="#">Old materials</a>
                    </div>
                  </div>
              <?php
                
            }
            ?>
          </div>
        </div>
      <?php
    }

  }

?>

</div>
</div>
