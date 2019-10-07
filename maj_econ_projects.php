<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="text/html; charset=iso-8859-1" />
<title>Department of Economics</title>


<HEAD>
<!--favion start-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<!--favion end-->
<link rel="stylesheet" href="tabs.css" type="text/css" media="screen, projection"/>

	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.custom.min.js"></script>
    <script type="text/javascript">
		$(function() {

			var $tabs = $('#tabs').tabs();
	
			$(".ui-tabs-panel").each(function(i){
	
			  var totalSize = $(".ui-tabs-panel").size() - 1;
	
			  if (i != totalSize) {
			      next = i + 2;
/*		   		  $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Next</a>");*/

			  }
	  
			  if (i != 0) {
			      prev = i;
/*		   		  $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>Previous</a>");*/
			  }
   		
			});
	
			$('.next-tab, .prev-tab').click(function() { 
		           $tabs.tabs('select', $(this).attr("rel"));
		           return false;
		       });
       

		});
    </script>
</head>

<body style="background-color:#f2f2f2;">


			<?php include 'headerother.php';?>

	<div id="contentother">
		
	
	
	
	
	
	
	
<!--START MAIN PANEL-->
		<div id="perspectivepanel_eventsupdate">
		<br>
		<h1>Research of the Economics Department </h1><br>
		
		<p><b>The faculty of Economics developed the research objectives and the research program governing its research activities:	</b></p>


		<h3>Research Objectives</h3>
		
		<p>
			<ol style="margin-left:5px">
				<li>To produce cutting edge research in the area of economics and other related fields which utilizes advanced theories, principles and analytical techniques to address key issues in economics, business, and public policy. </li>
				<li>To collect and analyze primary and secondary data from Pakistani and international sources in order to support the research objectives of the students and faculty and share with local and international academics, researchers, policy makers, businesses and other stakeholders.  </li>
				<li>To support local and international collaboration between researchers, academics, policy makers, the business community and other stakeholders in order to produce research that is relevant, timely, and impactful.   </li>
				<li>To publish research articles in leading national and international academic journals in order to disseminate the findings of the research to a larger community.  </li>
				<li>To publish the findings of the research produced in a broad variety of media, such as working papers, newspapers, blogs, and social media in order to increase the accessibility and impact of the research being conducted.  </li>
																												
			</ol>
		<br><br>
		<h3>RESEARCH PROGRAM 2018-19</h3>
		<p>The research program of the Faculty of Economics is divided into three components</p>

			<ol style="margin-left:5px">
				<li>Research and publications from PhD and MPhil students based on their research work and theses.</li>
				<li>Research and publications of the faculty as a result of ongoing projects </li>
				<li>Research and publications of the faculty as a result of local and international collaborations.</li>
				<li>Publication of working papers, newspaper articles, blog posts, etc. based on completed research.  </li>
																												
			</ol>


		</p>
				<br><br>
		
		

		</div><!--end <div id="perspectivepanelnews">-->	
	
	
	
		
		


	
	
	<!--LEFT MENU  START-->
	<table border="1" cellpadding="0" cellspacing="0" class="leftmenutableheadupdate" width="202px">    
	<tr>
		<td id="th">RESEARCH</td>
	</tr>
	</table>
	
	
	
	<div class="leftmenuContainerResearch">	
		<div id="leftmenu">
		<ul>
		<li><a href=""><b>Centres</b></a></li>
		
			<li><a href="http://www.creb.org.pk/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREB</a></li>
			<li><a href="http://www.gids.org.pk/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GIDS</a></li>			
			<li><a href="tmicmain.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TMIC</a></li>						
			
		
		<li><a href=""><b>Publications</b></a></li>
			<li><a href="http://www.creb.org.pk/workingseries.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Working&nbsp;Papers</a></li>
			<li><a href="http://www.creb.org.pk/policyseries.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Policy&nbsp;Papers</a></li>					
			<li><a href="http://lahoreschoolofeconomics.edu.pk/EconomicsJournal/LJEIntro.aspx" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LJE</a></li>		
			<li><a href="econ_dept_publications.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recent&nbsp;Publications</a></li>
	
			
			<li><a href="research_proj.php"><B>Research&nbsp;Projects</B></a></li>			
			<li><a href="research_themes.php">&nbsp;&nbsp;<B>Research&nbsp;Themes</B></a></li>
			<li><a href="dissertations_thesis.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B>MPhil&nbsp;Theses</B></a></li>			
			
			
			
<!--<li><a href="dissertations_thesis.php"><B>MPhil Theses</B></a></li>-->	
		</ul>
		</div><!--end <div class="leftmenu">-->
		
		<br><br><br>
		
	</div><!--end <div class="leftmenuContainer">-->
	
	
	

	<!--LEFT MENU  END-->
	
	
	</div><!--<div id="contentother"> end-->
	
	</div>	<!--end <div class="main_width">-->	
</td></tr>

<?php
	include 'myfooter.php';
?>	






</body>
</html>
