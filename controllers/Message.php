<?php



/**
 *  this is the controller method for inserting all Messages
 * into the database (dbname = Message).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $Message
 * @param $key
 * @param $firstName
 * @param $lastName
 * @param $password
 * @param $confirm_password
 * @param $passport
 * @param $emil
 * @param $Message_id  
 * @param $role   
 ***/

function insertMessage($message,$key, $sender,$reciever,$msg,$type,$status){
        echo "   sender :::  ".$sender."  okay    @ ".$reciever."    ! ". $msg ."    % ".$type."    - ".$status;
    if ($key == "1234567opiuyt") {

        if ( empty($sender)
        || empty($reciever)
        || empty($msg)
        || empty($type)
        || empty($status)
    ){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{
            //     $uploaded = uploadImage ($passport,"../loadedImage/");
            //   if ( $uploaded[0] !== "TRUE" ){
            //             echo $uploaded[0];
            //   }else{

                    if($message->saveMessage(" `message`(`id`, `sender`, `reciever`,
                     `msg`, `type`, `date`, `status`, `deleted`) ",
                        "VALUES (null,'$sender','$reciever', '$msg','$type',now(),'$status','0')")){
    
                              echo "<script type='text/javascript'> window.location.replace('index.php?reciever=".$reciever."&key=&action_type=&function_type&staff_id');</script>";
                    }else{
    
                            echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened!</b>   Please try again</div>";
                    }
                

            //   }
              
         
        }
    }
}












 


?>
