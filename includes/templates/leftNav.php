<div class="clearfix"></div>


<div class="leftNav closed">
  <i class="arrowOpen fa fa-angle-right" aria-hidden="true"></i>
</div>
<div class="leftNav opened">
  <a href="index.php"> <img class="leftNavBrand" src="includes/layout/images/logo.png" alt=""> </a>
  <ul>
    <li><a href="#">Courses</a>
        <ul>
          <?php
            foreach (getCourses(4, 1) as $course) {
              ?>
                <li><a href="homePage.php?course_id=<?php echo $course['ID'] ?>&do=news"> <?php echo $course['Name']; ?></a></li>
              <?php
            }
           ?>
        </ul>
    </li>
    <li><a href="timetable.php">Time table</a></li>
    <li><a href="result.php">Results</a></li>
  </ul>
  <div class="arrowclose">
    <i class="arrowOpen fa fa-angle-left" aria-hidden="true"></i>
  </div>
</div>
