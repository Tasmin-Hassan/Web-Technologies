var passInput = document.getElementById('pass');
var message = document.getElementById('message');


passInput.addEventListener('input',function(){
    var pass = parseInt(passInput.value);

    if (pass<6){
        message.textContent="Weak password!!!";
        message.style.color="red";
    }
       else if (pass>=6 && pass<=9){
        message.textContent="Medium password!!!";
        message.style.color="blue";
    }

    else if (pass>=10){
        message.textContent="Strong Password!!!";
        message.style.color="green";
    }

    else{
        message.textContent="sir,Enter your password";
        message.style.color="black";
    }


});

