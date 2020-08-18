<?php
  // Setting output buffer
  ob_start();

  // Error handling
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

  // Turn off register globals, Which mean instead of $id >> use $_GET['id'] ..
  // PHP5.3 (deprecated), PHP5.4 (Obseleted)
  ini_set('register_globals' , 0);

  // Define App Constants
    // Shortcuts
    define('DS', DIRECTORY_SEPARATOR);
    define('PS', PATH_SEPARATOR);
    // SERVER
    define('HOST_NAME', 'http://' . $_SERVER['HTTP_HOST'] . '/');
    define('CSS_DIR', HOST_NAME . 'GP' . DS . 'includes' . DS . 'layout' . DS . "css");
    define('VIEWS_DIR', HOST_NAME . 'GP' . DS . 'views' . DS);
    // Paths
    define('APP_PATH', realpath(dirname(__FILE__)) . DS);
    define('TEMP_PATH', APP_PATH . 'templates' . DS);
    define('MODELS_PATH', APP_PATH . 'models' . DS);
    define('LIB_PATH', APP_PATH . 'libraries' . DS);
    define('CSS_PATH', APP_PATH . 'includes' . DS . 'layout' . DS . "css" . DS);
    define('VIEWS_PATH', APP_PATH . 'views' . DS);
    // DataBase Creddentials
    define('DB_HOST','localhost');
    define('DB_NAME','GP');
    define('DB_USER','root');
    define('DB_PASS','');



 // define the new paths that php uses to find the called classes
 $path = get_include_path() . PS . LIB_PATH . PS . MODELS_PATH;

 // set the new paths
 set_include_path($path);

 // autoload function to load the class by it's name
 //function __autoload($className)
 //{
  // require_once strtolower($className) . '.class.php';
 //}


 // The same commented autoload function but with high performance
 function myAutoload($className){
   require_once strtolower($className) . '.class.php';
 }

 spl_autoload_register('myAutoload');


 // PDO Database Connection
 $dbcon = DataBase::getInstance();


 // test template class
 $temp = new template();
 $temp->setCSS();
 $temp->addMeta('twitter', 'egyptkdnfkndkf, kdnfkd k');
 $temp->renderViews();

 // Assume you want to read the css files
 $dir = opendir(APP_PATH . 'includes' . DS . 'layout' . DS . "css");
 while ( $file = readdir($dir) )
 {
   // echo $file . '<br>';
 }



  // End the buffer and send the output
  ob_flush();
 ?>
