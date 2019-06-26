
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

    
    /*background-image: url('<?php echo $profpic;?>');
    /*background-repeat:no-repeat;
    background-color:transparent;
    */
  }



* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body style="background-color: #4B0082">

<div style="height:150px;width:100%;background-color:#0C4D62;"> 
       
   
     <h1 style="color:white;padding:20px;padding-top:20px;margin-top:;">Alam Medical College & Hospital</h1>
    <h2 style="color:#16A085   ;margin-top:-45px;padding-left:30px;padding-top:15px;">If you want good service, serve yourself</h2>
   <div id="txt"></div>
      <img style="height: 120px;width: 120px;border-radius: 50%;float:right;margin-right: 200px;margin-top: -100px; " src="img/logo.jpg">

 </div>

<div class="container" style="margin-top: 100px;">
  <form action="\index.php">
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
         
         <div style="height:60px;background-color:#3CB371;font-size: 25px;margin-top: 50px;text-align: center;border-radius: 8px;border:6px solid #ddd;">  

<a  style="font-size: 20px;" Onclick="window.location.href('index.php') " class="btn">Login</a>

         </div> 
       
         
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a Onclick="window.location.href('register.php') "style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a Onclick="window.location.href('index.php') " style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>


  <footer style="height: 80px;background-color: black;color:white;width: 100%;text-align: center;padding: 10px;font-size: 20px;margin-top: 100px;"> 

         <p>&copy;2019-All Rights Reserved By Yousuf</p>


      </footer>

</body>
</html>
