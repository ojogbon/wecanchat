<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class Activity extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("activity");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveActivity($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllActivity()
    {
        $sql = "select * from activity";
          
        
        $result = $this->db->getAll($sql);
      
            return $result;
    }

    public function getAllActivityBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getActivityById($id)
    {
        $sql = "select * from activity where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateActivity ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

}


 ?>
