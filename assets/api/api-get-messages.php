<?php

require_once( __DIR__.'/db.php' );

try{
    $query = $db->prepare('SELECT message_id, message_sender_fk, message_subject, message_content, message_created, user_id , user_first_name, user_last_name
                           FROM messages 
                           INNER JOIN users ON message_sender_fk=user_id
    WHERE message_receiver_fk = :userId  ORDER BY message_created DESC LIMIT 10');
    $query->bindValue(':userId', $_SESSION['user_id']);
    $query->execute();
    $row = $query->fetchAll();
    // if( !$row ){
    //     echo "Not messages";
    //     exit();
    // }
}catch(Exception $ex){
  echo $ex;
  sendError(500, 'system under maintainance', __LINE__);
}


// #############################################
function sendError($iResponseCode, $sMessage, $iLine){
  http_response_code($iResponseCode);
  header('Content-Type: application/json');
  echo '{"message":"'.$sMessage.'", "error":'.$iLine.'}';
  exit();
}

