<?php

include "call.php";

include "withdrawFunction.php";

include ($_SERVER['DOCUMENT_ROOT']."/". $parent_path.'models/Withdraw.php');


function doAboutCheck () {
    
    $withdraw = new Withdraw();

        if(is_ajax_resquest()){

            $key = "1234567opiuyt";


            if(RequestType() === 0){
                $id = $_GET["id"];
                $sql = "UPDATE `withdraw_tbl` SET status = 1 where id = '".$id."'";
                echo $withdraw->UpdateWithdraw($sql);
            }else{
               
            }
            
        }
}




function getAllWithdraws ($withdraw){
        return $withdraw->getAllWithdraw();
}
doAboutCheck ();