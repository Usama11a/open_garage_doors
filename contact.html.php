<!DOCTYPE html>
<html lang="en">
	<!--header-section-->
	<?php include 'includes/header.php';?>
	<!--header-section-->

	<!--<section class="sub_banner contact_bg">
		<div class="container">
		</div>
	</section>-->
    <script type="text/javascript">
    var widId = "";
      var onloadCallback = function() {
        widId =  grecaptcha.render('html_element', {
          'sitekey' : '6LeqoIMaAAAAAE3PT9lZf1CkCULBjbOiHjvDkhfW'
        });
      };
    </script>

	<section class="gray_bg margintop" style="text-align: center;">
	<img src="images/luxpro-logo-bg-dark.jpg">
	    <h1 class="text-center" style="padding-bottom:20px;">Nationwide VIP White Glove Services </h1>
		<div class="container">
		    
			<div class="row">
			    	
				<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
				    
					<div class="box_inner">
						<span><i class="fa fa-phone text-warning" aria-hidden="true"></i></span>
						<h4>Phone</h4>
						<p>For Reservations call Mon-Fri 9 AM - 6 PM <br> <a href="tel:2134466669">  (213) 446-6669</a></p>
						
					</div>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
					<div class="box_inner">
						<span><i class="fa fa-home text-warning" aria-hidden="true"></i></span>
						<h4>Address</h4>
						<p>9663 Santa Monica Blvd, Beverly Hills, California 90210, United States</p>
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
						<a href="mailto:info@luxprollc.com">info@luxprollc.com</a>
						<!--<p>rsvp@luxprollc.com</p>-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="mt-5 mb-5 text-center">
		<div class="container">
			<div class="connect_us">
				<h2 class="heading-text text-center">CONNECT WITH US</h2>
				<ul>
					<li><a target="_self" href="https://www.facebook.com/LuxPro-LLC-248025928996368/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					
				</ul>
			</div>
		</div>
	</section>

	<section class="form_bg">
		<div class="container">
			<div class="contact_form">
				<h4>If you have any questions please do not hesitate to send us a message</h4>
				<form id="contactForm1" name="contactForm1" method="post" action="mail.php" onsubmit="return submitContactForm()">
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
    						<button class="btn btn-warning" type="submit" id='submit'>Submit Message</button>
						<label id="responsemsg"></label>						
					</div>
					
				</form>
			</div>
		</div>
	</section>
	
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
<style>
.error{
color: #dc3545 !important;
    background-color: #e9ecef;
    padding: 0px 10px 0px 10px;
}
	#responsemsg{
	    
color: green;
    font-size: 20px;
    text-align: center;
	}  
.contact_form .form-group button {
    height: 50px;
    line-height: 50px;
    border: 1px solid #fff;
    color: #000;
    font-size: 14px;
    background-color: #fcfcfc;
}	  
	.contact_form .form-group button {
    max-width: 172px;
    margin: 0 auto;
    display: block;
    height: auto;
    line-height: inherit;
    padding: 12px 20px;
    position: relative;
    border-radius: 4px;
    cursor: pointer;
    font-family: 'Conv_Poppins-Light' !important;
}
</style>
	<!--footer-->
		<?php include 'includes/footer.php';?>
	<!--footer-->
 <script>

      function IsRecapchaValid()
      {
      var res = grecaptcha.getResponse(widId);
      if (res == "" || res == undefined || res.length == 0)
         {
             alert("Please verify you are not robot")
          return false;
         }
       return true;
      }
    function submitContactForm()
    {
        console.log('validation completed.');
        if (!IsRecapchaValid()) {
        	return false;
        } else {
            console.log('form really submitted.');
            onSubmit('a');
            return false;
        }
    }	
   function onSubmit(token) {
		  $.post("mail.php",$('#contactForm1').serialize(),
		  	function(data, status){
					Swal.fire({text: data,icon:'success'});
		  	});
   }
 </script>	
</body>
</html>