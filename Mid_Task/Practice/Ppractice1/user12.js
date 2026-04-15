function validation(){

    let uname1= document.getElementById("name1").value.trim();
    let uname2= document.getElementById("name2").value.trim();




    if(uname1=="")
    {
       alert("First name required!!!");
        return false;
    }

    else if(uname1.length<2)
    {
            alert("First name must be more than 2 char");
        return false;

    }

    if(uname2=="")
    {
        alert("Last name required!!!");
        return false;
    }

     else if(uname2.length<2)
    {
            alert("Last name must be more than 2 char");
        return false;

    }

     
    return true;

}