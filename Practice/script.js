function validateForm()
{
    var firstName = document.forms["myForms"]["firstName"].value.trim();
    var lastName = document.forms["myForm"]["lastName"].value.trim();

    // Check if it os empty//

    if(firstName=="" || lastName == ""){
        alert ("Both are required!!!");
        return false;
    }

    // Check minimum length
    if(firstName.length<2 || lastName.length<2){
        alert ("Each field must have at least 2 characters");
        return false;

    }

    return false;
}