<?php


/**
 *  this is the controller method for inserting all Withdrawer
 * into the database (table name = 	Withdrawer_tbl).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $Withdrawer
 * @param $key
 * @param $header
 * @param $content
 * @param $image
 * @param $staff_id 
 ***/

function insertWithdrawer($withdrawer,$key, $amonut,$description,$user_id){

    if ($key == "1234567opiuyt") {

        if (isEmpty([$amonut,$description,$user_id])){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{      
                  $added = addslashes($description);
                    if($withdrawer->saveWithdraw(" `withdraw_tbl`(`id`, `user_id`, `amonut`, `description`, `date`, `status`, `deleted`) ",
                        "VALUES (null,'$user_id','$amonut','$added',now(),'0','0')")){
    
                            echo "<div class='alert alert-success'><b> Congratulations!</b>  Withdrawer request successfully</div>";

                            $withdrawer->recentActivityTale ("withdraw",$amonut,$user_id);
                    }else{
    
                           echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                    }
        }
    }
}



// function insertWithdrawer($withdrawer,$key, $amonut,$description,$user_id){

//     if ($key == "1234567opiuyt") {

//         if (isEmpty([$amonut,$description,$user_id])){
//             echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
//         }else{      
//                   $added = addslashes($description);
//                     if($withdrawer->saveWithdraw(" `invest_tbl`(`id`, `user_id`, `amonut`, `description`, `date`, `status`, `deleted`)",
//                         "VALUES (null,'$user_id','$amonut','$added',now(),'0','0')")){
    
//                             echo "<div class='alert alert-success'><b> Congratulations!</b>  Withdrawer request successfully</div>";
//                     }else{
    
//                            echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
//                     }
//         }
//     }
// }


/**
 *  this function handles the 
 *  edit of a Withdrawer details
 * 
 *  @param $Withdrawer
 *  @param $key
 *  @param $WithdrawerTitle
 *  @param $WithdrawerDescription
 *  @param $WithdrawerImage
 *  @param $category_id
 *  @param $Withdrawer_id
 * 
*/

function updateWithdrawerDtails ($Withdrawer,$key,$WithdrawerTitle,$WithdrawerDescription, $WithdrawerImage,$category_id ,$Withdrawer_id,$price){


    if(!empty($key) && $key === "1234567opiuyt" ){

        if(isEmpty([$Withdrawer,$WithdrawerTitle,$WithdrawerImage,$WithdrawerDescription, $Withdrawer_id,$category_id,$price])){
            echo "<div class='alert alert-danger'><b>Feilds can't be empty! </b>   Please fill up and try again</div>";
        }else{
            $uploaded = uploadImage ($foodImage,"./loadedImage/");
            if ( $uploaded[0] !== "TRUE" || $extra[0] !== "TRUE"){
                      echo $uploaded;
            }else{
                $added = addslashes($WithdrawerDescription);
                $sql = "update Withdrawer set title = '$foodTitle', description = '$added' ,image = '$uploaded[1]' ,path = '$uploaded[2]',category_id = '$category_id',price='$price' where id = '$Withdrawer_id' ";

                 if ( $Withdrawer->UpdateFood($sql) == ""){
                    echo "<div class='alert alert-success'><b> Congratulations! </b>  Withdrawer details successfully  </div>";
                 }else{
                    echo "<div class='alert alert-danger'><b>Something Happened ! </b>   Please try again</div>";
                 }

            }
        }


    }

}