<!DOCTYPE html>
<html>
<head>
<!--<script src="js/bootstrap.min.js"></script>-->
<!-- this is the bootstrap responsive -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
 <meta charset="utf-8">
 <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon-->
<script> function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} </script>

<body>

<head>
<div id="headerbox">
<h4 id="phone"> 1-800-242-SAFE </h4>
<br/> <br/><br/><br/><br/>
<div class="mbr-section-btn"id="button"><a class="btn btn-md btn-primary display-4" href="login.php">Login</a></div>
<h1 class="site-heading text-center   d-xlg-block" id="head"> Insure Connect </h1>

<h2> Bringing Quality Coverage & Loyal Service To You...</h2></div>
 
<div class="topnav" id="myTopnav">
  <a href="crystal.php" class="active">Home</a>
  <a href="about.php">About</a>
  <a href="auto.php">Auto</a>
  <a href="health.php">Health</a>
  <a href="life.php">Life</a>
  <a href="property.php"> Property</a>
  <a href="news.php">News</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</head>

<!--This starts the CSS for page-->
<style> 

 body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
  background: white;
}
/*styling of all background images*/
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4{
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/*top image of family walking*/
.bgimg-1 {
  background-image: url("ocean.jpg");
  min-height: 400px;
}
/*the image of the baby*/
.bgimg-2 {
  background-image: url("baby.jpg");
  min-height: 400px;
}
/*the image of the older couple*/
.bgimg-3 {
  background-image: url("old.jpg");
  min-height: 400px;
}
/*the image of the car*/
.bgimg-4{
  background-image: url("car.jpg");
  min-height: 400px;
}
/* the insure connect at top*/
 #head, h1{ 
        background: #C44B4F;
        text-align: center;
        color: white;
        font-family:'Raleway', sans-serif;
        font-size:3.5em;
        font-weight:bolder;
        border:silver;
}
/*the box all heading is in*/
#headerbox {
  background:#003B73;
  line-height:10px;
}
/*the login button*/

.btn-md {
  padding: 10px;
  border-radius: 3px;
}
#button {
 display:inline-block;
 position:absolute; 
 width:100%;
    right:0;"
 color:white;
}
.btn-primary,
.btn-primary:active {
  background-color: #38B9E0;
  border-color: #003B73 ;
  color: white;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary.focus,
.btn-primary.active {
  color: #ffffff ;
  background-color: black;
  border-color: white;
}
}
a.button1:hover{
 color:#000000;
 background-color:#FFFFFF;
}
@media all and (max-width:30em){
 a.button1{
  display:block;
  margin:0.4em auto;
 }
} 

    
/*this is the quote under insure connect*/
h2 {    text-align:center;
        font-size:1.5em;
       /* background:#189AB4;*/
        line-height: 40px;
        color:white;
        text-shadow: 5px 5px 10px #000000;
}
h4{ 
  color: white;
  margin-top:0;
  display: block;
  float:right;

}

 /*Add a black background color to the top navigation*/ 
.topnav {
  background-color: #38B9E0;
  overflow: hidden;
  margin:white;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color:#C44B4F ; /*honeysuckle*/
  color: white;
}

/* Hide the link that should open and close the topnav on small screens*/ 
.topnav .icon {
  display: none;
}
/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: #003B73;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration:none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color:#000;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}
/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
  .caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100vw;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 10px;
  font-size: 30vw;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 40vw, "Lato", sans-serif;
  color: #111;
}
p{
  text-align:center;
  font-size:1.5vw;
  font-weight: bolder;
  }

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
a { 
    text-decoration:none;
    color:white;
}

a: hover {
   color:  #C44B4F;
}
#foot{
   background:#C44B4F;
   color:white;
   text-align: center;
   -webkit-order:99;
   order:99;
   width:100%;
  
}
}
}
</style>
</head>


<!--
<div class="bgimg-1"> </div>-->
<div> 
<div>
<div class="bgimg-1"><!--
  <div class="caption">
  <span class="border" style="background-color:white;vw:20px;;color:black;position:relative;opacity:.50;">Our Promise To You</a></span>
  <br/>
  <p style="font-size:25px; color:white;">  We work to be there for those milestone moments of life!
</p>-->
</div>
</div>

<div style="position:relative;">
  <div style="font-size: 2.5em;background-color:#003B73;color:white;text-align:center;padding:20px;;text-align: justify;">
  <p style="text-align:center;">Partnering With You To Deliver Quality Coverage... </a></p>
  </div>
</div>

<div class="bgimg-2">
  <div class="caption">
  <span class="border" style="background-color:white;font-size:2.5em;color: #A3EBB1;"><a href="health.php">Health Coverage</a></span>
  </div>
</div>

<div style="position:relative;">
  <div style="font-size: 2.5em;background-color:#003B73;color:white;text-align:center;padding:30px; text-align: justify;">
  <p style="text-align:center;">Our Core Values </a></p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
  <span class="border" style="background-color:white;font-size:2.5em;color: #f7f7f7;text-align:center;"><a href="life.php">Life Insurance</a></span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;font-size:2.5em;background-color:#003B73;text-align:center;padding:20px;text-align: justify;">
  <p style="text-align:center;">Honesty. Loyalty. Integrity</p>
  </div>
</div>

<div class="bgimg-4">
  <div class="caption">
  <span class="border"style="background-color:white;font-size:2.5em;color: #000000;"><a href="auto.php">Auto Coverage</a></span>
  </div>></span>
  </div>
</div>
</div>
<footer id="foot">
&copy; <?php echo date ('Y');?> <b>Insure Connect</b>
</footer>
</body>
</html>
