

<?php
$directlink = $_GET["contact"];

$who = $_POST["who"];
$name = $_POST["name"];
$email = $_POST["email"];
$weddingDate = $_POST["weddingDate"];
$location = $_POST["location"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$referedBy = $_POST["referedBy"];
$captcha = $_POST["captcha"];


if($captcha=="devoted"){


	$to="kirstenss65@aol.com";

# $to = "agthurber@gmail.com";

 $subject = "Wedding request from www.DevotedToBeauty.com";
 $body = "A visitor has contacted you from your website!
 \n\n
 Name:  $name\n
 Email:  $email\n
 Phone:  $phone\n
 Wedding request for:  \n
 \t date: $weddingDate \n
 \t location:  $location\n
 Message:  $message \n 
 Refered By: $referedBy \n
 
 \n  \n
 ";
 

 
 if (mail($to, $subject, $body, null, '-fAppointmentRequest@devotedtobeauty.com')) {
   echo("<p><br><br><b>Message successfully sent!</b></p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
  
  
}
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
				
				Thank you for visiting our wedding page.<br>
Kelli and Kirsten look forward to working with you!<br><br><br>

				<h2>Bridal service prices</h2>
				<table border=0>
				<tr>
				<td valign="top" width="250">
Bride hair day of and trial $175<br>
Bride hair day of $150<br>
Bride hair per trial $50<br>
Bridal party<br>
Blow dry style $45<br>
Hair curled and set $55<br>
Up do $65 and up<br>
					<br>

</td><td valign="top" width="250"> 
Makeup Trial $50<br>
Bride Makeup Day of Wedding Only $150.00<br>
Bride Makeup Trial and Day of Wedding $175.00<br>
Bridesmaids / Mother of Bride or Groom Makeup $55 and up*<br>
<font size=1>* Depending on if you want false lashes or not.</font><br>
Lash application $20.00
<font size=1>(This includes lashes.)</font><br>
<br>
</td></tr></table>
					<form id="contacts-form" action="index.php?page=wedding" method="post" onSubmit="return validate()">
						<fieldset>
						
						  <div class="field"><label>Brides name:</label><input type="text" name="name" id="name"value=""/></div>
						  <div class="field"><label>E-mail:</label><input type="text" name="email" id="email" value=""/></div>
						  <div class="field"><label>Phone:</label><input type="text" name="phone" id="phone" value=""/></div>
						  <div class="field"><label>Wedding date:</label><input type="text" name="weddingDate" id="weddingDate" value=""/></div>
						  <div class="field"><label>Location:</label><select name="location" id="location">
   <option value="">Select One</option>
  <option value="In_Salon">In salon</option> 
  <option value="On_location">On location</option>
  <option value="Undecided">Undecided</option>

</select></div>
						  <div class="field"><label>Mesage:</label><textarea cols="1" name="message" id="message" rows="1"></textarea></div>
						  <div class="field"><label>Referred By:</label><input type="text" name="referedBy" id="referedBy" value=""/></div>
						  <div class="field"><img src="images/captcha.gif" ><label>Type the letters from the image:</label><input type="text" name="captcha" id="captcha" value=""/></div>
						  <div class="wrapper"><a href="#" class="link1" onclick="return validate()"><em><b>Send Your Message!<span>Send Your Message!</span></b></em></a></div> 
						</fieldset>
					 </form>
				</div>