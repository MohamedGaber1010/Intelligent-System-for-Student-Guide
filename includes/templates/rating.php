<div class="courseRating">
    <div class="sheets">

      <?php
        $ratedSheets =   $sheets = get_sheets_rating($_GET['course_id']);
        if (!empty($ratedSheets)) {
          foreach ($ratedSheets as $sheet) {
            ?>
            <div class="row">
              <div class="col-sm">
                <h6> <?php echo $sheet['Title'] ?> </h6>
              </div>
              <div class="col-xs details">
                <a href="#" class="view-dr-comment" data-toggle="modal" data-target="#doctor-comment">Doctor Comments</a>

                <!-- Modal -->
                <div class="modal fade" id="doctor-comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog col-9" style="margin: 15% auto;" role="document">
                    <div class="modal-content text-center">
                      <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="modal-header text-center">
                        <img src="includes/layout/images/logo.png" alt="Logo">
                        <p>Dr: <?php echo $sheet['doctorName']; ?> commented on your sheet </p>
                        <div class="dr-comment">
                          <?php echo $sheet['doctor_comment'] . '.'; ?>
                        </div>
                      </div>
                   </div>
                  </div>
                </div>
                <!-- End Modal -->


                <span> <?php echo $sheet['degree'] ?> /  <?php echo $sheet['wholedegree'] ?></span>
              </div>
            </div>
            <?php
          }
        }
        else{
          echo "<div class='warning'>Empty</div>";
        }
       ?>
      <div class="ratesOption">
        <div class="row">
          <div class="col-sm"></div>
          <div class="col-sm row details">
            <div class="col-xs">
              <a href="#">Load more</a>
              <img src="images/lines/newsTwolines.png" alt="">
            </div>
            <div class="col-xs">
              <a href="#">Old materials</a>
              <img src="images/lines/newsTwolines.png" alt="">
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
