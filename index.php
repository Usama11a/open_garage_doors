<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" href="images/l1.png">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
</script>

  <title>Garage Doors</title>

</head>
<body >
<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top" style="padding-bottom:1%;border-color: #808080;">
  <div class="container" style="margin-top:5%;">
    <a class="navbar-brand" href="#"> 
      <img class="logo" src="images/l1.png" alt="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="font-weight: bold;
    font-size: 16px; margin-left: 185px;">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color:black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:black;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ourservices" style="color:black;">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactme" style="color:black;">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section>
<div class="ss" style="margin-top: -21px;">
  <div class="col-md-6">
  <h1 style="color: #234184;
    margin-left: 34%;
    margin-top: 25%;
    font-weight: 700;
    font-size: 56px">No Service Fees</h1>
    <p style="font-weight: 900;
    margin-left: 34%;
    font-size: 24px;">Just great prices AND fast everyday service</p>
  </div>
  <div class="col-md-4">
      <section class="mt-5 mb-5 text-center">
    <div class="container">
      <div class="connect_us">
        <h2 class="heading-text text-center" style="margin-left: 38%;
    margin-top: -11%;"></h2>
      </div>
    </div>
  </section>
  <section class="form_bg col-md-12" style="margin-left: 35%;
    margin-top: -11%;" >
    <div class="container col-md-12" style="background-color: #234184;
    margin-top: 2%;
    border-radius: 2%;
    padding-top: 4%;">
      <div class="contact_form">
        <form id="contactForm1" name="contactForm1" method="post" action="mail.php" onsubmit="return submitContactForm()" style="color:white;">
          <div class="form-group">
            <label>Name *</label>
            <input id="contactName" name="contactName" type="text" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <label>Subject *</label>
            <input id="contactSubject" name="contactSubject" type="text" class="form-control" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <label>Email *</label>
            <input id="contactEmail" name="contactEmail" type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label>Your Message *</label>
             <textarea id="contactMessage" name="contactMessage" class="form-control" rows="8" placeholder="Your Message" required></textarea>
          </div>
          <div class="form-group">
          <input type="hidden" name="submit1" value="submit message" >
            <div id="html_element"></div>
                <button class="btn btn-warning" type="submit" id='submit' style="background-color:#2d2a42 ;"><font color="white"><strong>Submit Message</strong></font></button>
            <label id="responsemsg"></label>            
          </div>
          
        </form>
      </div>
    </div>
  </section>
  </div>
</div>

</section>



<section class="gray_bg margintop" style="text-align: center; margin-top: 10%;" >
      <h1 class="text-center" style="padding-bottom:20px;">North GA Wide Open Garage Door Services </h1>
    <div class="container" id="contactUs">
        
      <div class="row">
            
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
            
          <div class="box_inner">
            <span><i class="fa fa-phone text-warning" aria-hidden="true"></i></span>
            <h4>Phone</h4>
            <p>For Service Please Call <br> <a href="tel:2134466669"> 706-508-7359</a></p>
            
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <div class="box_inner">
            <span><i class="fa fa-home text-warning" aria-hidden="true"></i></span>
            <h4>P.O Box</h4>
            <p>4 Eton, GA 30724</p>
          </div>
        </div>
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <div class="box_inner">
            <span><i class="fa fa-clock-o text-warning" aria-hidden="true"></i></span>
            <h4>Hours</h4>
            <p>Open 24/7-365 Days a year</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <div class="box_inner">
            <span><i class="fa fa-envelope text-warning" aria-hidden="true"></i></span>
            <h4>E-mail</h4>
            <a href="mailto:info@luxprollc.com">opengaragedoornga@gmail.com</a>
            <!--<p>rsvp@luxprollc.com</p>-->
          </div>
        </div>
      </div>
    </div>
  </section>



  <section>
    <div>
      <h2 class="whoweAre" >What We Offer</h2>
      <div class="container">
      <p style="text-align: center; margin-bottom: 9%;margin-top: 2%;font: menu;font-size: 100%;" id="ourservices">" We Offer A Wide Range Of Options 

to Help You Find the Best Value for Your Budget 

At Open Garage Doors, we make customer satisfaction our #1 priority. We treat every project with the utmost care, from minor garage door repairs and garage door spring replacement to a complete garage door installation. Our highly-skilled technicians are experts in all types of garage door repairs, including broken garage springs, garage door opener repair and replacement, and frayed or loose cables. As an award-winning local garage door services company, we use quality brands and parts and guarantee our workmanship. This way, you don’t have to worry about having any future issues with your garage door.
As a full-service garage door company, our goal is always to fix your garage door, garage door springs, openers, cables, and remotes the same day so you can get back to your busy schedule. That’s why we are available to you 24/7, offering same-day service and emergency garage door repair services for your convenience.
Open Garage Doors is the go-to garage door company for customers in North Georgia. Give us a call today at (706) 508-7359 to find out how we can help you! 

Our garage door services include: 

Garage door repairs and maintenance: Our technicians can handle all sorts of garage repairs, including garage doors that won’t open, frayed cables, and doors that are off the track. 

Broken spring repair: We install high-performance, extended-life garage springs, backed with parts and labor warranties. 

Garage door opener installation: When your opener needs to be replaced, we’ll walk you through our 4-step process to determine the ideal solution for your home. 

New garage door installation: We sell and install the best brand-name door manufacturers and have doors available in hundreds of styles, materials, and finishes. 

No matter what you need for your garage, Open Garage Doors is here to help! Call us at (706) 508-7359 to request service "</p>
</div>

    </div>
  </section>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

<div class="footer-dark" >
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Door Replacement</a></li>
                            <li><a href="#">Door Repairing</a></li>
                            <li><a href="#">Broken Springs</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4 item" id="contactme">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><a href="#">Telephone: 706-508-7359</a></li>
                            <li><a href="#">Email: opengaragedoornga@gmail.com</a></li>
                            <li><a href="#">P.O Box: 4 Eton, GA 30724</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 item text">
                        <h3>Open Garage Doors</h3>
                        <p>We are always looking to provide reliable and quality work for residential homes in North GA.</p>
                    </div>
                    <div class="col item social">
                      <a href="Web.facebook.com/opengaragedoors1"><i class="icon ion-social-facebook"></i></a>
                      <a href="instagram.com/opengaragedoor"><i class="icon ion-social-instagram"></i></a></div>
                      <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                      <i class="bi-bucket"></i>
                      <i class="fab fa-facebook-f"></i>
                </div>
                <p class="copyright">Company Name © 2018</p>
            </div>
        </footer>
    </div>

   <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
  </script>
</body>
</html>


<?php
    $to      = 'usamasheikh11a@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@example.com'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>