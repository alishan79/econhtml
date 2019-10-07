<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LAHORE SCHOOL OF ECONOMICS [STUDENT PORTAL]</title>
<!--favion start-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--favion end-->
<link rel="stylesheet" href="css/style.css" type="text/css">

<script type="text/javascript">

<!-- Put the following code in your JS file or Head Tags ---->
<!--

function DisplayTime(){
if (!document.all && !document.getElementById)
return
timeElement=document.getElementById? document.getElementById("curTime"): document.all.tick2
var CurrentDate=new Date()
var hours=CurrentDate.getHours()
var minutes=CurrentDate.getMinutes()
var seconds=CurrentDate.getSeconds()
if (minutes<=9) minutes="0"+minutes;
if (seconds<=9) seconds="0"+seconds;
var currentTime=hours+":"+minutes+":"+seconds;
timeElement.innerHTML="<font style='font-size:12px;font-weight:bold;'>"+currentTime+"</b>"
setTimeout("DisplayTime()",1000)
}
window.onload=DisplayTime
</script>

</head>
<body>

 		

<div class="fortgotpwdbox"> <br><br><br>
            	<h1>Forgot Password</h1>
            	<form id="Form1" method="post" action="">
                	<div class="label">Student ID</div> 
					Test :<input type="text" name="test">
                    <input name="txtstdid" type="text" id="txtstdid" maxlength="8" size="30" class="inputtxt" onfocus="this.style.background='white'" onblur="this.style.background='#F4F4F4'" style="text-transform:uppercase"/>
                   
<br><br>
				<input name="submit_send" type="submit" value="Send" width="150" class="btn"/>

                </form>

		<!--START LOGIN BOX-->
                 <p>
                   Enter your Lahore School of Economics Student <br>ID Number e.g. "07E0076"</b></p>
            </div>
		<!--END LOGIN BOX-->


</div>
<!--CONTAINER END-->

</body>
</html>


<?php
include 'connection.php';
if (isset($_POST['submit_send']))
{    
			
    $email = 'm.alishan@ymail.com';

	$sTUiD=$_POST['txtstdid'];
	$test=$_POST['test'];	
	
    if ($sTUiD !='' && $test !='')
    {
	   	$email = 'm.alishan@ymail.com';
	
		$sTUiD	=	$_POST['txtstdid'];
		$test	=   $_POST['test'];

        $subject ="Password request";
        $header = "from: info@lahoreschoolofeconomics.edu.pk";
		
		
		$body = "A user  $name submitted the contact form:\n".
		"Your password is : $sTUiD\n".
		"Test: $test \n";

        @mail($email, $subject, $header, $body); 
        print("<div class='showmsg_acc_activation'>an email containning the password has been sent to you</div>");
    }else
    {
        echo ("<div class='showmsg_acc_activation'>No such user exists in the system. Please try again</div>");
    }
}

























/*include 'connection.php';
if (isset($_POST['submit_send']))
{    
			
    $email = mysqli_real_escape_string($con,addslashes($_POST['email']));

    $sql = mysqli_query($con,"SELECT * FROM `students` WHERE  `stu_email1` = '$email'");
    $result = mysqli_num_rows($sql);


    if (!$result)
    {
        die (mysqli_error());
    }

    if ($result == 1)
    {
        $rows = mysqli_fetch_array($sql);
        $password = mysqli_real_escape_string($con,$rows['stu_password']);
        $email = mysqli_real_escape_string($con,$rows['stu_email1'].'m.alishan@ymail.com');
        $subject ="Password request";
        $header = "from: info@lahoreschoolofeconomics.edu.pk";
        $body = "Your password is :" . $password; 

        @mail($email, $subject, $header, $body); 
        print("<div class='showmsg_acc_activation'>an email containning the password has been sent to you</div>");
    }else
    {
        echo ("<div class='showmsg_acc_activation'>No such user exists in the system. Please try again</div>");
    }
}
*/?>