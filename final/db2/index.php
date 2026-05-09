<!DOCTYPE html>
<html>
    <head>
        <title>Students Records</title>
</head>
<body>
    <h1> Students Records </h1>

    <?php
    //database connection//
    $conn = mysqli_connect ("localhost", "root", "", "student_record");

    //check connection//
    if(!$conn){
        die("Not Connected");
    }


    //fetch all records//

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn , $sql);

    //check if records exist//
    if(mysqli_num_rows($result) > 0){

    echo "<table border = '1' cellpadding ='10'>"
    echo "<tr>
<th> ID </th>
<th> Name </th>
<th> Registration <th>
<th> Program </th>
    </tr>"


    //display//
    While($row = mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['registration_no'] . "</td>";
    echo "<td>" . $row['program'] . "</td>";
    echo "</tr>";
    }

    echo "</table>";

    
    }


    else{
        echo "No records found ";
    }

    //close connection//
    mysqli_close($conn);

    ?>

</body>
</html>