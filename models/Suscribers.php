<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class Suscribers extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("suscribers");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveSuscribers($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllSuscribers()
    {
        $sql = "select * from suscribers";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllSuscribersBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getSuscribersById($id)
    {
        $sql = "select * from suscribers where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateSuscribers ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

}


 ?>
