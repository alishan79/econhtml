<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	  <title>jQuery Easy Accordion Plugin</title>
	  
      <!-- Meta -->
      <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	  <meta name="author" content="Andrea Cima Serniotti - Madeincima.eu" />
	  <meta name="description" content="jQuery Easy Accordion Plugin - A highly flexible timed horizontal slider able to show any kind of content" />
	  <meta name="keywords" content="jQuery, plugin, accordion, slider, slideshow, horizontal, timed, interval" />	  
      
      <!-- Scripts -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	  <script type="text/javascript" src="scripts/jquery.easyAccordion.js"></script>
      <script type="text/javascript" src="scripts/utility.js"></script>
      
      <style type="text/css">
		  html{font-size:62.5%}
		  body{font-size:1.2em;color:#294f88;margin:0px;}
		  .sample{margin:30px;border:1px solid #92cdec;background:#d7e7ff;padding:30px}
		  h1{margin:0 0 20px 0;padding:0;font-size:2em;}
		  h2{margin:40px 0 20px 0;padding:0;font-size:1.6em;}
		  .easy-accordion h2{margin:0px 0 20px 0;padding:0;font-size:1.6em;}
		  p{font-size:1.2em;line-height:170%;margin-bottom:20px}
		  		  
		 
		/* UNLESS YOU KNOW WHAT YOU'RE DOING, DO NOT CHANGE THE FOLLOWING RULES */
		
		.easy-accordion{display:block;position:relative;overflow:hidden;padding:0;margin:0;z-index: 0;}
		.easy-accordion dt,.easy-accordion dd{margin:0;padding:0}
		.easy-accordion dt,.easy-accordion dd{position:absolute}
		.easy-accordion dt{margin-bottom:0;margin-left:0;z-index:5;/* Safari */ -webkit-transform: rotate(-90deg); /* Firefox */ -moz-transform: rotate(-90deg);-moz-transform-origin: 20px 0px;  /* Internet Explorer */ filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);cursor:pointer;}
		.easy-accordion dd{z-index:1;opacity:0;overflow:hidden}
		.easy-accordion dd.active{opacity:1;}
		.easy-accordion dd.no-more-active{z-index:2;opacity:1}
		.easy-accordion dd.active{z-index:3}
		.easy-accordion dd.plus{z-index:4}
		.easy-accordion .slide-number{position:absolute;bottom:0;left:10px;font-weight:normal;font-size:1.1em;/* Safari */ -webkit-transform: rotate(90deg); /* Firefox */ -moz-transform: rotate(90deg);  /* Internet Explorer */ filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);}
		 
		 
		/* FEEL FREE TO CUSTOMIZE THE FOLLOWING RULES */
		
		dd p{line-height:120%}
		
		#accordion-1{width:794px;height:350px;background:#fff;border:1px solid #b5c9e8;}
		#accordion-1 dl{width:794px;height:350px;}	
		#accordion-1 dt{height:40px;line-height:40px;text-align:center;padding:0 0px 0 0;font-size:1.1em;font-family: Tahoma, Geneva, sans-serif;letter-spacing:1px;border:1px inset #fff;color:#fff;
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7d8897+0,7d8897+38,6a7586+65,6a7586+100 */
background: #7d8897; /* Old browsers */
background: -moz-linear-gradient(top,  #7d8897 0%, #7d8897 38%, #6a7586 65%, #6a7586 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #7d8897 0%,#7d8897 38%,#6a7586 65%,#6a7586 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #7d8897 0%,#7d8897 38%,#6a7586 65%,#6a7586 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7d8897', endColorstr='#6a7586',GradientType=0 ); /* IE6-9 */

/*		background:#fff url(images/slide-title-inactive-1.jpg) 0 0 no-repeat;color:#26526c*/}
		
		
		#accordion-1 dt.active{cursor:pointer;color:#fff;/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7d8897+1,7d8897+47,6a7586+56,6a7586+100 */
background: #7d8897; /* Old browsers */
background: -moz-linear-gradient(top,  #7d8897 1%, #7d8897 47%, #6a7586 56%, #6a7586 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #7d8897 1%,#7d8897 47%,#6a7586 56%,#6a7586 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #7d8897 1%,#7d8897 47%,#6a7586 56%,#6a7586 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7d8897', endColorstr='#6a7586',GradientType=0 ); /* IE6-9 */
}
		
		
		#accordion-1 dt.hover{color:#fff; /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7d8897+1,7d8897+47,6a7586+56,6a7586+100 */
background: #7d8897; /* Old browsers */
background: -moz-linear-gradient(top,  #7d8897 1%, #7d8897 47%, #6a7586 56%, #6a7586 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #7d8897 1%,#7d8897 47%,#6a7586 56%,#6a7586 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #7d8897 1%,#7d8897 47%,#6a7586 56%,#6a7586 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7d8897', endColorstr='#6a7586',GradientType=0 ); /* IE6-9 */

		}
		#accordion-1 dt.active.hover{color:#fff}
		#accordion-1 dd{padding:25px;background:url(images/slide.jpg) bottom left repeat-x;border:1px solid #dbe9ea;border-left:0;margin-right:3px}
		#accordion-1 dd a{width:166px;display:inline-block;margin-left:-28px;}
		
		
		#accordion-1 .slide-number{color:#68889b;left:10px;font-weight:bold;display:none;}
		#accordion-1 .active .slide-number{color:#fff;}
		#accordion-1 a{color:#fff}
		#accordion-1 dd img{float:right;margin: -3px -26px 11px 0px;}
		#accordion-1 h2{font-size:2.5em;margin-top:10px}
		#accordion-1 .more{padding-top:10px;display:block}
			
		

      </style>
      
</head>
<body>

        <div id="accordion-1">
		
            <dl>
                <dt>Undergraduate Programs</dt>
                <dd>
				<span class="bannerheading">Undergraduate Programs</span><br><br>
			<p>
			The B.Sc. (Hons.) programs at the Lahore School require 135-140 credit hours and are intended to be completed in 4 years. The academic year consists of 2 Semesters (Winter, Spring) and an optional Summer Term for deficiency/failure/repetition courses. The objective of the Bachelors curriculum is to impart a specialized education of international standards. The Honors degree normally comprises of a core area of competences (the compulsory courses), a major area of studies, one minor and optional courses from other disciplines. A double major may be taken by exceptional students requiring additional courses. All classes of the Undergraduate programs are held at the Main Campus.<br><br>

Applications have to be made through the Undergraduate Admissions Office. For further information please visit the admissions website: 
</P>
	<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/adm_web.png"/></a>				
				</dd>
                <dt>Double Major in Economics and Finance</dt>
                <dd>
					<span class="bannerheading">
						B.Sc. (Hons.) with Double Major in Economics and Finance
					</span><br><br>
					
					<p>
					The B.Sc. (Hons.) with Double Major in Economics and Finance Program is a 4 year degree program requiring completion of a minimum of 140 credit hours.  The program is run jointly by the Economics Faculty and the Business Faculty. In the first year, students take introductory courses in each of the two subjects.  In the second, third and fourth years, they take 36 courses in total, including core courses and optional courses.
					</p>
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteria.php"><img src="images/adm_criteria.png" /></a>										
					<a href="module_dbmajeconfinance.php"><img src="images/modules.png" /></a>	
										
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>	
					<a href="scholarships.php"><img src="images/scholarships.png" /></a>															

															
				</dd>
				
				
				
                <dt>Double Major in Economics and Bus. Management	</dt>
                <dd>
					<span class="bannerheading">B.Sc. (Hons.) with Double Major in Economics and Business Management</span><br><br>				
					
					<p>The B.Sc. (Hons.) with Double Major in Economics and Business Management Program is a 4 year degree program requiring completion of a minimum of 140 credit hours. B.Sc. (Hons.) The program is run jointly by the Economics Faculty and the Business Faculty. In the first year, students take introductory courses in each of the two subjects.  In the second, third and fourth years, they take 36 courses in total, including core courses and optional courses.</p>
					
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->

					<a href="admission_criteria.php"><img src="images/adm_criteria.png" /></a>										
					<a href="module_dbmajeconmgmt.php"><img src="images/modules.png" /></a>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>			
					<a href="scholarships.php"><img src="images/scholarships.png" /></a>															
								
				</dd>



				
                <dt>Double Major in Economics and Political Science</dt>
                <dd>
					<span class="bannerheading">B.Sc. (Hons.) with Double Major in Economics and Political Sciences</span><br><br>				
					
				<p>The B.Sc. (Hons.) with Double Major in Economics and Political Science is a 4 year degree program requiring completion of a minimum of 140 credit hours. The program is run jointly by the Economics Faculty and the Department of Social Sciences. In the first year, students take introductory courses in each of the two subjects.  In the second, third and fourth years, they take 36 courses in total, including core courses and optional courses.	</p>
					
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteria.php"><img src="images/adm_criteria.png" /></a>										
					<a href="module_dbmajeconpolsci.php"><img src="images/modules.png" /></a>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>						
					<a href="scholarships.php"><img src="images/scholarships.png" /></a>															

					
				</dd>


                <dt>Double Major in Economics and Accounting	</dt>
                <dd>
					<span class="bannerheading">B.Sc. (Hons.) with Double Major in Economics and Accounting</span><br><br>				
					<p>The B.Sc. (Hons.) with Double Major in Economics and Accounting Program is a 4 year degree program requiring completion of a minimum of 140 credit hours. The program is run jointly by the Economics Faculty and the Business Faculty. In the first year, students take introductory courses in each of the two subjects.  In the second, third and fourth years, they take 36 courses in total, including core courses and optional courses.</p>
					
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteria.php"><img src="images/adm_criteria.png" /></a>										
					<a href="module_dbmajeconacc.php"><img src="images/modules.png" /></a>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>			
					<a href="scholarships.php"><img src="images/scholarships.png" /></a>															
		
					
				</dd>


                <dt>Double Major in Economics and Marketing	</dt>
                <dd>
					<span class="bannerheading">B.Sc. (Hons.) with Double Major in Economics and Marketing</span><br><br>				
				<p>The B.Sc. (Hons.) with Double Major in Economics and Marketing Program is a 4 year degree program requiring completion of a minimum of 140 credit hours. The program is run jointly by the Economics Faculty and the Business Faculty. In the first year, students take introductory courses in each of the two subjects.  In the second, third and fourth years, they take 36 courses in total, including core courses and optional courses.</p>		
				
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteria.php"><img src="images/adm_criteria.png" /></a>										
					<a href="module_dbmajeconmkt.php"><img src="images/modules.png" /></a>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>			
					<a href="scholarships.php"><img src="images/scholarships.png" /></a>															
						
				
				</dd>


                <dt>Major in Economics and Minor in Social Sciences	</dt>
                <dd>
					<span class="bannerheading">B.Sc. (Hons.) with Major in Economics and Minor in Social Sciences</span><br><br>				
					<p>The B.Sc. (Hons.) with Major in Economics and Minor in Social Sciences Program is a 4 year degree program requiring completion of a minimum of 135 credit hours. The program is run jointly by the Economics Faculty and the Department of Social Sciences. In the first year, students take introductory courses in each of the two subjects.  In the second, third and fourth years, they take 36 courses in total, including core courses and optional courses.</p>
					
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteria.php"><img src="images/adm_criteria.png" /></a>										
					<a href="module_majecominsocsci.php"><img src="images/modules.png" /></a>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>			
					<a href="scholarships.php"><img src="images/scholarships.png" /></a>															
								
					
				</dd>


                <dt>Major in Economics and Minors in Maths & Stats</dt>
                <dd>
					<span class="bannerheading">B.Sc. (Hons.) with Major in Economics and Minors in Mathematics & Statistics</span><br><br>			
					<p>The B.Sc. (Hons.) with Major in Economics and Minor in Mathematics & Statistics Program is a 4 year degree program requiring completion of a minimum of 135 credit hours. The program is run jointly by the Economics Faculty and the Centre for Mathematics & Statistical Sciences. In the first year, students take introductory courses in each of the two subjects.  In the second, third and fourth years, they take 36 courses in total, including core courses and optional courses.	</p>
					
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteria.php"><img src="images/adm_criteria.png" /></a>										
					<a href="module_majecominmathstat.php"><img src="images/modules.png" /></a>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>											
					<a href="scholarships.php"><img src="images/scholarships.png" /></a>					

					
				</dd>


                <dt>Major in Econ. and Minor in Environmental Policy</dt>
                <dd>
					<span class="bannerheading">B.Sc. (Hons.) with Major in Economics and Minor in Environmental Policy</span><br><br>				
				<p>The B.Sc. (Hons.) with Major in Economics and Minor in Environmental Policy Program is a 4 year degree program requiring completion of a minimum of 135 credit hours. The program is run jointly by the Economics Faculty and the Centre for Environmental Sciences & Policy. In the first year, students take introductory courses in each of the two subjects.  In the second, third and fourth years, they take 36 courses in total, including core courses and optional courses.</p>	
				
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteria.php"><img src="images/adm_criteria.png" /></a>										
					<a href="module_majecominenvpol.php"><img src="images/modules.png" /></a>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>											
					<a href="scholarships.php"><img src="images/scholarships.png" /></a>	

					
				
				</dd>

				
            </dl>
        </div>
 		
    <h2>&nbsp;</h2>
    
</body>
</html>
