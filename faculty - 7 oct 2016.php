<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="text/html; charset=iso-8859-1" />
<title>Department of Economics</title>


<!--START FOR SEARCHING-->
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<style>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 300px;
  font-size: 16px;
  padding: 4px 20px 4px 10px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
/*  border-collapse: collapse;

  border: 1px solid #ddd;
  font-size: 18px;
*/}

#myTable th, #myTable td {
 /* text-align: left;
  padding: 12px;*/
}

#myTable tr {
 /* border-bottom: 1px solid #ddd;*/
}

#myTable tr.header, #myTable tr:hover {
  /*background-color: #f1f1f1;*/
}


	
	.srchtable
	{
		width:350px;
	    background-color: #f2f2f2;
	    border: 1px solid #ccc;
    	height: 22px;
    	padding: 1px;
	    margin-top: -22px;
	    margin-bottom: 41px;
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
		
		<input type="text" id="myInput" class="srchtable" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table width="780px" id="myTable">
  <tr class="srchheader">
    <th></th>
  </tr>
  
  
  	<tr><td>D<HR></td></tr>
	
	<tr>
    <td>
		<a href="drazam.php">Dr Azam Chaudhry</a>
		<p>Professor and Dean, Faculty of Economics</p>
	</td>
    </tr>
  
	<tr><td>S<HR></td></tr>  
  
    <tr>
    <td>
		<a href="">Shamyla Chaudry </a>
		<p>Assistant Professor</p>
	</td>
    </tr>
	
	<tr><td>T<HR></td></tr>
  
	<tr>
    <td>
		<a href="">Theresa Chaudhry</a>
		<p>Professor of Economics</p>
	</td>
    </tr>
  
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
