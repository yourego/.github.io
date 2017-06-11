<!DOCTYPE HTML>
<html>
<head>
<title>Online Portfolio</title>
<!--for Mobile view-->
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1"> 
<link rel='stylesheet' href="font-awesome-4.7.0\css\font-awesome.min.css">
<link rel="stylesheet" href="design/design.css">
<link rel="stylesheet" href="design/modal.css">

</head>
<div id='leftmen'>
	
	
	<a href="project.php" class="active" data-target="project.php"><span class='fa fa-inbox' style=color:black;></span>Project</a>
	<a href="" class="active"><span class='fa fa-user' style=color:black;></span>About</a>
	
	
		<a href="#" onclick="document.getElementById('id03').style.display='block'"  class="active"><span class='fa fa-envelope' style=color:black;></span>contact</a>
	

	
<!--Modal--->
<div id="id03" class="modal">

  <form class="modal-content animate" action="http://formspree.io/joey.rivera.jr@hotmail.com" Method="POST">
    <div class="container">
	
	 
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>


      <label><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required  >
     
	  <!--Replaced 
		<label><b>Message</b></label>
		<input type='text' placeholder="Send me a message.." style="height:150px;"> 
	 -->
		<label><b>Message</b></label>
		<textarea name="message" placeholder="Send me a message.." style="height:150px;"></textarea>
		
      <div class="clearfix">
	  
	   <button type="submit">Send</button>
	<!--  <button type="submit" class="signupbtn" name="Send">Send</button>  replaced--> 
	  
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn1">Cancel</button>
      
		
      </div>
    </div>
  </form>
</div>

<!--End Of Modal-->	
	</div>
<body>
<!--div container-->
<h3>Joey Rivera jr</h3>
	
	
	
	<div id="bodycon">

	<!--the grid-->
		<div id="grid">
		<center><h2><b>Get in<a href="#" onclick="document.getElementById('id03').style.display='block'"  class="active"><span class='fa fa-envelope' style=color:black;></span>contact</a></h2></b></center>
		
		<div class="slide fade">
			<div class="numbertext"> 1 / 4</div>
			<img src="images/c.png"style="border-radius:50%">
			<div class="text"> C++</div>
		</div>
		<div class="slide fade">
			<div class="numbertext"> 2 / 4</div>
			<img src="images/java.png"style="border-radius:50%">
			<div class="text"> Java</div>
		</div>
		<div class="slide fade">
			<div class="numbertext"> 3 / 4</div>
			<img src="images/vb.png"style="border-radius:50%">
			<div class="text"> vb</div>
		</div>
		<div class="slide fade">
			<div class="numbertext"> 4 / 4</div>
			<img src="images/php.png"style="border-radius:50%">
			<div class="text"> php</div>
		</div>
		<br>
		<div style='text-align:center;'>
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
		</div>
		<!--script-->
		<script src="javascript/animateimage.js"> </script>
		<script src="javascript/modal.js"></script>
		
		<!--end of script-->
			<!--float profile left-->
			<div id="profile">
			<img src="images/profile pic.png" height='150' width='150' style="border-radius:50%">
			<div id='textname'>
			<h2>Joey Rivera jr.<h2>
			</div>
			<p>
		<i class='fa fa-briefcase' style=color:teal;></i> Applicant
		</p>
		<p>
		<i class='fa fa-home' style=color:teal;></i> Palmera 3 , Tay Tay, Rizal , Philippines
		</p>
		<p>
		<i class='fa fa-envelope' style=color:teal;></i> joey.rivera.jr@hotmail.com
		</p>
		<p>
		<i class='fa fa-phone' style=color:teal;></i> (0975)886-7517
		</p>
		<hr>
		<p>
		<i class='fa fa-asterisk' style=color:teal;></i> Skills
		</p>
		<p>
		PHP
		</p>
		<div class="skill">
		<div id="progress">
		78%
		</div>
		</div>
		<p>
		Java
		</p>
		<div class="skill">
		<div id="progressj">
		60%
		</div>
		</div>
		<p>
		VB
		</p>
		<div class="skill">
		<div id="progressv">
		78%
		</div>
		</div>
		<p>
		C++
		</p>
		<div class="skill">
		<div id="progressc">
		68%
		</div>
		</div>
		<p>
		<i class='fa fa-globe' style=color:teal;></i> Languages
		</p>
		Filipino
		<div class="skill">
		<div id="filipino">
		100%
		</div>
		</div>
		English
		<div class="skill">
		<div id="english">
		90%
		</div>
		</div>
		<p>
			</div>
			<!--float desc right-->
			<div id="description">
			<h1><i class='fa fa-briefcase' style=color:teal;></i> Work Experience</h1>
			<h3>Customer First Representative /<br>United Health Group Optum</h3>
			<h4><i class='fa fa-calendar' style=color:teal;></i> 06/22/15-01/10/17</h4>
			<p class="desc">
			
		•	Handles Medical Records for Claims insurance advise deductible, coinsurance and copay ,advising of benefit and coverage ensures company policy and privacy and coordinate with medical doctors or staff nurse for coordination of benefits
		</p>
		<h4 style="float:left;">Reason for leaving:Studied System Developer at MFI Polytechnic Institute Inc.</h4>
		
	
		

			</div>
			<div class='de'>
			<h1><i class='fa fa-certificate' style=color:teal;></i> Education</h1>
			<h3>Meralco Foundation Institute Inc.
			<h4><i class='fa fa-calendar' style=color:teal;></i> 05/30/16- Current</h4>
			<p class="desc">
			Pasig City 
		<br>	System Developer 
		<br>•	Web Development 
		<br>•	Career Entry Course for software development Java
		<br>•	Cisco Fundamentals
		<br>•	Project done: Blogging System, Simple POS System
		</p>
			</div>
			
			
		</div>
	</div>
			<div id="footer">
	<h3>Find me on Social Media</h3>
	<a href="https://tl-ph.facebook.com/public/Joey-Rivera-Jr."  class="foot"><span class='fa fa-facebook-official'></span>Facebook</a>
	</div>
	

</body>



</html>