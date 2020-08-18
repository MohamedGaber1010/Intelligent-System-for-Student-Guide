<?php
  /**
   *
   */
  class databasemodel
  {
    public function attributes(){
      $string = array();
      foreach ($this->dbfields as $field) {
        if (is_int($this->$field)) {
          $string = $field . " = " . $this->$field;
        }
        else {
          $string = $field . " = '" . $this->$field . "'";
        }
      }
      return implode(', ', $string);
    }


    public function add(){
      global $dbcon;
      $sql = "INDERT INTO" . $this->tableName . " SET " . $this->attributes();
      $dbcon->exec($sql);
    }

  }



 ?>
