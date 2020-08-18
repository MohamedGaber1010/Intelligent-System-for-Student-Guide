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


     <div class="mainContent">

       <?php
          if (!isset($_GET['course_id'])) {
            ?>
            <div class="topNotes">
              <div class="left">
                <p>Data mining lecture is <span>live now</span><br>
                  <button class="livebutton" type="button" name="button">
                    <a target="_blank" href="https://appear.in/fcis-datamining">live streaming</button></a>
                    / Please don't open your camera!
                 </p>
                 <?php if (isset($_SESSION['isDoctor']) && $_SESSION['isDoctor'] == 1){
                      ?>
                        <button class="btn btn-success start" type="button" name="button">start</button>
                      <?php
                      }
                 ?>
              </div>
              <div class="right">
                <p>Dr Hager</p>
                <img src="includes/layout/images/lines/DoctortwoLines.png" alt="">
              </div>
            </div>
            <div class="clearfix"></div>


            <div class="threeDotes">
              <div class="notAllowedMessage text-center">
                <button class="btn btn-dafault" type="button" name="button">Oops! Time allowed is Finished, so you can't be here! ^_*</button>
              </div>
              <div class="lines">
                <span class="bibline">||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||</span>
                <span class="biblineMoved">||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||</span>
              </div>
              <div class="back">
                <div class="progress"><span id="counter">0</span> min</div>
                <div class="row">
                    <div class="col-xs-4">
                      <div class="dot greenDot"><span></span></div>
                      <p>5 min</p>
                    </div>
                    <div class="col-xs-4">
                      <div class="dot yellowDot"><span></span></div>
                      <p>10 min</p>
                    </div>
                    <div class="col-xs-4">
                      <div class="dot redDot"><span></span></div>
                      <p>15 min</p>
                    </div>
                </div>
              </div>
            </div>


            <div class="news">
              <h2>News / Discussion</h2>
              <img src="includes/layout/images/lines/newsTwolines.png" alt="">

              <div class="addnewpost">
                <div class="writeComment">
                  <form id="addnewpost" class="postform" action="ajax/addpost.php" method="post">
                    <div class="write">
                      <input type="text" name="post" value="" placeholder="Write your Post..">
                      <i class="fa fa-clock-o"></i>

                    </div>
                  </form>
                </div>
              </div>


              <div id="news">
              <?php
                foreach (array_reverse(get_news()) as $post) {
                  ?>
                  <div class="post">

                    <div class="postContent">
                      <img src="includes/layout/images/users/AbdelrahmanmohamedPhoto.png" alt="">
                      <h3><?php echo $post['Name']; ?></h3> <span><?php echo $post['Time']; ?> min ago</span>
                      <p>
                        <?php echo $post['Post']; ?>
                      </p>
                    </div>



                    <div id="comments">
                      <?php
                      foreach (array_reverse(get_comments($post['ID'])) as $comment) {
                          ?>
                          <div class="postComment">
                            <img src="includes/layout/images/users/AbdelrahmanmohamedPhoto.png" alt="">
                            <h3><?php echo get_Commenter($comment['CommenterID']); ?></h3>
                            <p>
                              <?php echo $comment['Comment']; ?>
                            </p>
                          </div>
                          <?php
                          $_SESSION["postID"] = $post['ID'];
                        }
                       ?>
                    </div>

                    <div class="writeComment">
                      <form class="commentform" id="commentform" action="ajax/comment.php" method="post">
                        <div class="write">
                          <input type="hidden" name="news" value="<?php echo $_SESSION["postID"]; ?>">
                          <input type="text" name="comment" value="" placeholder="Write your comment..">
                          <img src="includes/layout/images/icons/writeCommentIcon.png" alt="">
                        </div>
                      </form>
                    </div>

                  </div>
                  <?php
                }
               ?>
             </div>
            </div>
            <?php
          }
          else {
            ?>
            <div class="coursecontent">
              <nav class="courseNav">
                <ul class="nav justify-content-left">
                  <li class="nav-item">
                    <a class="nav-link active" href="?course_id=<?php echo $_GET['course_id']; ?>&do=news">News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?course_id=<?php echo $_GET['course_id']; ?>&do=materials&show=all">Materials</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?course_id=<?php echo $_GET['course_id']; ?>&do=assigments">Assignments</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?course_id=<?php echo $_GET['course_id']; ?>&do=rating">Rating</a>
                  </li>
                  <!--
                  <div class="lineTop"></div>
                  <div class="lineBottom"></div>
                  -->
                </ul>

              </nav>

            <?php
              if (isset($_GET['do'])) {

                // Materials
                  include('includes/templates/'. $_GET['do'] .'.php');
              }
            ?>
            </div>

            <?php

          }

       ?>

     </div>


    <?php
      include('includes/templates/footer.php');
    ?>
