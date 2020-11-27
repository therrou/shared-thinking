<?php
session_start();
$userId = $_SESSION['user_id'];
//VALIDATE THE API'S
//VALIDATE THE API'S
//VALIDATE THE API'S
//VALIDATE THE API'S
//VALIDATE THE API'S
// if( ! isset($_POST['username']) ) { sendError(400, 'missing name', __LINE__); }
// if( ! isset($_POST['profile_title']) ){ sendError(400, 'missing title', __LINE__);}
// if( ! isset($_POST['profile_subtitle']) ){ sendError(400, 'missing subtitle', __LINE__);}
// if( ! isset($_POST['profile_description']) ){ sendError(400, 'missing description', __LINE__);}

try{
        // Is very importan not connect to DB unless we have all prepare. 
    require_once(__DIR__.'/db.php');
    $query = $db->prepare('UPDATE users 
                           SET user_username=:sUserName, user_profile_title=:user_profile_title,user_profile_subtitle=:user_profile_subtitle,user_profile_description=:user_profile_description	
                           WHERE user_id = :userId ' );
    //   $query->bindValue(':userId', $_SESSION['user_id']) ;                          
      $query->bindValue(':sUserName', $_POST['username']) ;
      $query->bindValue(':userId', $userId) ;
      $query->bindValue(':user_profile_title', $_POST['profile_title']) ;
      $query->bindValue(':user_profile_subtitle', $_POST['profile_subtitle']) ;
      $query->bindValue(':user_profile_description', $_POST['profile_description']) ;
      $query->execute();
    if( $query->rowCount() == 0 ){
        sendError(500, 'user cannot be updated', __LINE__);
    }
   
        header('content-Type: application/json');
        echo '{"message":"user updated"}';

}catch(PDOException $ex){
    echo $ex;
    sendError(500, 'contact the system admin about error', __LINE__);
}

//##########################################################
//##########################################################
//##########################################################
//##########################################################
//##########################################################


    function sendError($iErrorCode, $sMessage, $iLine){
        http_response_code($iErrorCode);
        header('content-Type: application/json');
        echo '{"message":"'.$sMessage.'", "error":"'.$iLine.'"}';
        exit();
    }