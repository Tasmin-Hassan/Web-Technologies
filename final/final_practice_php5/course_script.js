function loadcourse()
{

    var xhttp =new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {

    if (this.readyState == 4 && this.status == 200)

    {
        var data = JSON.parse(this.responseText);

        document.getElementById("course").innerHTML=
        "Course Code: " + data.code +"<br>"+
        "Course Title: " + data.title +"<br>"+
        "Credits: " +data.credits;


    }
};

xhttp.open("GET", "get_course.php", true);
xhttp.send();
}
