<?php

require_once( __DIR__.'/db.php' );

try{
    $query = $db->prepare('SELECT project_title, project_content,
    project_created, project_total_students, project_career, project_university, user_id, user_first_name, 
    user_last_name, user_profile_subtitle FROM projects 
    INNER JOIN users ON project_user_fk=user_id
    WHERE project_id = :project_id LIMIT 1');
    $query->bindValue(':project_id', $_GET['id']);
    $query->execute();
    $row = $query->fetch();
    if( !$row ){
        echo "project don't exist";
        exit();
    }
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

