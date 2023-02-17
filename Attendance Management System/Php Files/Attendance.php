<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../Images/logo.jpg">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        <title>
            DRBCCC-Hindu College Attendance Entry
        </title>
    </head>
    <body>
        <link rel="stylesheet" href="../Style/styleattendance.css"/>
        <div class="home">
            <img src="../Images/logo.jpg"  width = "80" height = "80" align="center"/>
            Dharmamurthi Rao Bahadur Calavala Cunnan Chetty's Hindu College
            <br><br>
</div>  
<?php
try{
    $conxn=mysqli_connect("localhost","root","","drbccchc");
    if($conxn->connect_errno)
    {
    throw new Exception("Connection is Failed".$conxn->connect_errno);
    }
    }
    catch(Exception $e)
    {
      echo"".$e->getMessage();
    }
?>
</body>
</head>
</html>