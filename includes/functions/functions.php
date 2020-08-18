<?php
  function getTitle($title){
    return $title;
  }

  // return the courses depend on the level and/or department of the user!
  function getCourses($level,$department = 0){
    global $con;
    $stmt = $con->prepare('SELECT * FROM course WHERE level = ? AND departmentID = ?');
    $stmt->execute(array($level, $department));
    return $stmt->fetchAll();
  }

  // get News
  function get_news(){
    global $con;
    if (!isset($_GET['course_id'])) {
      $stmt = $con->prepare('SELECT news.*, users.Name FROM news INNER JOIN users ON
                             news.PublisherID = users.ID');
      $stmt->execute();
    }
    else{
      $stmt = $con->prepare('SELECT * FROM news WHERE courseID = ?');
      $stmt->execute(array($_GET['course_id']));
    }
    return $stmt->fetchAll();
  }

  // get news poster Name
  function get_poster($posterID){
    global $con;
    $stmt = $con->prepare('SELECT Name FROM users WHERE ID = ?');
    $stmt->execute(array($posterID));
    return $stmt->fetchColumn();
  }


  // get comments
  function get_comments($postID){
    global $con;
    $stmt = $con->prepare('SELECT * FROM comments WHERE newsID = ?');
    $stmt->execute(array($postID));
    return $stmt->fetchAll();
  }
  // get Commenter
  function get_Commenter($commenterID){
    global $con;
    $stmt = $con->prepare('SELECT Name FROM users WHERE ID = ?');
    $stmt->execute(array($commenterID));
    return $stmt->fetchColumn();
  }


  // get Logined user name
  function get_username($userid){
    global $con;
    $stmt = $con->prepare('SELECT * FROM users WHERE ID = ?');
    $stmt->execute(array($userid));
    return $stmt->fetch();
  }


  // get Logined user name
  function get_files($courseID, $type){
    global $con;
    if ($type === 'All') {
      $stmt = $con->prepare('SELECT * FROM matrial WHERE CourseID = ?');
      $stmt->execute(array($courseID));
    }
    else {
      $stmt = $con->prepare('SELECT * FROM matrial WHERE CourseID = ? AND type = ?');
      $stmt->execute(array($courseID, $type));
    }

    return $stmt->fetchAll();
  }
  function get_publisher($id){
    global $con;
    $stmt = $con->prepare('SELECT Name FROM users WHERE ID = ?');
    $stmt->execute(array($id));
    return $stmt->fetchColumn();
  }

  // get Assignments
  function get_sheets($course){
    global $con;
    $stmt = $con->prepare('SELECT * FROM assignments where CourseID = ?');
    $stmt->execute(array($course));
    return $stmt->fetchAll();
  }


  // get Assignments
  function get_sheets_rating($course){
    global $con;
    $stmt = $con->prepare('SELECT assignments.*, users.Name AS doctorName FROM assignments INNER JOIN users ON assignments.DoctorID = users.ID
                           WHERE assignments.CourseID = ? AND assignments.submitted = 1');
    $stmt->execute(array($course));
    return $stmt->fetchAll();
  }

 ?>
