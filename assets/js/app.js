async function signup(){
  let form = document.getElementById('registerForm');
  var connection = await fetch('http://localhost/assets/api/api-signup-user.php', {
    method : "POST",
    body: new FormData(form)
  })
  if(connection.status == 200){
    console.log('User registered')
    location.href = '/';
  }else{
    var jResponse = await connection.json()
    if(jResponse.error === 33){
      document.getElementById('inputEmail').style.border = '1.5px solid red'
    }
  }
}


async function login (){
    let form = document.getElementById('loginForm');
    var connection = await fetch('http://localhost/assets/api/api-login.php', {
      method: "POST",
      body: new FormData(form)
    })
    if(connection.status == 200){
      console.log('Login successful')
      location.href = '/';
    }else{
      if(connection.status !== 200 ){
        alert('wrong credentials')
      }
    }
}

 
async function updateUser(){
  let form = document.getElementById('updateForm');
  var connection = await fetch('http://localhost/assets/api/api-update-user.php', {
    method: "POST",
    body: new FormData(form)
  })
  if(connection.status == 200){
    location.href = '/dashboard.php';
  }else{
    console.log('error update')
  }
}

async function createProject(){
  let form = document.getElementById('createProjectForm');
  var connection = await fetch('http://localhost/assets/api/api-create-project.php', {
    method : "POST",
    body: new FormData(form)
  })
  if(connection.status == 200){
    console.log('Project Created')
    location.reload();
  }else{
    console.log('error')
    }
  }


// async function getProjects(){
//   var connection = await fetch('/assets/api/api-get-projects.php')
//   if(connection.status == 200){
//     console.log('Getting Projects')
//   }else{
//     console.log('error')
//     }
// }

async function sendMessage(){
  let form = document.getElementById('sendMessageForm');
  var connection = await fetch('http://localhost/assets/api/api-create-message.php', {
    method: "POST",
    body: new FormData(form)
  })
  if(connection.status == 200){
    alert('message sended succesfully')
    location.reload();
  }else{
    console.log('error')
    }
}