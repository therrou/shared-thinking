<?php

require_once( __DIR__.'/db.php' );


try{
    $query = $db->prepare('SELECT * FROM users 
    LIMIT 10');
    $query->execute();
    $row = $query->fetchAll();
    if( !$row ){
        echo 'not users';
    }
}catch(Exception $ex){
        sendError(500, 'system under maintainance', __LINE__);
      }
      
      
      // #############################################
      function sendError($iResponseCode, $sMessage, $iLine){
        http_response_code($iResponseCode);
        header('Content-Type: application/json');
        echo '{"message":"'.$sMessage.'", "error":'.$iLine.'}';
        exit();
      }
    