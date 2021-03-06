<?php
session_start();
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

  $query = $db->prepare('INSERT INTO projects 
  VALUES (:projectId, :project_title, :project_content, :project_image_fk, :project_content_image_path, :project_owner_fk, :project_created,
          :bActive, :project_questions_count, :project_location, :project_comments_count,
          :project_total_students, :project_career_fk, :project_university_fk ) ');

  $query->bindValue(':projectId', null);
  $query->bindValue(':project_title', $_POST['project_title']);
  $query->bindValue(':project_content', $_POST['project_content']);
  $query->bindValue(':project_image_fk', 0);
  $query->bindValue(':project_content_image_path', '1.png' ); 
  $query->bindValue(':project_owner_fk', $_POST['user_id']);
  $query->bindValue(':project_created', time() );
  $query->bindValue(':bActive', 1);
  $query->bindValue(':project_questions_count', 0);
  $query->bindValue(':project_location', $_POST['project_location']);
  $query->bindValue(':project_comments_count', 0) ;
  $query->bindValue(':project_total_students', $_POST['project_students']) ;
  $query->bindValue(':project_career_fk', $_POST['project_career']) ;
  $query->bindValue(':project_university_fk', $_POST['project_university']) ;

  $query->execute();
  

  echo 'Project posted succesfully';
  http_response_code(200); // 201 created
  header('Content-Type: application/json');
  echo '{"id":'.$db->lastInsertId().'}';

}catch(Exception $ex){
  // echo $ex;
  sendError(500, 'system under maintainance', __LINE__);
}






// #############################################
function sendError($iResponseCode, $sMessage, $iLine){
  http_response_code($iResponseCode);
  header('Content-Type: application/json');
  echo '{"message":"'.$sMessage.'", "error":'.$iLine.'}';
  exit();
}

