<?php

require_once( __DIR__.'/db.php' );

try{
  $q =  $db->prepare('SELECT * FROM users 
                      WHERE user_email	 = :sEmail LIMIT 1');
  $q->bindValue(':sEmail', $_POST['email-login']);
  $q->execute();
  $row = $q->fetch();

  if( password_verify($_POST['password-login'], $row['user_password']) ){
    session_start();
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_first_name'] = $row['user_first_name'];
    $_SESSION['user_last_name'] = $row['user_last_name'];
    $_SESSION['user_email'] = $row['user_email'];
    echo 'login succesful';
    exit();
  }
  http_response_code(401);
  echo '';


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
