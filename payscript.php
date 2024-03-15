<html>
<head>
<style>
.newa {
  background:linear-gradient(to right,black 0% ,#D2B48C 50%,black 110%);
  color: #fff;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
}
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
            yellow 0%, 
            yellow 14.28%, 
            yellow 28.56%, 
            yellow 42.84%, 
            orange 57.12%, 
            red 71.4%, 
            orange 85.68%, 
            yellow 100%
        );
    padding: 10px; /* Padding around the links */
    size: 16px; /* Default font size */
    border-radius: 5px;
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
.last {
  font-family: 'Old English Text MT', serif; /* Set the font family */
  font-size: 150px; /* Set the font size */
  color: red; /* Set the font color */
  font-weight: bold; /* Set font weight to bold */
  line-height: 1.6; /* Set line height for better readability */
  text-align: center; /* Align text to the center */
  text-decoration: underline; /* Add underline decoration */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add text shadow */
  /* You can adjust the shadow color, size, and blur radius as needed */
}
</style>
</head>
<body>
<?php
$apiKey="rzp_test_ZN42KUHEe5xHfE"
?>

<div class="backgrounda" class="container">
<div class="fixed">
<div class="backgroundb">
<br>
    <header>
        <h1 class="title"><u>The care club</u></h1>
        <h2 class="subtitle">◦•●◉✿ CHARITY FOR ORPHANS ✿◉●•◦</h2>
        <nav>
            <div class="navigation">
               <a href="checkout.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php"><b> Contact</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="blog.php">Blogs</a>
            </div>
        </nav>
    </header>
<br>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form class="newa" action="" method="POST"> 
<script 
src="https://checkout.razorpay.com/v1/checkout.js"
data-key="<?php echo $apiKey;?>"
data-amount="<?php echo $_POST['amount']*100;?>"
data-currency="INR"
data-id="<?php echo 'OID'.RAND(10,100).'end';?>"
data-buttontext="Click to start payment"
data-name="anurag kharade"
data-description="wlc to ak world"
data-image=""
data-prefill.name="<?php echo $_POST['name'];?>"
data-prefill.email="<?php echo $_POST['email'];?>"
data-prefill.contact="<?php echo $_POST['mobile'];?>"
data-theme.color="orchid;"
></script>
<input type="hidden" custom="hidden element" name="hidden" >
</form><h1 class="last">The care club</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
