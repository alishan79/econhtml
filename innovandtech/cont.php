<?php 
session_start();

$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';
$user_subject = '';

if(isset($_POST['submit']))
{
	$email ='m.alishan@ymail.com';// <<=== update to your email address
	$name = 		$_POST['txtstu_firstname'];
	$visitor_email = $_POST['txtstu_email1'];
	$user_message = $_POST['txt_msg'];
	$user_subject = $_POST['txt_subject'];	
	
	
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email)||empty($user_message)||empty($user_subject))
	{
		$errors .= "<div class='messagedisplay'>\n *** Name, Email, Subject and Message are required fields. </div>";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n<div class='messagedisplay'> Bad email value!</div>";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n <div class='messagedisplay'>The captcha code does not match!</div>";
	}
	
	if ($name !='' && $visitor_email !='' && $user_message !='' && $user_subject !='')
//	if ($name !='')	
    {
	   	$email = 'm.alishan@ymail.com';
	

		$name 			= $_POST['txtstu_firstname'];
		$visitor_email 	= $_POST['txtstu_email1'];
		$user_message 	= $_POST['txt_msg'];
		$user_subject 	= $_POST['txt_subject'];

        $subject ="Lahore School of Economics (Economics Department)";
        $header = "from: info@lahoreschoolofeconomics.edu.pk";
		
		
		$body = "A user  $name submitted the contact form:\n".
		"Your Name : $name\n".
		"Your Email : $visitor_email\n".		
		"Your Message : $user_message\n".				
		"Subject: $user_subject \n";

        @mail($email, $subject, $header, $body); 
        /*print("<div class='showmsg_acc_activation'>an email containning the password has been sent to you</div>");
    }else
    {
        echo ("<div class='showmsg_acc_activation'>No such user exists in the system. Please try again</div>");
    }*/
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<link rel="stylesheet" href="css/style.css" type="text/css">
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	
</head>

<body>
<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>

<div align="center">
  <table width="726" border="0">
    <tr>
      <td align="center"><h1>Technology Management &amp; Innovation Centre</h1></td>
    </tr>
    <tr>
      <td><table width="726" border="0">
        <tr>
          <td><div align="center"><a href="main.php">Team</a></div></td>
          <td><div align="center"><a href="research_agenda.php">Research Agenda </a></div></td>
          <td><div align="center"><a href="major_research.php">Major Research Projects </a></div></td>
          <td><div align="center"><a href="contactus.php">Contact Us </a></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><img src="images/banner.png" width="726" height="300" /></td>
    </tr>
    <tr>
      <td>
	  <h5>Contact Us</h5>
	  <h3>Technology Management & Innovation Centre </h3>
	  <p>
	  <br>
	  <b>Address:</b>  Intersection Main Boulevard Phase VI DHA, Burki Road Lahore 53200, Pakistan.<br><br>
<b>Phone:</b> +92 42 36560936<br><br>
<b>Fax:</b> +92 42 36560905<br><br>
<b>Contact Person:</b> <br><br>

	  </p>
	  
	  <form method="POST" name="contact_form" 
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
	  <table border="0">
	  <tr>
	  	<td><h5>CONTACT FORM</h5></td>
	  </tr>		
	  <tr>
	  	<td><p>Send an email. All fields with an * are required.</p></td>		
	  </tr>
	  <tr>
	  	<td><p>Name *</p></td>		
	  </tr>

	  <tr>
	  	<td><input type="text" class="textbox" name="txtstu_firstname" value="<?php echo $_POST['txtstu_firstname'];?>"></td>		
	  </tr>
	  

	  <tr>
	  	<td><p>Email *</p></td>		
	  </tr>

	  <tr>
	  	<td><input type="text" class="textbox" name="txtstu_email1" value="<?php echo $_POST['txtstu_email1'];?>"></td>		
	  </tr>	  


	  <tr>
	  	<td><p>Subject *</p></td>		
	  </tr>

	  <tr>
	  	<td><input type="text" class="textbox" name="txt_subject" value="<?php echo $_POST['txt_subject'];?>"></td>		
	  </tr>	  
	  
	  
  	  <tr>
	  	<td><p>Message *</p></td>		
	  </tr>

	  <tr>
	  	<td><textarea class="textbox_area" name="txt_msg" rows="6" cols="60"><?php echo $_POST['txt_msg'];?></textarea></td>		
	  </tr>	  


		<tr>
		<td> <p>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p></td>
		</tr>
		

  	  <tr>
	  	<td><input type="submit" name="submit" class="submitbtn"></td>		
	  </tr>

	  <tr>
	  	<td></td>		
	  </tr>	  
	  
	  </table>
	  
	  </form>
	  
	  </td>
    </tr>
  </table>
</div>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
frmvalidator.addValidation("subject","req","Please provide a subject"); 
frmvalidator.addValidation("msg","req","Message area is Empty."); 
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

</body>
</html>
