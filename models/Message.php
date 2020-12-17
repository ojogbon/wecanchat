<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class Message extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("contact");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveMessage($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllMessage()
    {
        $sql = "select * from message";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllMessageBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getMessageById($id)
    {
        $sql = "select * from message where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateMessage ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

}


 ?>
