<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class Withdraw extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("withdraw_tbl");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveWithdraw($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllWithdraw()
    {
        $sql = "select * from withdraw_tbl";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllWithdrawBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getWithdrawById($id)
    {
        $sql = "select * from withdraw_tbl where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateWithdraw ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

 public function recentActivityTale ($type,$amonut,$user_id){

     return $this->recentActivity($type,$amonut,$user_id);
 }

}


 ?>
