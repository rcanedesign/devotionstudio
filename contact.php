<?php
$directlink = $_GET["contact"];

$who = $_POST["who"];
$name = $_POST["name"];
$email = $_POST["email"];
$aptDate = $_POST["aptDate"];
$aptTime = $_POST["aptTime"];
$service = $_POST["service"];
$phone = $_POST["phone"];
$referedBy = $_POST["referedBy"];
$captcha = $_POST["captcha"];
$rigthnow = date("F j, Y, g:i a");


if($captcha=="devoted"){


	$f = fopen('/tmp/contact.log', 'a');
	
	

// Replace sender@example.com with your "From" address. 
// This address must be verified with Amazon SES.
define('SENDER', 'appointmentrequest@devotedtobeauty.com');        

// Replace recipient@example.com with a "To" address. If your account 
// is still in the sandbox, this address must be verified.
define('RECIPIENT', 'kirstenss65@gmail.com');  
                                                      
// Replace smtp_username with your Amazon SES SMTP user name.
define('USERNAME','AKIAJQLHLNAJXA4PG47A');  

// Replace smtp_password with your Amazon SES SMTP password.
define('PASSWORD','AsSxknoZlHNUu7rTUUYtcAcbpEOgw71aj8LS2oID59Ux');  

// If you're using Amazon SES in a region other than US West (Oregon), 
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP  
// endpoint in the appropriate region.
define('HOST', 'email-smtp.us-east-1.amazonaws.com');  

 // The port you will connect to on the Amazon SES SMTP endpoint.
define('PORT', '587');     

// Other message information                                               
define('SUBJECT','Message from www.DevotedToBeauty.com');
define('BODY', "===============  ". $rigthnow  . " ============================== 
\n
A visitor has contacted you from your website!
 \n\n
 Name:  $name\n
 Email:  $email\n
 Phone:  $phone\n
 Appointment requested for:  \n
 \t date: $aptDate \n
 \t time:  $aptTime\n
 Service Requested:  $service \n 
 Refered By: $referedBy \n
 
 \n  \n
 ");

require_once 'Mail.php';

$headers = array (
  'From' => SENDER,
  'To' => RECIPIENT,
  'Subject' => SUBJECT);

$smtpParams = array (
  'host' => HOST,
  'port' => PORT,
  'auth' => true,
  'username' => USERNAME,
  'password' => PASSWORD
);

 // Create an SMTP client.
$mail = Mail::factory('smtp', $smtpParams);

// Send the email.
$result = $mail->send(RECIPIENT, $headers, BODY);

if (PEAR::isError($result)) {
  echo("<br><br> Email not sent. " .$result->getMessage() ."\n");
  fwrite($f, $result->getMessage());
} else {
  echo(" <br><br> Thank you for contacting us. 
  <br><br> We will reach out to you soon!  
  <br><br> Also feel free to call, Mon - Fri (9am - 5pm PST)
  <br> Devotion Studio : (707) 292-2745 <br><br>");
  fwrite($f, BODY);
}	
	
fclose($f);	
}else{	
	
	

?>





 
 
<!-- content -->
<script>

function validate(){



if(document.getElementById('name').value==""){
	alert("Please enter your name to submit form.");
	document.getElementById('name').focus();
	return false;
}

if(document.getElementById('phone').value==""){
	alert("Please enter your phone number to submit form.");
	document.getElementById('[hone').focus();
	return false;
}

if(document.getElementById('captcha').value==""){
	alert("Please enter the captcha image to submit form.");
	document.getElementById('captcha').focus();
	return false;
}

document.getElementById('contacts-form').submit()

}
</script>
<link rel="stylesheet" type="text/css" media="all" href="images/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="images/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"aptDate",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>


				<div id="content">
				<h2>Contact Us</h2>
					<p>You may request an appointmet by using this form. This is just a request form, and no appointment will be considered official until it has been confirmed.</p>
					
					Call or text Kirsten 707-292-2745<br>
					

					<form id="contacts-form" action="index.php?page=contact" method="post" onSubmit="return validate()">
						<fieldset>
						  <div class="field"><label>Name:</label><input type="text" name="name" id="name"value=""/></div>
						  <div class="field"><label>E-mail:</label><input type="text" name="email" id="email" value=""/></div>
						  <div class="field"><label>Phone:</label><input type="text" name="phone" id="phone" value=""/></div>
						  <div class="field"><label>Appointment date requested:</label><input type="text" name="aptDate" id="aptDate" value=""/></div>
						  <div class="field"><label>Appointment time requested:</label><select name="aptTime" id="aptTime">
   <option value="">Select One</option>
  <option value="morning">Morning</option> 
  <option value="afternoon">Afternoon</option>

</select></div>
						  <div class="field"><label>Service requested:</label><input type="text" name="service" id="service" value=""/></div>
						  <div class="field"><label>Mesage:</label><textarea cols="1" name="message" id="message" rows="1"></textarea></div>
						  <div class="field"><label>Referred By:</label><input type="text" name="referedBy" id="referedBy" value=""/></div>
						  <div class="field"><img src="images/captcha.gif" ><label>Type the letters from the image:</label><input type="text" name="captcha" id="captcha" value=""/></div>
						  <div class="wrapper"><a href="#" class="link1" onclick="return validate()"><em><b>Send Your Message!<span>Send Your Message!</span></b></em></a></div> 
						</fieldset>
					 </form>
				</div>
<?php


}
 ?>
