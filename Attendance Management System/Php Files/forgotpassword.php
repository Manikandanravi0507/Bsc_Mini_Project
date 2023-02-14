<html>
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../Images/logo.jpg">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        <title>
            DRBCCC-Hindu College Forgot Password
        </title>
    </head>
    <body>
        <link rel="stylesheet" href="../Style/style.css"/>
        <div id="home"> 
            <img src="../Images/logo.jpg"  width = "80" height = "80" align="center"/>
            Dharmamurthi Rao Bahadur Calavala Cunnan Chetty's Hindu College
            <br>    
        </div>
        <div class="forgotpassword">
            <form method="post " action="login.php">
         <h2 align="center">FORGOT PASSWORD</h2>
        <br>
                  <label for="text_Newpass">
                    New Password
                    <br><input type="password" name="txt_Newpass" required id="text_Newpass"/>
                 </label><br><br>
                 <label for="text_staffid">
                    Staff Id-Number
                    <br><input type="textbox" name="txt_staffid" required id="text_staffid"/>
                </label><br><br>
                <label for="text_staffdesign">
                    Staff Designation
                    <br><input type="textbox" name="txt_design" required id="text_staffdesign"/>
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