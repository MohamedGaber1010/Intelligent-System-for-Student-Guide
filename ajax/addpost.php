<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include('../init.php');
  if (isset($_POST['course'])) {
    $stmt = $con->prepare('INSERT INTO news (Post,PublisherID,courseID) VALUES(:zpost, :zposter,'. $_POST['course'] .')');
    $stmt->execute(array('zpost' => $_POST['post'], 'zposter' => $_SESSION['Logedin']));
  }
  else{
    $stmt = $con->prepare('INSERT INTO news (Post,PublisherID,courseID) VALUES(:zpost, :zposter,3)');
    $stmt->execute(array('zpost' => $_POST['post'], 'zposter' => $_SESSION['Logedin']));

  }

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
          }
         ?>
      </div>

      <div class="writeComment">
        <form class="commentform" id="commentform" action="ajax/comment.php" method="post">
          <div class="write">
            <input type="hidden" name="news" value="<?php echo $post['ID']; ?>">
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
