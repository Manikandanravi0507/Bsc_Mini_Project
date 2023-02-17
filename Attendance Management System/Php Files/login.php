<html>
   <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1">
     <link rel="icon" type="image/x-icon" href="../Images/logo.jpg">
     <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
   <title>
           DRBCCC-Hindu College Login
	   </title>
   </head>
   <body>
   <div id="home"> 
            <img src="../Images/logo.jpg"  width = "80" height = "80" align="center"/>
            Dharmamurthi Rao Bahadur Calavala Cunnan Chetty's Hindu College
            <br>
        </div>
    <link rel="stylesheet" href="../Style/style.css"/>
    <form method="post" action="login.php">
      <div class="login">
        <h2 align="center">STAFF LOGIN</h2>
        <label for="text_box_u">
        Username 
        <br><input type="textbox" name="txt_username" required id="text_box_u"/>
        </label><br><br>
        <label for="text_box_p">
          Password
          <br> <input type="password" name="txt_password" required id="text_box_p" />
        </label><br><br>
        <label for="chk_box">
          <input type="checkbox" name="check_box" id="chk_box"/>
          Remember Me
        </label>
        <br><br>
		<label>
		  <button id="btn_login" name="login">Login</button>
		</label>
      </div>
    
<?php
session_start();
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
if(isset($_POST['login'])){
    $username=$_POST['txt_username'];
    $password=$_POST['txt_password'];
    $qry="select * from login where username='$_POST[txt_username]' && password='$_POST[txt_password]'";
    $res=mysqli_query($conxn,$qry);
    $result=mysqli_num_rows($res);
    if($result>0)
    {
        $_Session['txt_username']=$username;
        header('location:Home.php');
        
       
    }
    else{
      echo"<script>alert('Sorry.....!Username Passoword are Incorrect')</script>";
     
    }
    
    mysqli_close($conxn);
}
?>
</form>
<body>
</html>