var ageInput = document.getElementById('age');
var message = document.getElementById('message');

ageInput.addEventListener('input',function(){
    var age = parseInt(ageInput.value);


    if(age< 40){
        message.textContent="To be a part of the community, you need to at least 40";
         message.style.color = "black";
    }
    else if (age >= 40 && age <= 50) {
        message.textContent = "You are the youngsters of this community";
        message.style.color = "blue";
    }
    else if (age > 50) {
        message.textContent = "Top level members of the group";
        message.style.color = "red";
    }
   

    
});