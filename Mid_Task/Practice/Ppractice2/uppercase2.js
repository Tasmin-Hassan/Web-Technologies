let uinput = document.getElementById("uname");

uinput.addEventListener("keyup", convertUpper);

function convertUpper(){
    uinput.value=uinput.value.toUpperCase();
}