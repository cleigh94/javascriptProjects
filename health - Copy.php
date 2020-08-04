<!DOCTYPE html>
<html>
<head>
<!--<script src="js/bootstrap.min.js"></script>-->
<!-- this is the bootstrap responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet"> 
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
} 
</script>

 

<body>
<div id="page-container">
   <div id="content-wrap">
 

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
  max-width:100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
  background: #38B9E0;
  background-image:url('steth.jpg');
  background-repeat: no-repeat;
  background-position:center;
  background-size:100%;
  /*display: -webkit-flex;
  display: flex;
  -webkit-flex-flow: row wrap;
  flex-flow: row wrap; 
  flex-direction: column;*/
  
}
/* the insure connect at top*/
#head, h1{ 
        background: #C44B4F;
        text-align: center;
        color: white;
        text-shadow: 2px 2px 10px 	#808080;
        font:font-family: 'Rowdies', cursive;
        font-size:3em;
        font-weight:bolder;
        border:silver;
}
/*the box all heading is in*/
#headerbox {
    background:#003B73;
    line-height:10px;
}
/*the login button*/
#button {
 display:inline-block;
 position:absolute; 
    right:0;"
 width:100%;
 padding: 1.2em 1.2em;
 background:#C44B4F ;
 border:1em solid #4C5355;
 margin: 2px solid #4C5355;
 line-height: 20px;
 border-radius:0.12em;
 box-sizing: border-box;
 text-decoration:none;
 font-family:'Roboto',sans-serif;
 font-weight:300;
 color:white;
 text-align:center;
 transition: all 0.2s;
}
a.button:hover{
 color:#000000;
 background-color:#FFFFFF;
}
@media all and (max-width:30em){
 a.button{
  display:none;
  margin-top:none;
  margin:1.5em auto;
 }
} 

    
/*this is the quote under insure connect*/
h2{
        text-align:center;
        font-size:1.5em;
        /*background:#189AB4;*/
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
.topnav .active {
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
  
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
}
}
 /* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-box {
  background-color: teal;
  width: 600px;
  height: 600px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
 } /* Remove this if you don't want the 3D effect */
  


/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: auto;
  text-align: center;
  transition: transform 2.0s;
  transform-style: preserve-3d;
  
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: auto;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}
div.container {
  float:left;
  max-width:100%;
  height:auto;
  background:transparent;
  color:black;
  position:center;
  font-size:2em;
}

div.a, #plans {
  font-family:'Raleway', sans-serif;
  color:red;
  float:left;
  background:transparent;
  margin:5px;
  max-width:40%;
}

#box{
  text-align:center;
  background:#C44B4F ;
  
  padding:5px;
  margin: 5px;
  box-shadow: gray 15px 15px 15px,  black -20px 0px 10px;
}

#slogan{
  color:white;
  font-size:2em;
  background:navy;
  position: absolute;
  width: 100%;
  height: auto;
}

#description{
  float:right;
  max-width:60%;
}

/* Style the front side */
.flip-box-front {
  background-color:black;
  color: white;
}

/* Style the back side */
.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
#jumbotron {
  background:transparent;
  #description{
  position: absolute;
  width: 100%;
  height: auto;
}
}
@media screen and (max-width: 600px) {
  #health {
    display:none;
  }


#page-container {
  min-height: 100vh;
}

#content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
}

#foot {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem;    /* Footer height */
  background:#C44B4F;
  color:white;
  text-align: center;  
  -webkit-order:90;
	order:90;
	width:100%;
	text-align:center;         
}
/*two column CSS*/

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
}
/* If screen size is 600px wide, or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
  div.container {
    font-size: 30px;
  }
}
</style>

<body>
<!--Flip cards-->

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
   <!--This is the flip box slogan--> 
  <h1 id="slogan">Quality Healthcare at Your Fingertips.</h1>
    </div>
    <div class="flip-box-back">
      <h1 id="slogan"><a href="COVID.php"style="color:yellow;">Our Efforts To Help You During COVID-19</a></h2>
      </div>
  </div>
  
  <div class="container">
  <div class="jumbotron"id="jumbotron">
    <h2 id="health" style="color:white;">Workng Together To Build A Network Of Care</h2>
  </div> 
  <!-- This is the box for the links to plans-->
<div class="row"style="padding:40px;">
  <div class="column"id="plans"> <!--this is box with links-->
  <h2 style="color:#003B73;"> Shop For Plans</h2><br/>
     <div id="box">
       <a href="individual_health.php"style="color:white";>Individual</a><br/>
       </div><br/>
     <div id="box">
       <a href="family_health.php"style="color:white">Family</a><br/>
       </div><br/>
     <div id="box">
       <a href="medicare.php"style="color:white">Medicare</a><br/>
     </div><br/>
     <div id="box">
       <a href="group.php"style="color:white">Group Plans</a><br/>
       </div><br/>
     <div id="box">
       <a href="dental.php"style="color:white">Dental</a><br/>
       </div><br/>
</div> <!-- end of column box with links-->
<!--This is the picture of the doctor and patient-->
<div class="column" id="description"style="background:transparent;padding:80px;">
    <img src="doctorvisit.jpg" alt="medical doctors"style="float:right;width:600px; height:400px;">
    <!-- This is the text below picture-->
    <h3 style="color:#C44B4F ; text-decoration:none;"> Low Cost ~ Wide Networks </h3>
    <p style="color:#38B9E0;font-weight:bold;"> Our Network of physicians offer exemplary care.  We do thorough checks and assure you will be provided with the best in preventative, treatment, and post-care options.
    Our network providers range from primary care physicians, specialists, and surgeons.  We offer a comprehensive network to meet the needs of our customers.</p>
</div><!--end of second column box-->
 
</div> <!--this is the end of row box-->
</div>

<!--
<div>
<footer id="foot">
&copy; <?php echo date ('Y');?> <b>Insure Connect</b>
</footer>
</div>
-->
</body>
</html>
</head>
