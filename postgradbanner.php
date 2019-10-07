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
		
		#accordion-1{width:794px;height:350px;background:#fff;border:1px solid #b5c9e8}
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
                <dt>Post-Graduate Programs</dt>
                <dd>
				<span class="bannerheading">Post-Graduate Programs</span><br><br>
			<p>
			The MPhil Program is a 36 Credit Hour program. The MPhil requires completion of 30 credit hours of coursework and 6 credit hours of thesis.  The course work (excluding thesis) is expected to be completed in 1 calendar year of full time study over 2 terms (Winter & Spring) and a	 Summer Term.<br><br>

The Ph.D program requires a minimum of 18 credit hours of course work after MPhil followed by a comprehensive examination for granting candidacy as PhD researcher. The Ph.D dissertation must be evaluated by at least two Ph.D experts from technologically / academically advanced foreign countries in addition to local Committee member. An open defense of dissertation is essential part of Ph.D program after positive evaluation. The dissertation acceptance / publication of at least one research paper based on the Ph.D research in an HEC approved "X" category journal is a requirement for the award of Ph.D degree ("Y" in case of Social Sciences only).<br>
Applications have to be made through the Post-Graduate Admissions Office. For further information please visit the Admissions website:
 
</P>
	<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/adm_web.png"/></a>				
				</dd>
				
				
				
                <dt>Ph.D in Economics</dt>
                <dd>
					<span class="bannerheading">
						Ph.D in Economics
					</span><br><br>
					
					<p>
					The Ph.D program is a 4-5 year program (18 credit hours of specialised coursework and PhD thesis) which combines cutting edge research and practical components that prepare students for research and policy making in the field of economics. In order to produce academics at the frontier of economics the program focuses on advanced theoretical analysis and the most recent empirical research. The coursework includes advanced core courses in microeconomics, macroeconomics and econometrics as well as advanced courses in three specialisations i) Economic Growth and Industrial Organization, ii) Economic Growth and Financial Economics, and iii) Industrial Organisation and Development Economics.
					</p>
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteriaforPhD.php"><img src="images/adm_criteria.png"/></a>										
					<a href="phd_in_eco_module.php"><img src="images/modules.png" /></a><br>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>																				
					<a href="scholarshipsPhd.php"><img src="images/scholarships.png"/></a>	<br>														

				</dd>
				
				
				
				
				
				 <dt>MPhil in Economics</dt>
                <dd>
					<span class="bannerheading">
						MPhil in Economics
					</span><br><br>
					
					<p>
					The MPhil in Economics is a 36 credit hours 2 to 3 year program (30 credit hours coursework and a 6 credit hours thesis) designed to provide rigorous academic training to students whose careers are or will be in the area of economics or economic policy. The curriculum of the MPhil program has been designed to help students develop a solid foundation of analytical skills that will be valuable to students who continue on to pursue further graduate degrees in economics and also for those who want to enter the profession (as either instructors or practitioners) right after completing the degree. This program is also intended to be a pre-requisite for students wishing to join the PhD Program  in Economics at the Lahore School of Economics.
					</p>
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteriafoMPhil.php"><img src="images/adm_criteria.png" /></a>										
					<a href="mphil_in_eco_module.php"><img src="images/modules.png" /></a><br>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>																		
					<a href="scholarshipsPhd.php"><img src="images/scholarships.png" /></a>	<br>														

				</dd>



				 <dt>MPhil in Development Studies</dt>
                <dd>
					<span class="bannerheading">
						MPhil in Development Studies
					</span><br><br>
					
					<p>
					The MPhil Program is a 2 to 3 year degree program requiring completion of 30 credit hours. The core courses are four credit hours, the elective courses are three credit hours and the MPhil Research Thesis is 6 credit hours.  The program is designed as an interdisciplinary approach to development policy and practice in an era of rapid globalisation and technological change. It aims to equip students to address the necessary concerns that have arisen as the development process as unfolded in the developing world with particular emphasis on Pakistan.
					</p>
<!--					<a href="admission_form.php"><img src="images/applicationbtn.png" /></a>-->
					<a href="admission_criteriafoMPhildevstu.php"><img src="images/adm_criteria.png" /></a>										
					<a href="mphil_dev_studies_module.php"><img src="images/modules.png" /></a><br>					
					<a href="http://admissions.lahoreschool.edu.pk/" target="_blank"><img src="images/applyhere.png"/></a>						
					<a href="scholarshipsPhd.php"><img src="images/scholarships.png" /></a>	<br>														
								
				</dd>


				
            </dl>
        </div>
 		
    <h2>&nbsp;</h2>
    
</body>
</html>
