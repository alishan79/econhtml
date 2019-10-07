<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="text/html; charset=iso-8859-1" />
<title>Department of Economics</title>


<!--START FOR SEARCHING-->
	<link rel="stylesheet" href="jquery_search/jquery.mobile-1.4.5.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<style>
	th {
		border-bottom: 1px solid #d6d6d6;
	}
	
	tr:nth-child(even) {
		background: #fff;
	}
	.srchtable
	{
		width:350px;
	    background-color: #f2f2f2;
	    border: 1px solid #ccc;
    	height: 22px;
    	padding: 1px;
	    margin-top: 76px;
	}
	</style>
<!--END FOR SEARCHING-->


</head>

<body style="background-color:#f2f2f2;">


			<?php include 'headerother.php';?>

	<div id="contentother">
	
	
	
	
	
	
	<!--LEFT MENU  START-->
	<table border="1" cellpadding="0" cellspacing="0" class="leftmenutablehead" width="202px">    
	<tr>
		<td id="th">PEOPLE</td>
	</tr>
	</table>
	
	
	
	<div class="leftmenuContainer">	
		<div id="leftmenu">
		<ul>
			<li><a href="">Faculty</a></li>
			<li><a href="">Researchers</a></li>			
			<li><a href="">Graduate Students</a></li>						
		</ul>
		</div><!--end <div class="leftmenu">-->
	</div><!--end <div class="leftmenuContainer">-->
	
	
	
	
	<table border="1" cellpadding="0" cellspacing="0" class="leftmenutablehead" width="202px">    
	<tr>
		<td id="th">NEW APPOINTMENTS</td>
	</tr>
	</table>
	
	<div class="leftmenuContainer">	
	</div>
	
	
	<table border="1" cellpadding="0" cellspacing="0" class="leftmenutablehead" width="202px">    
	<tr>
		<td id="th">TECHNICAL SUPPORT</td>
	</tr>
	</table>
	
	<div class="leftmenuContainerLong">	
		<P>IT Support for the Economics Department is provided by the Manor Road IT Team.</P>

		<p>For queries regarding the Economics Department web site please contact the Manor Road Web Team.</P>
	</div>
	
	
	
	<!--LEFT MENU  END-->
	
	
	
	
	
	<!--START MAIN PANEL-->
		<div id="mainpanel">
		
			<h1>Faculty</h1>
		<br>
<!--start searching-->		
	<form>
      Search: <input class="srchtable" id="filterTable-input" >
    </form>
	<br><br><br>
	<table width="780px" data-mode="columntoggle" class="ui-responsive ui-shadow" id="myTable" data-filter="true" data-input="#filterTable-input">
		<tr>
		<td>
		D
		<HR>
		</td>
		</tr>
      <tbody>
        <tr>
          <td>
		  	<a href="drazam.php">Dr Azam Chaudhry</a>
			<p>Professor and Dean, Faculty of Economics</p>
		  </td>
        </tr>

		<tr>
		<td>
			S
			<HR>
		</td>
		</tr>
        <tr>
          <td>
		  	<a href="">Shamyla Chaudry </a>
			<p>Assistant Professor</p>
		  
		  </td>
        </tr>
		<tr>
		<td>
			T
			<HR>
		</td>
		</tr>
        <tr>
          <td>
			  <a href="">Theresa Chaudhry</a>
			  <p>Professor of Economics</p>
		  </td>
        </tr>

      </tbody>
    </table>
<!--end searching-->				
		</div>
	<!--END MAIN PANEL-->
	
	
	
	
	
	
	
	
	
	
	</div><!--<div id="contentother"> end-->
	</div>	<!--end <div class="main_width">-->	
	

<?php
	include 'myfooter.php';
?>



</body>
</html>
