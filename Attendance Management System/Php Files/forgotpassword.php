<html>
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../Images/logo.jpg">
        <title>
            DRBCCC Hindu College Forgot Password
        </title>
    </head>
    <body>
        <link rel="stylesheet" href="../Style/style.css"/>
        <div class="forgotpassword">
            <form method="post " action="login.php">
         <h2 align="center">FORGOT PASSWORD</h2>
        <br><br>
                  <label for="text_Newpass">
                    New Password
                    <br><input type="password" name="txt_Newpass" id="text_Newpass"/>
                 </label><br><br>
                 <label for="text_staffid">
                    Staff Id-Number
                    <br><input type="textbox" name="txt_staffid" id="text_staffid"/>
                </label><br><br>
                <label for="text_staffdesign">
                    Staff Designation
                    <br><input type="textbox" name="txt_design" id="text_staffdesign"/>
                </label><br><br>
                <label>
                    <button name="Reset" id="btn_forgot">Reset</button>
                </label>
             </div>
             <?php
             session_start();
             $conxn=mysqli_connect("localhost","root","","drbccchc");
             if(isset($_POST['Reset'])){
                $new_password=$_POST['txt_newpass'];
                $staff_id=$_POST['txt_staffid'];
                $staffdesign=$_POST['txt_staffdesign'];
            }

             ?>
            </form>
        </body>
</html>