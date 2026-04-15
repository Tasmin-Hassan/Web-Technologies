function validation()
{
    let aage= document.getElementById("uage").value;



document.getElementById("ageError").innerHTML="";



let valid= true;


if(aage<40){
    document.getElementById("ageError").innerHTML="To be a part of the community, you need to at least 40";
    valid=false;
}

else if(aage>=40 && aage<=50){
    document.getElementById("ageError").innerHTML="You are the youngsters of this community";
    valid=false;
}

else if(aage>50){
    document.getElementById("ageError").innerHTML="Top level members of the group";
    valid=false;
}

return valid;




}