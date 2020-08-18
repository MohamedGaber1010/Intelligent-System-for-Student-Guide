<div class="courseAssignments">
  <div class="sheets">
      <?php
        $sheets = get_sheets($_GET['course_id']);
        if(empty($sheets)){
            echo "<div class='warning'>Empty</div>";
        }
        else{
            foreach($sheets as $sheet)
            {
                ?>
                <div class="row">
                  <div class="col-sm">
                    <h6> <?php echo $sheet['Title']; ?></h6>
                  </div>
                  <div class="col-xs details">
                    <a href="uploads/assignments/<?php echo $sheet['Name']; ?>.docx">Download</a>
                    <button type="submit">submit</button>
                    <span><?php echo $sheet['Date']; ?> <i>ago</i></span>
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
