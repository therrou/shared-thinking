<?php

//VALIDATE THE API'S
//VALIDATE THE API'S
//VALIDATE THE API'S
//VALIDATE THE API'S
//VALIDATE THE API'S
//VALIDATE THE API'S
if( ! isset($_POST['name']) ) { sendError(400, 'missing name', __LINE__); }
if( ! isset($_POST['lastName']) ){ sendError(400, 'missing lastname', __LINE__);}
if( ! isset($_POST['username']) ){ sendError(400, 'missing username', __LINE__);}
if( ! isset($_POST['email']) ){ sendError(400, 'missing email', __LINE__);}
if( ! isset($_POST['password']) ){ sendError(400, 'missing password', __LINE__);}
if( ! isset($_POST['confirmedPassword']) ){ sendError(400, 'missing confirmedPassword', __LINE__);}


if( strlen($_POST['name']) < 2 ){ sendError(400, 'name must be at least 2 characters', __LINE__);}
if( strlen($_POST['name']) > 20 ){ sendError(400, 'name cannot be longer than 5 characters', __LINE__);}
if( strlen($_POST['lastName']) < 2 ){sendError(400, 'lastName must be at least 2 characters', __LINE__);}
if( strlen($_POST['lastName']) > 20 ){ sendError(400, 'lastName cannot be longer than 5 characters', __LINE__);}
if( strlen($_POST['username']) < 2 ){ sendError(400, 'username must be at least 2 characters', __LINE__);}
if( strlen($_POST['username']) > 50 ){ sendError(400, 'username cannot be longer than 5 characters', __LINE__);}
if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ){ sendError(400, 'email is not valid', __LINE__);}
if( strlen($_POST['password']) < 6 ){ sendError(400, 'password must be at least 2 characters', __LINE__);}
if( strlen($_POST['password']) > 50 ){sendError(400, 'password cannot be longer than 5 characters', __LINE__);}
if( $_POST['password'] !=  $_POST['confirmedPassword'] ){  sendError(400, 'passwords do not match', __LINE__);
}



require_once( __DIR__.'/db.php' );

try{
  $query = $db->prepare('SELECT * FROM users 
  WHERE user_email = :sEmail LIMIT 1');
  $query->bindValue(':sEmail', $_POST['email']);
  $query->execute();
  $aRow = $query->fetch();
  if( $aRow ){ sendError(500, 'email already registered', __LINE__); }


//   INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`, `user_type_fk`, `user_verification_code`, 
//   `user_created`, `user_active`, `user_avatar_fk`, `user_posts_count`, `user_username`) 
//   VALUES (NULL, 'Tomas', 'Herrou', 'tomvcp@gmail.com', 'password1', '1', 'verification', '123123123', '0', '0', '0', 'therrou');

  $query = $db->prepare('INSERT INTO users 
  VALUES (:iId, :sName, :sLastName, :sEmail, :sPassword, :iUserType, :sVerificationCode, :iCreated,  :bActive, :userAvatar, :userPost, :sUserName,
   :user_profile_title, :user_profile_subtitle, :user_profile_description ) ');

  $query->bindValue(':iId', null);
  $query->bindValue(':sName', $_POST['name']);
  $query->bindValue(':sLastName', $_POST['lastName']);
  $query->bindValue(':sEmail', $_POST['email']);
  $query->bindValue(':sPassword', password_hash($_POST['password'], PASSWORD_DEFAULT) );
  $query->bindValue(':iUserType', $_POST['user_type']);
  $query->bindValue(':sVerificationCode', uniqid());
  $query->bindValue(':iCreated', time() );
  $query->bindValue(':bActive', 0);
  $query->bindValue(':userAvatar', 0);
  $query->bindValue(':userPost', 0);
  $query->bindValue(':sUserName', $_POST['username']) ;
  $query->bindValue(':user_profile_title', 'Complete with your position') ;
  $query->bindValue(':user_profile_subtitle', 'Complete with a subtitle') ;
  $query->bindValue(':user_profile_description', 'Tell to everybody about your history') ;

  $query->execute();

  session_start();
  $_SESSION['user_id'] = $db->lastInsertId();
  $_SESSION['user_first_name'] =  $_POST['name'];
  $_SESSION['user_last_name'] = $_POST['lastName'];
  $_SESSION['user_email'] = $_POST['email'];
  echo 'sign up succesful';
  http_response_code(200); // 201 created
  header('Content-Type: application/json');
  echo '{"id":'.$db->lastInsertId().'}';

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




