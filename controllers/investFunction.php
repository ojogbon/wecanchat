<?php


/**
 *  this is the controller method for inserting all Invest
 * into the database (table name = 	Invest_tbl).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $Invest
 * @param $key
 * @param $header
 * @param $content
 * @param $image
 * @param $staff_id 
 ***/

function insertInvest($invest,$key, $amonut,$description,$user_id){

    if ($key == "1234567opiuyt") {

        if (isEmpty([$amonut,$description,$user_id])){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{      
                  $added = addslashes($description);
                    if($invest->saveInvest(" `invest_tbl`(`id`, `user_id`, `amonut`, `description`, `date`, `status`, `deleted`)",
                        "VALUES (null,'$user_id','$amonut','$added',now(),'0','0')")){
    
                            echo "<div class='alert alert-success'><b> Congratulations!</b>  Invest request successfully</div>";
                            $invest->recentActivityTale("invest",$amonut,$user_id);
                    }else{
    
                           echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                    }
        }
    }
}


/**
 *  this function handles the 
 *  edit of a Invest details
 * 
 *  @param $Invest
 *  @param $key
 *  @param $InvestTitle
 *  @param $InvestDescription
 *  @param $InvestImage
 *  @param $category_id
 *  @param $Invest_id
 * 
*/

function updateInvestDtails ($Invest,$key,$InvestTitle,$InvestDescription, $InvestImage,$category_id ,$Invest_id,$price){


    if(!empty($key) && $key === "1234567opiuyt" ){

        if(isEmpty([$Invest,$InvestTitle,$InvestImage,$InvestDescription, $Invest_id,$category_id,$price])){
            echo "<div class='alert alert-danger'><b>Feilds can't be empty! </b>   Please fill up and try again</div>";
        }else{
            $uploaded = uploadImage ($foodImage,"./loadedImage/");
            if ( $uploaded[0] !== "TRUE" || $extra[0] !== "TRUE"){
                      echo $uploaded;
            }else{
                $added = addslashes($InvestDescription);
                $sql = "update Invest set title = '$foodTitle', description = '$added' ,image = '$uploaded[1]' ,path = '$uploaded[2]',category_id = '$category_id',price='$price' where id = '$Invest_id' ";

                 if ( $Invest->UpdateFood($sql) == ""){
                    echo "<div class='alert alert-success'><b> Congratulations! </b>  Invest details successfully  </div>";
                 }else{
                    echo "<div class='alert alert-danger'><b>Something Happened ! </b>   Please try again</div>";
                 }

            }
        }


    }

}