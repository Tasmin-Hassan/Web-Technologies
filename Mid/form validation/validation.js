function validateForm() {

    let name = document.getElementById("productName").value;
    let price =document.getElementById("productPrice").value;
    let quantity = document.getElementById("quantity").value;
    let category = document.getElementById("category").value;
    let date = document.getElementById("expiryDate").value;

    

    // clear previous errors
    document.getElementById("nameError").innerHTML = "";
    document.getElementById("priceError").innerHTML = "";
    document.getElementById("quantityError").innerHTML = "";
    document.getElementById("categoryError").innerHTML = "";
    document.getElementById("dateError").innerHTML = "";

    let valid = true;

    // 1. Required
    if (name == "") {
        document.getElementById("nameError").innerHTML = "Required";
        valid = false;
    }

    if (price=="") {
        document.getElementById("priceError").innerHTML = "Required";
        valid = false;
    }

    if (quantity=="") {
        document.getElementById("quantityError").innerHTML = "Required";
        valid = false;
    }

    if (category == "") {
        document.getElementById("categoryError").innerHTML = "Select category";
        valid = false;
    }

    if (date == "") {
        document.getElementById("dateError").innerHTML = "Required";
        valid = false;
    }

    // 2. Price > 0
    if ( price <= 0) {
        document.getElementById("priceError").innerHTML = "Price must be > 0";
        valid = false;
    }

    // 3. Quantity number
    if (isNaN(quantity)) {
        document.getElementById("quantityError").innerHTML = "Must be number";
        valid = false;
    }

    // 4. Date format DD-MM-YYYY
    let pattern = /^\d{2}-\d{2}-\d{4}$/;
    if (date != "" && !pattern.test(date)) {
        document.getElementById("dateError").innerHTML = "DD-MM-YYYY format";
        valid = false;
    }

    return valid;
}