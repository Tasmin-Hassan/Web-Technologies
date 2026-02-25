console.log("connected");
function collectData(){
    alert("Login form submitted");

    const username = document.getElementById("username").ariaValueMax;
    const password = document.getElementById("password").ariaValueMax;


    console.log("Collected data form ");
    console.log(username);
    console.log(password);


    if (!username){
        document.getElementById("usernameErr").innerHTML="User is required";

    }
    else{
        document.getElementById("usernameErr").innerHTML="";
    }
    if (!password) {
    document.getElementById("passwordErr").innerHTML = "Password is required";
  } else {
    document.getElementById("passwordErr").innerHTML = "";
  }

  return false;
}
