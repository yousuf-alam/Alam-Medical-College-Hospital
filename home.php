
<!DOCTYPE html>
<html>
<head>
  <title>
    <?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      //echo "OKAY";
    } 
    ?>
  </title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
       <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
  <title>   </title>
  <link rel="stylesheet" href="homestyle.css" />
  
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
       <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!--  style css -->





</head>
<body style="background-color: #4B0082">

      <div style="height:150px;width:100%;background-color:#0C4D62;"> 
        <div id="txt"></div>
   
     <h1 style="color:white;padding:20px;padding-top:20px;margin-top:;">Alam Medical College & Hospital</h1>
    <h2 style="color:#16A085   ;margin-top:-45px;padding-left:30px;padding-top:15px;">If you want good service, serve yourself</h2>
   <div id="txt"></div>

   <img style="height: 120px;width: 120px;border-radius: 50%;float:right;margin-right: 200px;margin-top: -90px; " src="img/logo.jpg">
    
    </div>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AMCH</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="
  <?php
    //session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo "logout.php";
    } 
    else {
      echo "register.php";
    }
  ?>">
  <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo 'Log Out';
    } 
    else {
      echo 'Register';
    }
  ?></a></li>
  <li><a href="
  <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo "home.php";
    } 
    else {
      echo "index.php";
    }
  ?>">
  <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo 'Home';
    } 
    else {
      echo 'Log In';
    }
  ?></a></li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Doctors<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a onclick="window.location.href='cardiology.php'">Cardiology</a></li>
          <li><a href="#">Nephrology</a></li>
          <li><a href="#">Neurosurgery</a></li>
          <li><a href="#">Orthopaedics</a></li>
          <li><a href="#">Ophthalmology</a></li>
        </ul>
      </li>
        <li><a onclick="window.location.href='aboutus.php'">About Us</a></li>
      <li><a onclick="window.location.href='healthblog.php'">Health Blog</a></li>
       <li><a onclick="window.location.href='location.php'">Location</a></li>
        <li><a onclick="window.location.href='college.php'">College</a></li>
    </ul>
  </div>
</nav>
      

<div  style="width:19%;margin-top:-17px;position:relative;background-color: #CACFD2 ;height:700px;   ">
  <h3  style="font-size: 25px;" class="w3-bar-item">Medical Services</h3>
  <a style="font-size:20px;" href="#" class="w3-bar-item w3-button">Health Advisories</a>
  <a style="font-size:20px;" href="#" class="w3-bar-item w3-button">Policies and Programs</a>
  <a style="font-size:20px;" href="#" class="w3-bar-item w3-button">Tell Us How We Are Doing</a>
  <a style="font-size:20px;"href="#" class="w3-bar-item w3-button">Participating Health Plans</a>
  <a style="font-size:20px;"href="#" class="w3-bar-item w3-button">Quality Care for All Patients</a> 
  <a style="font-size:20px;" onclick="window.location.href='holidays.php'" class="w3-bar-item w3-button">Holidays</a><br>

  <a style="font-size:20px;" onclick="window.location.href='complain_insert_form.php'"

  class="w3-bar-item w3-button">Complains</a>
</div>






    
       <div class="container" style="height:400px;width:600px;margin-left:380px;border-style:solid;border-color:#8872F2 ;margin-top: -650px"
        
      </div>
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="img/reception1.jpg" alt="Los Angeles" style="height:400px;width:600px;">
      </div>

      <div class="item">
        <img src="img/reception2.jpg" alt="Chicago" style="height:400px;width:600px;">
      </div>
    
      <div class="item">
        <img src="img/reception3.jpg" alt="New york" style="height:400px;width:600px;">
      </div>
     <div class="item">
        <img src="img/reception4.jpg" alt="New york" style="height:400px;width:600px;">
      </div>
     <div class="item">
        <img src="img/reception5.jpg" alt="New york" style="height:400px;width:600px;">
      </div>
     <div class="item">
        <img src="img/reception6.jpg" alt="New york" style="height:400px;width:600px;">
      </div>
     <div class="item">
        <img src="img/reception7.jpg" alt="New york" style="height:400px;width:600px;">
      </div>
     <div class="item">
        <img src="img/reception8.jpg" alt="New york" style="height:400px;width:600px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


   <div  style="height:500px;width:400px;background-color:#27AE60 ;margin-left:1000px;margin-top:-400px;border-color:#00FA9A;border-radius: 8px;  border: 6px solid #ddd;padding: 5px;"> 
    
        <h4>Message from Director</h4>
    <img style="height:150px;width:150px;margin-left:100px;" src="img/Yousuf.jpg" alt="" />
    <p style="padding:5px;">I am pleased to welcome you to the Alam Medical College  & Hospital.  

Whether you’re a potential customer with a challenging project ahead; an existing customer checking up on our latest news; or a partner, supplier or future employee looking for new opportunities, I trust you’ll find what you’re looking for here.

McConnell Dowell is a company that is Driving Progress and, with our customers and partners, building better communities through safe, smart, efficient infrastructure. Something we have been doing consistently since 1961.</p>
    </div>



       
    
    <br><br><br><br><br><br><br><br><br><br> <br>
    <br />

       <div style="border:6px solid  #ddd;height:80px;width:400px;background-color: #1E90FF;text-align: center;color: white;border-radius: 8px;margin-left: 500px;"> 

           <h3>OUR SERVICES</h3>

       </div>

  <br><br>

    <div style="float:left;height:450px;width:350px;background-color:#008080;  border-radius:8px;border-color: green;color:white;border:6px solid #ddd;margin-left:40px;font-size: 15px;"> 


     <img  style="border-radius: 50%;height:200px;width:200px;margin-left:40px;;"src="img/emergency.jpg" alt="" />

     <p style="padding:10px;">
         The Emergency services are available 24/7, 365 days a year. All kinds of medical emergencies are managed by the emergency room.<span id="emer">...</span><span id="emergency">
     The paramedics and medical staff are BLS and ACLS certified by the American Heart Association. The emergency room has a fleet of fully equipped ambulances stationed at various locations to facilitate easy access in an emergency. To seek any Emergency treatment from Apollo hospitals, Bangalore – Accident & Emergency Centre, please call the following numbers Emergency helpline: 1066 Ambulance: 1066 / +91-80-4668 8098 Emergency Department: –  +91-80-4668 8098 / 8097
     </span><button style="width: 150px;border:2px solid #ccc;background-color: blue;color:white;border-radius: 8px;" onclick="emerFunction()" id="emerBtn">Read more</button>
     
     </p>
    </div>

    
     <div style="float:left;height:450px;width:350px;background-color:  
#FF00FF;  border-radius:8px;border-color: green;color:white;border:6px solid #ddd;margin-left:10px;font-size: 15px;"> 
    
     <img  style="border-radius: 50%;height:200px;width:200px;margin-left:40px;"src="img/blood.jpg" alt="" />
     <p style="padding:10px;">    
       AMCH Blood Bank is a place for collecting, screening, typing, d platelet concentrate, gathered as a result of blood donation, preserved for patient use in this hospital and other hospitals on request.<span id="bloods">...</span><span id="blood"> Apollo Blood Bank, located in basement level of the hospital, is the first government registered hospital blood bank in Dhaka Metropolitan provide blood and blood product by standard protocol in all aspects .
         For any emergency requirement of blood or information to donate blood, please contact Apollo Blood Bank: 01713041277
     </span></p> <button style="width: 150px;border:2px solid #ccc;background-color: blue;color:white;border-radius: 8px;" onclick="bloodFunction()" id="bloodBtn">Read more</button>
     
     
     </p>
    
    </div>


        <div style="float:left;height:450px;width:350px;background-color:  
#C71585;  border-radius:8px;border-color: green;color:white;border:6px solid #ddd;margin-left:10px;font-size: 15px;"> 



     <img  style="border-radius: 50%;height:200px;width:200px;margin-left:40px;"src="img/pharmacy.jpg" alt="" />
    <p style="padding:10px;">    
      AMCH Hospitals Dhaka offers full service centralized out-patient and in-patient hospital pharmacies. Apollo Pharmacy is geared up to cater to the medication needs of our customers round-the-clock. Services are provided for all in-patients, as well as those patients served by our out-patient service departments and clinics.<span id="drugs">....</span> <span id="drug">

        AMCH Pharmacy is manned by competent and experienced pharmacists. Our pharmacy staffs are trained in counselling patients about the education programs by pharmacists had a tremendous impact on patient compliance, medication error rate and therapy outcome. It definitely helped in improving patients’ quality of life.
    
    </span><button style="width: 150px;border:2px solid #ccc;background-color: blue;color:white;border-radius: 8px;" onclick="drugFunction()" id="drugBtn">Read more</button></p>
    </div>


    
        <div style="float:left;height:450px;width:350px;background-color:  
#DC143C;  border-radius:8px;border-color: green;color:white;border:6px solid #ddd;margin-left:10px;font-size: 15px;"> 
      
 


     <img  style="border-radius: 50%;height:200px;width:200px;margin-left:40px;"src="img/ambulance.jpg" alt="" />
     <p style="padding:10px;">  
     During a medical emergency, even a few minutes can make a difference between life and death. This initial critical period of definitive medical care is called the “Golden Hour”. Ambulance services are provided to attend the medical emergency in and around Bangalore.<span id="ambu">....</span>
     <span id="ambulance">

       Call ambulance at 1066 or +91-80-4668 8098 / 8097 for emergency medical care at Bangalore location.

      Ambulance has inbuilt ICR services with transport ventilators, cardiac monitors, lifesaving drugs and all emergencies are managed by ACLS/ATLS trained ER Specialists and will deliver pre-hospital care and stabilizes patients and transports the patients to hospital will first aid care.
    </span><button style="width: 150px;border:2px solid #ccc;background-color: blue;color:white;border-radius: 8px;" onclick="ambuFucntion()" id="ambuBtn">Read more</button>
     
     </p>
    </div>
    
        </br>
    </br>
    

        </div><br><br><br><br><br>
       
       
    
    
     <!--<h1 style="padding:20px;color: #2874A6  ;">AMCH KEY DOCTORS</h1>
      <div style="height:10px;width:400px;margin-left:20px;margin-top:500px;background-color:#CD6155 ;"></div>
    <br />
    <br /> --> 

       <br><br><br><br><br><br><br><br><br>


           <div style="border:6px solid  #ddd;height:80px;width:400px;background-color:#FF1493;text-align: center;color: white;border-radius: 8px;margin-left: 500px;margin-top: 300px;"> 

           <h3>AMCH KEY DOCTORS</h3>

       </div>


    <div class="container" style="height:400px;width:100%;margin-left:-0px;border-style:solid;border-color:#8872F2;margin-top: 60px; ;"
        
      </div>


           
  
 
  <div id="mCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#mCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mCarousel" data-slide-to="1"></li>
      <li data-target="#mCarousel" data-slide-to="2"></li>
      <li data-target="#mCarousel" data-slide-to="3"></li>
      <li data-target="#mCarousel" data-slide-to="4"></li>
    <li data-target="#mCarousel" data-slide-to="5"></li>
    <li data-target="#mCarousel" data-slide-to="6"></li>
    <li data-target="#mCarousel" data-slide-to="7"></li>
    </ol>
         
    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="img/doctor1.jpg" alt="Los Angeles" style="height:400px;width:100%;">
      </div>

      <div class="item">
        <img src="img/doctor2.jpg" alt="Chicago" style="height:400px;width:100%;">
      </div>
    
      <div class="item">
        <img src="img/doctor3.jpg" alt="New york" style="height:400px;width:100%;">
      </div>
     <div class="item">
        <img src="img/doctor4.jpg" alt="New york" style="height:400px;width:100%;">
      </div>
     <div class="item">
        <img src="img/doctor5.jpg" alt="New york" style="height:400px;width:100%;">
      </div>
     <div class="item">
        <img src="img/doctor6.jpg" alt="New york" style="height:400px;width:100%;">
      </div>
     <div class="item">
        <img src="img/doctor7.jpg" alt="New york" style="height:400px;width:100%;">
      </div>
     <div class="item">
        <img src="img/doctor8.jpg" alt="New york" style="height:400px;width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#mCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>     
             
             
    
    
    
    <br />
               

        <div style="border:6px solid  #ddd;height:80px;width:400px;background-color:#FF1493;text-align: center;color: white;border-radius: 8px;margin-left: 500px;margin-top: 200px;"> 

           <h3>FACILITIES OF AMCH </h3>

       </div>

    <br />
    
    <div style="height:400px;width:900px;margin-left:300px;">
       <i class='fas fa-heart' style='font-size:36px;color:#2E8B57;'>Health Facilities</i></br></br>


     <div style="height:300px;width:300px;border:6PX solid #ddd;border-radius:8px;border-color:white;">
     
          <img  style="height:200px;width:200px;border-radius:50%;margin-left:50px;margin-top:15px;"src="img/diago.jpg">
        
        <a href="#"><h3 style="text-align:center;color: #3CB371">DIAGNOSTIC</h3></a>
     
     </div>
      <div style="height:300px;width:300px;margin-left:310px;margin-top:-300px;border:6px solid #ddd;border-color:#white;border-radius: 8px;">
          
            <img  style="height:200px;width:200px;border-radius:50%;margin-left:50px;margin-top:15px;"src="img/laboratory.jpg">
          
           <a href="#"><h3 style="text-align:center;color: #3CB371;">LABORATORY</h3></a>
          
     </div>
      <div style="height:300px;width:300px;margin-left:620px;margin-top:-300px;border:6px solid #ddd;border-color:white;border-radius:8px;">
          
            <img  style="height:200px;width:200px;border-radius:50%;margin-left:50px;margin-top:15px;"src="img/operation.jpg">
           <a href="#"><h3 style="text-align:center;color: #3CB371">OPERATION THEATRE</h3></a>
        
     </div>
    
    </div>
    
    
    
          
      <div style="height:500px;width:400px;margin-left:800px;margin-top:120px;">
         <div style="border:6px solid  #ddd;height:80px;width:400px;background-color:#FF1493;text-align: center;color: white;border-radius: 8px;margin-left: 0px;margin-top: 200px;"> 

           <h3>CONTACT </h3>

       </div>
          
     <br>
              <div style="color:white;">  


               Registar</br>
                        Alam Medical College & Hospital,Dhaka-1203, Bangladesh</br>
                        <i class='fas fa-phone'></i>(+880 41) 2870038</br>
                        <i class='fas fa-phone'></i>(+880 41) 774403</br>
                       <i class="glyphicon glyphicon-envelope"></i><a href="#">registrar@amch.ac.bd</a></br>
                     <a href="#"> >> more << </a>

              </div>  
              
           
         <br>
          <div style="border:6px solid  #ddd;height:80px;width:400px;background-color:#1E90FF;text-align: center;color: white;border-radius: 8px;margin-left: 0px;margin-top: 0px;"> 

           <h3>FIND US </h3>

       </div>
       <br><br>
    <a style=" padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none; background: #3B5998;
  color: white;" href="#" class="fa fa-facebook"></a>
        <a style=" padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;  background: #55ACEE;
  color: white;" href="#" class="fa fa-twitter"></a>
        <a  style=" padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;background: #dd4b39;
  color: white;"href="#" class="fa fa-google"></a>
        <a style=" padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;background: #007bb5;
  color: white;"href="#" class="fa fa-linkedin"></a>
        <a style=" padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;background: #bb0000;
  color: white;" href="#" class="fa fa-youtube"></a>
  
  
        <a style=" padding: 20px;font-size: 30px; width: 50px;text-align: center;text-decoration: none;background: #125688;color: white;"
    href="#" class="fa fa-instagram">
    
    </a>
    
    </div>

  


  <!-- script-->

      <script>
  function bloodFunction() {
  var dots = document.getElementById("bloods");
  var moreText = document.getElementById("blood");
  var btnText = document.getElementById("bloodBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
       
          <script>
          function drugFunction() {
             var dots = document.getElementById("drugs");
              var moreText = document.getElementById("drug");
              var btnText = document.getElementById("drugBtn");

             if (drugs.style.display === "none") {
             drugs.style.display = "inline";
                btnText.innerHTML = "Read more"; 
              moreText.style.display = "none";
            } else {
               drugs.style.display = "none";
          btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
           }
        }
             </script>
       
       
      <script>
          function ambuFucntion() {
             var dots = document.getElementById("ambu");
              var moreText = document.getElementById("ambulance");
              var btnText = document.getElementById("ambuBtn");

             if (drugs.style.display === "none") {
             drugs.style.display = "inline";
                btnText.innerHTML = "Read more"; 
              moreText.style.display = "none";
            } else {
               drugs.style.display = "none";
          btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
           }
        }
             </script>
       
       
        <script>
          function emerFunction() {
             var dots = document.getElementById("emer");
              var moreText = document.getElementById("emergency");
              var btnText = document.getElementById("emerBtn");

             if (drugs.style.display === "none") {
             drugs.style.display = "inline";
                btnText.innerHTML = "Read more"; 
              moreText.style.display = "none";
            } else {
               drugs.style.display = "none";
          btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
           }
        }
             </script>   


<div style="height: 5px;background-color: white;"> 


</div>
    <div style="height:500px;background-color: #004b8f;color:white;padding-left: 100px;padding-top: 50px;"> 

          <div >
                     <h3 ><a style="color: white;"class=""> Alam Medical College & Hospital</a></h3>
                    <table width="1200" height="67">
                      <tr>
                      <td width="286" height="37" ><b>Hospital / Diagnostic</b></td>
                       <td width="286" height="37" >&nbsp;</td>
                       <td width="286" height="37" ><strong>Medical College</strong></td>
                       <td width="286" height="37" >&nbsp;</td>
                       <td width="286" height="37" ><strong>Nursing  College</strong></td>
                      </tr>
                        <tr>
                      <td height="37"><span class="top-bar-adress" style="float:right; text-align:right; color:#108f9b;"><b>House</b> # 17,Road # 8,Dhanmondi R/A. Dhaka-1205</span></td>
                       <td width="162">&nbsp;</td>
                       <td width="236"><span class="top-bar-adress" style="float:right; text-align:right; color:#108f9b;"><b>House</b> # 20, Road #  8,Dhanmondi R/A. Dhaka-1205</span></td>
                       <td width="107">&nbsp;</td>
                       <td width="287"><span class="top-bar-adress" style="float:right; text-align:right; color:#108f9b;"><b>House</b> #20 ,Road # 7,ARA Centre, Dhanmondi,R/A. Dhaka-1205</span></td>
                       <td width="94">&nbsp;</td>
                       
                      </tr>
                      
                     
                        <tr>
                                            
                      </tr>
                      <tr>
                      <td width="286" height="37" ><b>SOCIAL PAGES</b></td>
                       <td width="286" height="37" >&nbsp;</td>
                       <td width="286" height="37" ><b>GALLERY</b></h3></td>
                       <td width="286" height="37" >&nbsp;</td>
                       <td width="286" height="37" ><b>CAREER</b></td>
                      </tr>
                        <tr>
                      <td height="37">
                        <li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">Brief History</span></li>
                        <li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">Mission Statement</span></li>
                        <li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">Board Members</span></li>
                        <li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">People & Diversity</span></li>
                        <li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">Operation Team</span></li>
                      </ul>
                      </td>
                       <td width="162">&nbsp;</td>
                       <td width="236"><li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;"> Photo Gallery</span></li>
                            <li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">Video Gallery</span></li>
                            <li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">Life at UHL</span></li>  </td>
                       <td width="107">&nbsp;</td>
                       <td width="287"><li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">Job Openings</span></li>

<li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">Application Form</span></li>

<li><span class="top-bar-adress" style="float:left; text-align:left; color:#108f9b;">CV Upload</span></li></td>
                       
                      </tr>
                      
                     
                      
                      
                      
                      </table>



      

</div>



    </div>


<div style="height: 5px;background-color: white;"> 


</div>

      <footer style="height: 80px;background-color: black;color:white;width: 100%;text-align: center;padding: 10px;font-size: 20px;"> 

         <p>&copy;2019-All Rights Reserved By-Yousuf</p>


      </footer>

</body>
</html>





