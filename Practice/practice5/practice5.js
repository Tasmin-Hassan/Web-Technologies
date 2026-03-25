var markInput = document.getElementById('mark');
var message = document.getElementById('message');


markInput.addEventListener('input',function(){
    var mark = parseInt (markInput.value);

    if(mark<40){
        message.textContent="Sorry!!Fail";
        message.style.color="red";
    }

    else if(mark>=40 && mark<=59){
        message.textContent="Pass, Need more preparation!";
        message.style.color="purple";
    }

    else if(mark>=60 && mark <=79){
        message.textContent="Good,Study more";
        message.style.color="blue";

    }
     else if(mark>=80){
        message.textContent="Excellent!!!!!";
        message.style.color="green";
     }
});