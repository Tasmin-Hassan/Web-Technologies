const unitPrice =1000; // fiexd price

//input quantity and total price input
const QInput =document.getElementById('pquantity');
const TotalInput = document.getElementById('ptotal');


// listen
QInput.addEventListener('input',function(){
    let quantity =parseInt(QInput.value);


    //prevent neg number
    if(isNaN(quantity)||quantity<0){
        quantity = 0;
        QInput.value=0;
    }


    //calculation total price

    const total = unitPrice * quantity;
    TotalInput.value = total;


    //gift alert

    if(total>1000)
    {
        alert("You are eligible for a gift coupon!")
    }

});