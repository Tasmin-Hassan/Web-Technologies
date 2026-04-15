function validation(){

let name = document.getElementById("Sname").value;
let marks = document.getElementById("Smarks").value;


//check previous
document.getElementById("SnameError").innerHTML="";
document.getElementById("MError").innerHTML="";

let valid =true;


//Required
if(name==""){
    document.getElementById("SnameError").innerHTML="Name Requird!!!"
    valid= false
}

if(marks==""){
    document.getElementById("MError").innerHTML="Marks Required!!!"
    valid=false;
}


//Conditional

let namepattern = /^[A-Za-z]+$/;
if(!namepattern.test(name)){
    document.getElementById("SnameError").innerHTML="Invalid Formate";
    valid=false;
}


if(marks<0 || marks>100){
    document.getElementById("MError").innerHTML="Nedd 0 - 100!!!";
    valid= false;
}


//table 
if(valid){
    let table =document.getElementById("studentTable");

    let row =table.insertRow();
    let cell1= row.insertCell(0);
    let cell2 =row.insertCell(1);


    cell1.innerHTML=name;
    cell2.innerHTML=marks;

    if(marks>50){
        row.style.backgroundColor="green";
    }
    else{
        row.style.backgroundColor="red";
    }
   // document.getElementById("Sname").value="";
    // document.getElementById("Smarks").value="";

}


return false;

}