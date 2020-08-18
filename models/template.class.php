<?php
  /**
   *
   */
  class template
  {
    private $css = array('mainPage.css', 'homePage.css');

    public function setCSS(){
      $cssArray = array();
      foreach ($this->css as $css) {
        if (file_exists(CSS_PATH . $css)) {
          $cssArray [] =  "<link rel='stylesheet' href= " . CSS_DIR . DS . $css . ">";
        }
      }
      return implode('', $cssArray);
    }

    // the same with JS
    // the same with CDN


    public function addMeta($name, $description)
    {
      return "<meta name=" .  $name . "content=" . $description . ">";
    }

    public function callTemplates(){
      foreach ($this->template as $template) {
        if (file_exists(TEMP_PATH . $template)) {
          require_once(TEMP_PATH . $template);
        }
      }
    }


    // To render the view if it's found!
    public function renderViews(){
      $view = (isset($_GET['view'])) ? $_GET['view'] : "index";
      $requiredFile = VIEWS_PATH . $view . '.view.php';
      if(file_exists($requiredFile)){
        require_once $requiredFile;
      }
      else{
        require_once VIEWS_PATH . '404.view.php';
      }
    }


    public function setupPage(){

    }

  }



 ?>
