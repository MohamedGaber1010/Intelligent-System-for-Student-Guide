<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include('../init.php');
    $stmt = $con->prepare('INSERT INTO comments (Comment,CommenterID,NewsID) VALUES(:zcomment,:zcommenter,:znews)');
    $stmt->execute(array('zcomment' => $_POST['comment'], 'zcommenter' => $_SESSION['Logedin'],'znews' => $_POST['news']));


    foreach (array_reverse(get_comments($_POST['news'])) as $comment) {
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
  }
 ?>
