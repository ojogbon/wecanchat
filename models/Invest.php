<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class  Invest extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("invest_tbl");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveInvest($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllInvest()
    {
        $sql = "select * from   invest_tbl";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllInvestBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getInvestById($id)
    {
        $sql = "select * from  invest_tbl where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateInvest ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

 public function recentActivityTale ($type,$amonut,$user_id){

  return $this->recentActivity($type,$amonut,$user_id);
}

}


 ?>
