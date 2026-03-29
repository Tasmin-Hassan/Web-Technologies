function validform()
{
    let uname=document.getElementById("fullName").value;
    let uemail=document.getElementById("email").value;
    let upass=document.getElementById("password").value;
    let cpass=document.getElementById("Cpassword").value;
   // let ugender=document.getElementById("gender").value;

   let genderElement=document.querySelector('input[name="gender"]:checked');
   let ugender = genderElement ? genderElement.value : "";

    let udate= document.getElementById("Date").value;



    //clear previous errors
    document.getElementById("NameError").innerHTML="";
        document.getElementById("EmailError").innerHTML="";
        document.getElementById("PasswordError").innerHTML="";
            document.getElementById("CPasswordError").innerHTML="";
            document.querySelector('input[name="gender"]:checked')
            document.getElementById("DateError").innerHTML="";


            let valid =true;


            //1.Required

            if(uname==""){
                   document.getElementById("NameError").innerHTML="Required";
                   valid = false;
            }

            if(uemail==""){
                 document.getElementById("EmailError").innerHTML="Required";
                 valid = false;
            }

                  if(upass=="" ){
                document.getElementById("PasswordError").innerHTML="Required";
                valid=false;
            }

            
            if(cpass==""){
                document.getElementById("CPasswordError").innerHTML="Required";
                valid=false;
            }

             
            if(ugender==""){
                document.getElementById("genderError").innerHTML="Select gender";
                valid=false;
            }

             if(udate==""){
                document.getElementById("DateError").innerHTML="Select Date";
                valid=false;
            }


            //Conditional 
            
            if(upass.length<8 ){
                document.getElementById("PasswordError").innerHTML="At least 8 characters";
                valid=false;
            }

            if(cpass!=upass){
                document.getElementById("CPasswordError").innerHTML="Not Match";
                valid=false;
            }


            let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
             if(uemail != "" && !pattern.test(uemail)){
                 document.getElementById("EmailError").innerHTML="Invalid format";
                 valid = false;
            }


            

            return valid;



        }
