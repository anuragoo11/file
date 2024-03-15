

<html lang="en">
<head><style>
.container {
  display: flex;
  height: 100vh; /* Full viewport height */
}

.fixed {
   width: 100%;/* Half of the page width */
  position: fixed;
  
  overflow: auto; /* Enable scrolling if content overflows */
}



      
        .title {
            font-family:'Old English Text MT', serif;
            color: red; 
            text-align: center;
            margin-top: 50px;
            background:linear-gradient(to right,#FFEB3B 25%, lightyellow 50%,#FFEB3B 100%);
 
        }
.subtitle {
            font-family:'Footlight MT Light'; 
            color: #ffffff; /* White text color */
            text-align: center;
            background:linear-gradient(to right,black 0% ,red 50%,black 110%);
            padding: 15px; /* Add padding to create space around the text */
            border: 5px solid white;
        }
.navigation {
    color: purple;
    font-family: 'Lucida Calligraphy' ;/* Default font */
    background:linear-gradient(to right, 
            red 0%, 
            orange 14.28%, 
            yellow 28.56%, 
            yellow 42.84%, 
            yellow 57.12%, 
            yellow 71.4%, 
            yellow 85.68%, 
            yellow 100%
        );
    padding: 10px; /* Padding around the links */
    size: 16px; /* Default font size */
    border-radius: 5px;
}
.styled-heading {
    color: red; /* Font color */
    font-family: 'Footlight MT Light'; /* Font family */
    font-size: 36px; /* Font size */
    padding: 10px; /* Padding around the heading */
}
.backgrounda{
    border:3px solid yellow;
    background-color: #FFA500; /* Background color */
    background: linear-gradient(235deg,purple,white,pink,white,purple);
}
.backgroundb{
 border: 2px solid red;
    
    background-color: yellow; /* Background color */
}
.fonta {
    color: purple; /* Font color */
    font-family: "Calisto MT", serif; /* Font family */
}
.alpha{
font-family: "Segoe Script", cursive; /* A beautiful cursive font */
  color: black; /* A soothing blue color */
  font-size: 24px; /* Adjust font size as needed */
  font-weight: bold; /* Make the text bold for emphasis */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
.beta{
font-family:'Lucida Calligraphy';   /* A beautiful cursive font */
  color:  #8B4513;/* A soothing blue color */
  font-size: 24px; /* Adjust font size as needed */
  font-weight: bold; /* Make the text bold for emphasis */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
.btn {
  background:linear-gradient(to right,black 0% ,#D2B48C 50%,black 110%);
  color: #fff;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
}
.gama{
background:linear-gradient(to right,white 0% ,white 50%,grey 110%);
}
    </style>
    
</head>
<body>
<div class="backgrounda" class="container">
<div class="fixed">
<div class="backgroundb">
<br>
    <header>
        <h1 class="title"><u>The care club</u></h1>
        <h2 class="subtitle">◦•●◉✿ CHARITY FOR ORPHANS ✿◉●•◦</h2>
        <nav>
            <div class="navigation">
                <a href="checkout.php"><b>◉ Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="blog.php">Blogs</a>
            </div>
        </nav>
    </header>
<br>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1 class="styled-heading"><u>HOME</u></h1>

   
<div class="alpha" style="padding:100px 300px;">
  <form action="payscript.php" method="post" style="padding: 25px;">
       <h1 ><i>Be the reason for the <u>SOME❤NE's</u> smile.....</i></h1>
       <h3 style="font-family:lato;">↓&nbsp;&nbsp;Form&nbsp;&nbsp;↓</h3>
         
        <label for="fname"><i class="beta">Full name</i></label><br>
        <input type="text" class="gama" name="name" placeholder="john M.doe"><br>
	<label for="email"><i class="beta">Email</i></label><br>
        <input type="text" class="gama" name="email" placeholder="john@example.com"><br>
        <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
 	<input type="hidden" value="<?php echo 1;?>" name="amount">	
	<label for="city"><i class="beta">Mobile</i></label><br>
        <input type="text" class="gama" name="mobile" placeholder="mobile number"><br>
        <label for="adr"><i class="beta">Addres</i></label><br>
        <input type="text" class="gama" name="address" placeholder="524 w. 15th street"><br>
     
     <input type="submit" value="click for donation" class="btn">
    </form>
  
 </div>
</div>
</body>
</html>
