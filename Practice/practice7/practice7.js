var numInput = document.getElementById('num');
var message = document.getElementById('message');

numInput.addEventListener('input',function(){
    var num = parseInt(numInput.value);

    if(num>0){
        message.textContent="positive";
        message.style.color="green";
    }

    else if(num<0){
         message.textContent="negative";
        message.style.color="red";

    }
    
    else if(num==0){
         message.textContent="zero";
        message.style.color="blue";

    }
    else{
         message.textContent="";
    }

    if(num%2==0){
         message.textContent +="Even";
      

    }
    else{

        message.textContent +="odd";
        
    }

});