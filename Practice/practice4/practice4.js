var yearInput = document.getElementById('year');
var message = document.getElementById('message');


yearInput.addEventListener('input',function(){
    var year= parseInt(yearInput.value);


    if(year%4==0 && year%100!=0 || (year % 400 == 0)){
        message.textContent="Leap year";
        message.style.color="purple";
    }

    else{
         message.textContent=" Not Leap year";
          message.style.color="Red";
    }
    
});