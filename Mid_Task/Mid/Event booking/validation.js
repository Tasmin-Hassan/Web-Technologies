function validationform(){

    let uname=document.getElementById("Name").value;
    let uemail=document.getElementById("Email").value;
    let uticket=document.getElementById("Ticket").value;
    let uevent=document.getElementById("Eevent").value;
    let udate=document.getElementById("Edate").value;
    let uagree=document.getElementById("Agree").checked;



    //clear previous

    document.getElementById("NameError").innerHTML="";
    document.getElementById("EmailError").innerHTML="";
    document.getElementById("TicketError").innerHTML="";
    document.getElementById("EventError").innerHTML="";
    document.getElementById("DateError").innerHTML="";
    document.getElementById("AgreeError").innerHTML="";


    let valid = true;

    //requried//

 let namepattern=/^[A-Za-z ]+$/;
    if(uname==""){
         document.getElementById("NameError").innerHTML="Required!!";
         valid=false;
    }
    else if(!namepattern.test(uname)){
         document.getElementById("NameError").innerHTML="invalid format";
         valid=false;
    }



     let emailpattern=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(uemail==""){
        document.getElementById("EmailError").innerHTML="Required!!";
        valid=false;
    }
   else if (!emailpattern.test(uemail)){
      document.getElementById("EmailError").innerHTML="invalid format";
      valid=false;
   }

    

    if(uticket=="")
    {
         document.getElementById("TicketError").innerHTML="Requried!!";
         valid=false;
    }
    else if(uticket <= 0){
    document.getElementById("TicketError").innerHTML = "Must be greater than 0";
    valid = false;
}



    if(uevent=="")
        {
        document.getElementById("EventError").innerHTML="Requried!!";
        valid=false;
        }

    if(udate=="")
    {
         document.getElementById("DateError").innerHTML="Requried!!";  
         valid=false;
    }

    if(!uagree)
    {
            document.getElementById("AgreeError").innerHTML="Required!!";
            valid=false;
    }
     
return valid;

}


