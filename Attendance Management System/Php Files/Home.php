<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../Images/logo.jpg"/>
       <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        <title>
            DRBCCC-Hindu College Home
        </title>
    </head>
    <body>
        <link rel="stylesheet" href="../Style/stylehome.css"/>
        <div class="home">
            <img src="../Images/logo.jpg"  width = "80" height = "80" align="center"/>
            Dharmamurthi Rao Bahadur Calavala Cunnan Chetty's Hindu College
            <br><br>
        </div>
        <div class="container">
            <nav>
            <ul>
            <li class="cont_sty"> <a href="../Php Files/Home.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="../Php Files/Attendance.php "><i class="fa-solid fa-clipboard-user"></i>Attendance</a></li>
            <li><a href="../Php Files/Report.php"><i class="fa-solid fa-print"></i>Report</a></li>
            <li> <a href="../Php Files/about_us.php"><i class="fa-solid fa-address-card"></i>About us</a></li>
            <li> <a href="../Php Files/Logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a></li>
            </ul>
            </nav>
        </div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="../Images/Maingate.jpg " style="width:100%" height="70%">
  </div>

  <div class="mySlides fade">
    <img src="../Images/DMB Block Entarnce.jpg" style="width:100%" height="70%">
  </div>

  <div class="mySlides fade">
    <img src="../Images/DMB.jpg" style="width:100%" height="70%">
  </div>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html> 