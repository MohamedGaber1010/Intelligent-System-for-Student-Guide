<div class="courseNews">
  <div class="addnewpost">
    <div class="writeComment">
      <form id="addnewpost" class="postform" action="ajax/addpost.php" method="post">
        <div class="write">
          <input type="hidden" name="course" value="<?php echo $_GET['course_id']?>">
          <input type="text" name="post" value="" placeholder="Write your Post..">
          <i class="fa fa-clock-o"></i>

        </div>
      </form>
    </div>
  </div>
  <?php
  $news = array_reverse(get_news());
  if(empty($news)){
    echo "<div class='warning'>Empty</div>";
  }
  else {
    foreach ($news as $post) {
      ?>
      <div class="post">

        <div class="postContent">
          <img src="includes/layout/images/users/AbdelrahmanmohamedPhoto.png" alt="">
          <h3><?php get_poster($post['ID']); ?></h3> <span><?php echo $post['Time']; ?> min ago</span>
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
  }
   ?>
</div>
