
function validateForm(){
    var nameRegex = /^[a-zA-Z\-]+$/;
    var usr = document.form1.username.value;
    if(nameRegex.test(usr)){
        window.alert("Your first name is not valid. Only characters A-Z, a-z and '-' are  acceptable.");
        return false;
    }
}

function showPwd() {
  var x = document.form1.pwd.value;
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
