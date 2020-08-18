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

     <div class="coursesContent">
        <!-- start About-us -->
        <div class="leadership-section">
          <h1>leadership</h1>
          <h1 class="double-cotation">""</h1>
          <div class="leaders">
            <div class="row">
              <div class="col-md-4">
                <img src="includes/layout/images\members\zanaty.png">
              </div>
              <div class="col-md-8  leader-content">
                <h3>Abdelrahman mohamed</h3>
                <h5>Founder, Chairman and Chief Executive Officer</h5>
                <span class="fb-follow fb_iframe_widget" data-href="https://www.facebook.com/Developer.AbdelrahmaN.M" data-width="600" data-colorscheme="light" data-layout="button_count" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1908693766059395&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600"><span style="vertical-align: bottom; width: 89px; height: 20px;"><iframe name="f325e025b185ea" width="600px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:follow Facebook Social Plugin" src="https://www.facebook.com/plugins/follow.php?app_id=1908693766059395&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df3a4a94c0bfbc28%26domain%3Dnewsroom.fb.com%26origin%3Dhttps%253A%252F%252Fnewsroom.fb.com%252Fffd0746fa632a4%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600" style="border: none; visibility: visible; width: 89px; height: 20px;" class=""></iframe></span>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
            <!-- second member -->
            <div class="row">
              <div class="col-md-4">
                <img src="includes/layout/images\members\elshakh.png">
              </div>
              <div class="col-md-8  leader-content">
                <h3>Abdelrahman Elshikh</h3>
                <h5>Founder, Chairman and Chief Executive Officer</h5>
                <span class="fb-follow fb_iframe_widget" data-href="https://www.facebook.com/Developer.AbdelrahmaN.M" data-width="600" data-colorscheme="light" data-layout="button_count" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1908693766059395&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600"><span style="vertical-align: bottom; width: 89px; height: 20px;"><iframe name="f325e025b185ea" width="600px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:follow Facebook Social Plugin" src="https://www.facebook.com/plugins/follow.php?app_id=1908693766059395&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df3a4a94c0bfbc28%26domain%3Dnewsroom.fb.com%26origin%3Dhttps%253A%252F%252Fnewsroom.fb.com%252Fffd0746fa632a4%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600" style="border: none; visibility: visible; width: 89px; height: 20px;" class=""></iframe></span>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
            <!-- thired member -->
            <div class="row">
              <div class="col-md-4">
                <img src="includes/layout/images\members\miko.png">
              </div>
              <div class="col-md-8  leader-content">
                <h3>Ahmed mohamed</h3>
                <h5>Founder, Chairman and Chief Executive Officer</h5>
                <span class="fb-follow fb_iframe_widget" data-href="https://www.facebook.com/Developer.AbdelrahmaN.M" data-width="600" data-colorscheme="light" data-layout="button_count" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1908693766059395&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600"><span style="vertical-align: bottom; width: 89px; height: 20px;"><iframe name="f325e025b185ea" width="600px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:follow Facebook Social Plugin" src="https://www.facebook.com/plugins/follow.php?app_id=1908693766059395&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df3a4a94c0bfbc28%26domain%3Dnewsroom.fb.com%26origin%3Dhttps%253A%252F%252Fnewsroom.fb.com%252Fffd0746fa632a4%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600" style="border: none; visibility: visible; width: 89px; height: 20px;" class=""></iframe></span>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
            <!-- forth member -->
            <div class="row">
              <div class="col-md-4">
                <img src="includes/layout/images\members\moaaz.png">
              </div>
              <div class="col-md-8  leader-content">
                <h3>Moaaz ELdesoky</h3>
                <h5>Founder, Chairman and Chief Executive Officer</h5>
                <span class="fb-follow fb_iframe_widget" data-href="https://www.facebook.com/Developer.AbdelrahmaN.M" data-width="600" data-colorscheme="light" data-layout="button_count" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1908693766059395&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600"><span style="vertical-align: bottom; width: 89px; height: 20px;"><iframe name="f325e025b185ea" width="600px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:follow Facebook Social Plugin" src="https://www.facebook.com/plugins/follow.php?app_id=1908693766059395&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df3a4a94c0bfbc28%26domain%3Dnewsroom.fb.com%26origin%3Dhttps%253A%252F%252Fnewsroom.fb.com%252Fffd0746fa632a4%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600" style="border: none; visibility: visible; width: 89px; height: 20px;" class=""></iframe></span>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
            <!-- fifth member -->
            <div class="row">
              <div class="col-md-4">
                <img src="includes/layout/images\members\sheryl-sandberg-headshot.png">
              </div>
              <div class="col-md-8  leader-content">
                <h3>mohamed mamdoh</h3>
                <h5>Founder, Chairman and Chief Executive Officer</h5>
                <span class="fb-follow fb_iframe_widget" data-href="https://www.facebook.com/Developer.AbdelrahmaN.M" data-width="600" data-colorscheme="light" data-layout="button_count" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1908693766059395&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600"><span style="vertical-align: bottom; width: 89px; height: 20px;"><iframe name="f325e025b185ea" width="600px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:follow Facebook Social Plugin" src="https://www.facebook.com/plugins/follow.php?app_id=1908693766059395&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df3a4a94c0bfbc28%26domain%3Dnewsroom.fb.com%26origin%3Dhttps%253A%252F%252Fnewsroom.fb.com%252Fffd0746fa632a4%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600" style="border: none; visibility: visible; width: 89px; height: 20px;" class=""></iframe></span>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
            <!-- sixth member -->
            <div class="row">
              <div class="col-md-4">
                <img src="includes/layout/images\members\sheryl-sandberg-headshot.png">
              </div>
              <div class="col-md-8  leader-content">
                <h3>mohamed Khalil</h3>
                <h5>Founder, Chairman and Chief Executive Officer</h5>
                <span class="fb-follow fb_iframe_widget" data-href="https://www.facebook.com/Developer.AbdelrahmaN.M" data-width="600" data-colorscheme="light" data-layout="button_count" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1908693766059395&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600"><span style="vertical-align: bottom; width: 89px; height: 20px;"><iframe name="f325e025b185ea" width="600px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:follow Facebook Social Plugin" src="https://www.facebook.com/plugins/follow.php?app_id=1908693766059395&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df3a4a94c0bfbc28%26domain%3Dnewsroom.fb.com%26origin%3Dhttps%253A%252F%252Fnewsroom.fb.com%252Fffd0746fa632a4%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=630&amp;href=http%3A%2F%2Fwww.facebook.com%2Fzuck&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=600" style="border: none; visibility: visible; width: 89px; height: 20px;" class=""></iframe></span>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- End About-us -->
        </div>

    <?php
      include('includes/templates/footer.php');
    ?>
