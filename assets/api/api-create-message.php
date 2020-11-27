<?php


// VALIDATE ALL THE API'S 
// VALIDATE ALL THE API'S 
// VALIDATE ALL THE API'S 
// if( ! isset($_POST['project_title']) ) { sendError(400, 'missing project_title', __LINE__); }
// if( ! isset($_POST['project_content ']) ){ sendError(400, 'missing project_content ', __LINE__);}
// if( ! isset($_POST['username']) ){ sendError(400, 'missing username', __LINE__);}
// if( ! isset($_POST['email']) ){ sendError(400, 'missing email', __LINE__);}
// if( ! isset($_POST['password']) ){ sendError(400, 'missing password', __LINE__);}
// if( ! isset($_POST['confirmedPassword']) ){ sendError(400, 'missing confirmedPassword', __LINE__);}
// if( strlen($_POST['name']) < 2 ){ sendError(400, 'name must be at least 2 characters', __LINE__);}
// if( strlen($_POST['name']) > 20 ){ sendError(400, 'name cannot be longer than 5 characters', __LINE__);}
// if( strlen($_POST['lastName']) < 2 ){sendError(400, 'lastName must be at least 2 characters', __LINE__);}
// if( strlen($_POST['lastName']) > 20 ){ sendError(400, 'lastName cannot be longer than 5 characters', __LINE__);}
// if( strlen($_POST['username']) < 2 ){ sendError(400, 'username must be at least 2 characters', __LINE__);}
// if( strlen($_POST['username']) > 50 ){ sendError(400, 'username cannot be longer than 5 characters', __LINE__);}
// if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ){ sendError(400, 'email is not valid', __LINE__);}
// if( strlen($_POST['password']) < 6 ){ sendError(400, 'password must be at least 2 characters', __LINE__);}
// if( strlen($_POST['password']) > 50 ){sendError(400, 'password cannot be longer than 5 characters', __LINE__);}
// if( $_POST['password'] !=  $_POST['confirmedPassword'] ){  sendError(400, 'passwords do not match', __LINE__);
// }



require_once( __DIR__.'/db.php' );

try{

   $query = $db->prepare('INSERT INTO messages 
  VALUES (:message_id, :message_sender_fk, :message_receiver_fk, :message_subject
  ,:message_content, :message_created, :message_active) ');

  $query->bindValue(':message_id', null);
  $query->bindValue(':message_sender_fk', $_POST['message_sender_id'] );
  $query->bindValue(':message_receiver_fk', $_POST['message_receiver_id'] );
  $query->bindValue(':message_subject', $_POST['message_subject'] );
  $query->bindValue(':message_content', $_POST['message_content'] );
  $query->bindValue(':message_created', time() );
  $query->bindValue(':message_active', 1);
  $query->execute();
  
//   session_start();
//   $_SESSION['user_id'] = $row['user_id'];
//   $_SESSION['user_first_name'] = $row['user_first_name'];
//   $_SESSION['user_last_name'] = $row['user_last_name'];
//   $_SESSION['user_email'] = $row['user_email'];
  echo 'Message sended succesfully';
  http_response_code(200); // 201 created
  header('Content-Type: application/json');
  echo '{"id":'.$db->lastInsertId().'}';

}catch(Exception $ex){
//   echo $ex;
  sendError(500, 'system under maintainance', __LINE__);
}



// #############################################
function sendError($iResponseCode, $sMessage, $iLine){
  http_response_code($iResponseCode);
  header('Content-Type: application/json');
  echo '{"message":"'.$sMessage.'", "error":'.$iLine.'}';
  exit();
}

