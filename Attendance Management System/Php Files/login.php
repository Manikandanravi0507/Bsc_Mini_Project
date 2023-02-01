<html>
   <head>
     <link rel="icon" type="image/x-icon" href="../Images/logo.jpg">
   <title>
           DRBCCC Hindu College Attendance
	   </title>
   </head>
   <body>
    <link rel="stylesheet" href="../Style/style.css"/>
    <form method="post" action="login.php">
      <div class="login">
        <h2 align="center">STAFF LOGIN</h2>
        <label for="text_box_u">
        Username 
        <br><input type="textbox" name="txt_username" id="text_box_u"/>
        </label><br><br>
        <label for="text_box_p">
          Password
          <br> <input type="password" name="txt_password" id="text_box_p"/>
        </label><br><br>
        <label for="chk_box">
          <input type="checkbox" name="check_box" id="chk_box"/>
          Remember Me
        </label>
        <br><br>
        <label><a href="forgotpassword.php">
          Forgot Password
        </label>
        <br><br>
		<label>
		  <button id="btn_login" name="login">Login</button>
		</label>
      </div>
    
<?php
Session_start();
$conxn=mysqli_connect("localhost","root","","drbccchc");
if(isset($_POST['login'])){
    $username=$_POST['txt_username'];
    $password=$_POST['txt_password'];
    $qry="select * from login where username='$_POST[txt_username]' && password='$_POST[txt_password]'";
    $res=mysqli_query($conxn,$qry);
    $result=mysqli_num_rows($res);
    if($result>0)
    {
        echo"<script>alert('Login Successfully')</script>";
        $_Session['txt_username']=$username;
        header('location:Home.php');
    }
    else{
        echo"<script>alert('Login Failed')</script>";
        $_Session['txt_username']=$username;
        header('location:login.php');
    }
}
?>
</form>
<body>
</html>