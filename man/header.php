<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Man</title>
</head>
<body>
<!-- Nav menu container -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="nav.css"/>
    <title> Welcome to Manpower management System</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="assets/images/LOGO.png" alt="Logo Image">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a style="color:white;" href="index.php">Home</a></li>
            <li><a style="color:white;" href="about.php">About Us</a></li>
            <li><a style="color:white;" href="contact.php">Contact Us</a></li>
            <li><a style="color:black;padding: 12px;" class="login-button" href="signin.php">Login</a></li>
            <li><a  style="color:white;padding: 12px;" class="join-button" href="clientreg.php">Join</a></li>
        </ul>
    </nav>
    <script src="nav.js">const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});</script>
</body>
</html>
