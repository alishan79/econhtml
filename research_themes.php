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
		<h1>Research Projects</h1>
		<h2>Research Themes</h2>
		
		<a href="industrial_policy.php" name="Industrial">Industrial Policy	</a>
			<ul>
			<li><a href="industrial_policy.php#cpec">CPEC and Industrial Strategy - Opportunities and Synergies</a></li>
			<li><a href="industrial_policy.php#strategic">Strategic Tariff Reduction to Increase Pakistan Exports: Leveraging Pakistan's Trade Policy with respect to China</a></li>
			<li><a href="industrial_policy.php#productivity">Productivity Dispersion across districts in Punjab, Pakistan</a></li>
			<li><a href="industrial_policy.php#fta">Pakistan's Experience with the 2006 Pak-China FTA and Lessons for CPEC</a></li>
			<li><a href="industrial_policy.php#hub">Economic geography and misallocation in Pakistan's manufacturing hub</a></li>
			<li><a href="industrial_policy.php#equality">Relative Factor Abundance and Relative Factor Price Equality in Punjab</a></li>
			<li><a href="industrial_policy.php#boost">The Need for a Coordinated Industrial Strategy to Boost Pakistani Exports: Lessons from Asia</a></li>
			</ul>
		<br>
		<a href="mphil_theme.php">MPhil Theses	</a>
			<ul>
			<li><a href="mphil_theme.php#social">Social and Economic Networks: An Investigation of Retailer Networks in Lahore & their Impact on Enterprise Performance</a></li>		
			<li><a href="mphil_theme.php#trade">Effects of Agglomeration and Trade Liberalization on Firm Entry and Exit</a></li>		
			<li><a href="mphil_theme.php#scale">Effects of Agglomeration on the Formation and Scale of Operations of New Firms</a></li>		
			<li><a href="mphil_theme.php#labor">Labor Pooling As a Determinant of Industrial Agglomeration</a></li>		
			<li><a href="mphil_theme.php#wage">Relative Wage Variation And Industry Location Within Districts Of Punjab</a></li>		
			<li><a href="mphil_theme.php#resource">Resource Misallocation And Aggregate Productivity In Punjab</a></li>		
			</ul>
			
			<hr>
		<br>
		<a href="innov_tech.php" name="Innovation">Innovation and Technology	</a><br>
		
		<ul>
			<li><a href="innov_tech.php#Barriers">Barriers to Product Upgradation in the Sialkot Surgical Goods Sector</a></li>		
			<li><a href="innov_tech.php#Football">Barriers to Upgrading in the Sialkot Football Sector </a></li>		
			<li><a href="innov_tech.php#Adoption">Understanding Institutional Barriers to Technology Adoption in the Pakistani Manufacturing Sector </a></li>		
			<li><a href="innov_tech.php#case">Innovation and firm performance in developing countries: The case of
Pakistani textile and apparel manufacturers</a></li>		
			<li><a href="innov_tech.php#Soccer">Analysis of Technology in the Sialkot Soccer Ball industry</a></li>		
			<li><a href="innov_tech.php#Mapping">Technology and Innovation Mapping Project</a></li>		
			<li><a href="innov_tech.php#Sector">Innovation in the Textiles Sector: A Firm-Level Analysis of Technological and Nontechnological Innovation </a></li>		
		</ul>
		<br>
		<a href="mphil_innovtech.php">MPhil Theses	</a>
		<ul>
			<li><a href="mphil_innovtech.php#Corruption">Corruption, Institutional Barriers and Innovation</a></li>		
			<li><a href="mphil_innovtech.php#Gloves">Technology in the Sialkot Gloves Manufacturing Sector</a></li>		
		</ul>		
		
		<hr>
		<br>
		
		<a href="firm_productivity.php" name="Firm">Firm Productivity	</a><br>
		<ul>
			<li><a href="firm_productivity.php#Pilot">Pilot Benchmarking of Productivity in the Pakistani Garments Sector </a></li>
			<li><a href="firm_productivity.php#Incentives">Incentives and Productivity: Work Groups vs. Production Lines in Pakistani Electric Fan Production </a></li>
			<li><a href="firm_productivity.php#Same">Same Jeans, Same Stitch? A Comparison of Denim Production across Three Factories in Punjab, Pakistan </a></li>
			<li><a href="firm_productivity.php#Technology">Technology in the Sialkot Gloves Manufacturing Sector</a></li>
			<li><a href="firm_productivity.php#Benchmarking">Benchmarking of Productivity in Pakistan's Readymade Garment Sector</a></li>
			<li><a href="firm_productivity.php#Pakistan">Pakistan: A Case of Premature Deindustrialization?</a></li>
			<li><a href="firm_productivity.php#Exporters">Exporters in Pakistan and Firms Who Do Not Export: What's the Big Difference? </a></li>
			<li><a href="firm_productivity.php#Textiles">The Textiles and Garments Sector: Moving Up the Value Chain </a></li>
			<li><a href="firm_productivity.php#Effect">The Effect of Trade Liberalization on Firm Entry and Exit in Punjab, Pakistan </a></li>
		</ul>	
		<br>
		<a href="mphil_firm.php">MPhil Theses	</a>
		<ul>
			<li><a href="mphil_firm.php#Home">Home country institutions and exports of firms: Does institution intensity matter?</a></li>		
		</ul>	
		<hr>
		<br>
		
		
		<a href="health.php" name="Health">Health 	</a><br>
		
		<ul>
			<li><a href="health.php#impact">The impact of bundling health microinsurance with microcredit: Evidence from Punjab, Pakistan </a></li>
			<li><a href="health.php#policy">A policy report that explores and analyses the main trends in utilization of the program since its inception (expected April 2018)</a></li>
			<li><a href="health.php#Rainfall">Rainfall Shocks and child health</a></li>
			<li><a href="health.php#Causes">Causes and Consequences of Consanguineous Marriage in Pakistan</a></li>
			<li><a href="health.php#Birth">Birth Order, Gender, and Child Nutritional Status in Punjab </a></li>
			<li><a href="health.php#Exposure">Exposure to Fasting and Child Nutritional Status in Punjab </a></li>
			<li><a href="health.php#What">What Matters in Child Health: An Instrumental Variable Analysis</a></li>
			<li><a href="health.php#State">The State of Health in Pakistan: An Overview </a></li>
		</ul>	
		<br>
		<a href="mphil_health.php">MPhil Theses	</a>
		<ul>
			<li><a href="mphil_health.php#Impact">Impact of Temporary Migration & Remittances on Child Health Outcomes in Punjab, Pakistan</a></li>		
			<li><a href="mphil_health.php#Geographical">Geographical Constraints and Health Facility Choice: Evidence from Kashf's Health Micro Insurance Program</a></li>		
			<li><a href="mphil_health.php#Prenatal">Impact of Prenatal Exposure to Fasting on Cognitive Development of Children</a></li>		
			<li><a href="mphil_health.php#Child">Child Nutrition, Education & Child Labor: Impact on Human Capital Accumulation</a></li>		
			<li><a href="mphil_health.php#Temporary">Impact of Temporary Migration & Remittances on Child Health Outcomes in Punjab, Pakistan</a></li>		
			<li><a href="mphil_health.php#Early">The Impact of Early Childbearing on Child Health in Punjab</a></li>		
			<li><a href="mphil_health.php#Fasting">The Impact of Prenatal Exposure to Fasting on Child Health Outcomes </a></li>		
			<li><a href="mphil_health.php#Female">Female Empowerment and the Uptake of Maternity Care Services in Pakistan</a></li>
			<li><a href="mphil_health.php#Effects">Effects of Birth Order on Child Nutritional Status</a></li>
			<li><a href="mphil_health.php#Remittances">The Impact of Remittances and Parental Absence on Children's Wellbeing in Rural Punjab</a></li>
			<li><a href="mphil_health.php#Determinants">The Determinants of Child Health and Nutritional Status in Punjab: An Economic Analysis</a></li>
		
		</ul>	
		
		<hr>
		<br>
		<a href="education.php" name="Education">Education	</a><br>
		
		<ul>
			<li><a href="education.php#Rural">Rural Household Finance, Child Labor, and Education in Punjab </a></li>
			<li><a href="education.php#Conditional">Conditional-Cash Transfers for Girls' Secondary Schooling in Punjab: Outcomes</a></li>
			<li><a href="education.php#Determinants">Determinants of School Choice: Evidence from Rural Punjab, Pakistan </a></li>
			<li><a href="education.php#Education">Education, Rent seeking and the Curse of Natural Resources</a></li>
			<li><a href="education.php#Public">Public Vs Private Schooling Choice at the Household Level </a></li>
			<li><a href="education.php#Higher">Higher education, languages, and the persistence of inequitable structures for working-class women in Pakistan</a></li>
		</ul>	
		<br>
		<a href="mphil_education.php">MPhil Theses	</a>
		<ul>
			<li><a href="mphil_education.php#Birth">Birth Order Effects on Child Labor</a></li>
			<li><a href="mphil_education.php#Impact">Impact of Remoteness on Education Quality</a></li>
			<li><a href="mphil_education.php#School">The Impact of School Facilities on Drop outs in Pakistan</a></li>
			<li><a href="mphil_education.php#Female">Impact of Female Secondary School Stipend Program on Enrollment, Marriage and Fertility Outcomes in Rural Punjab</a></li>
			<li><a href="mphil_education.php#Child">Impact Of Child Labor On Schooling Outcome Of Children Living In Rural Punjab, Pakistan</a></li>
			<li><a href="mphil_education.php#External">Effects of External Migration on School Enrollments accumulated Schooling and Dropouts in Punjab</a></li>
		</ul>	
		
		
		
		<hr>
		<br>
		<a href="behavioural_economics.php" name="Behavioural">Behavioural Economics	</a><br>
		
		<ul>
			<li><a href="behavioural_economics.php#Constraints">Constraints to Female Entrepreneurship in Pakistan: the role of women's goals and aspirations </a></li>
			<li><a href="behavioural_economics.php#Behavioural">Behavioural insights for evidence-based policy making - impact of depression intervention on individual preferences</a></li>
			<li><a href="behavioural_economics.php#Overcoming">Overcoming Constraints to Giving </a></li>
			<li><a href="behavioural_economics.php#Pressures">Pressures from peers and spouses and self-control problems as constraints to microenterprise growth: Experimental evidence from Pakistan</a></li>
			<li><a href="behavioural_economics.php#Institutional">Institutional capacity as an organizational challenge: a field experiment in Pakistan</a></li>
			<li><a href="behavioural_economics.php#Force">Overcoming Constraints to Female Labor Force Entry </a></li>
			<li><a href="behavioural_economics.php#Consanguineous">Consanguineous Marriage and Investments in Children </a></li>
			<li><a href="behavioural_economics.php#Two">Two Sides of the Same Rupee? Comparing Demand for Microcredit and Microsaving in a Framed Field Experiment in Rural Pakistan</a></li>
			<li><a href="behavioural_economics.php#Microinsurance">Microinsurance Demand after a Rare Flood Event: Evidence from a Field Experiment in Pakistan</a></li>

		</ul>	
		<br>
		<a href="mphil_behavioural.php">MPhil Theses	</a>
		<ul>
			<li><a href="mphil_behavioural.php#Intergenerational">Intergenerational Transfer of Aspirations: The Impact of Gender</a></li>
			<li><a href="mphil_behavioural.php#Measuring">Measuring Mother's Empowerment through the Culture of Son Preference in Pakistan</a></li>
			<li><a href="mphil_behavioural.php#Spousal">Spousal Trust Game- Evidence from a Field Experiment in Pakistan</a></li>
			<li><a href="mphil_behavioural.php#Transfer">Transfer of Behavioral Traits from Parents to Children: An Experimental Approach</a></li>
			<li><a href="mphil_behavioural.php#Homophily">Homophily and Strategic Behavior in Social Interactions: Evidence from a Lab Experiment </a></li>
			<li><a href="mphil_behavioural.php#Cognitive">Cognitive Reflection and Decision Making</a></li>
			<li><a href="mphil_behavioural.php#Fuzzy">Fuzzy Judgment Aggregation: Distance Based Methods</a></li>
			<li><a href="mphil_behavioural.php#Socioeconomic">Socioeconomic Determinants of Maternal Health Behavior in Pakistan: An Instrumental Variable Approach</a></li>
			<li><a href="mphil_behavioural.php#Education">Education, Employment, and Women's Say in Household Decision-Making in Pakistan</a></li>
			<li><a href="mphil_behavioural.php#Impact">Impact of Parents' Subjective Aspirations on Schooling Investment in Rural Punjab</a></li>

		</ul>	
		
		<hr>
		<br>
		<a href="econ_growth.php" name="Economic">Economic Growth and Development	</a><br>
		
		<ul>
			<li><a href="econ_growth.php#Access">Access to solar electricity in rural Sindh: Role of payment schedule and planning </a></li>
			<li><a href="econ_growth.php#Comparing">Comparing Demand for Microcredit and Microsaving in a Framed Field Experiment in Rural Pakistan </a></li>
			<li><a href="econ_growth.php#Breaking">Breaking the cycle. Reducing non-payment for electricity: experimental evidence from Pakistan </a></li>
			<li><a href="econ_growth.php#Impact">Impact assessment of startup loans to female run micro-enterprises </a></li>
			<li><a href="econ_growth.php#Incentivizing">Incentivizing Development: A Field Experiment on Third Tier Organizations in Pakistan</a></li>
			<li><a href="econ_growth.php#Institutional">Institutional capacity as an organizational challenge: pilot results from a field experiment in Pakistan</a></li>
			<li><a href="econ_growth.php#Rent">Rent-seeking, Government Size and Economic Growth</a></li>
			<li><a href="econ_growth.php#Exchange">Exchange Rate Management and Economic Growth: A Brewing Crisis in Pakistan </a></li>
			<li><a href="econ_growth.php#Business">Business Confidence Surveys of the Business Community in Lahore </a></li>
			<li><a href="econ_growth.php#Diversification">The Diversification and Sophistication of Pakistan's Exports: The Need for Structural Transformation </a></li>
			<li><a href="econ_growth.php#Partial">A Partial Langrangian Approach to Solving Dynamic Models of Economic Growth</a></li>
			<li><a href="econ_growth.php#Corruption">Corruption, Tax Evasion And The Role Of Wage Incentives With Endogenous Monitoring Technology</a></li>
			<li><a href="econ_growth.php#Understanding">Understanding and Addressing Rural Poverty in Pakistan: Oxford University- Lahore School Collaboration </a></li>
			<li><a href="econ_growth.php#Caste">Caste, Social Exclusion and Education in Rural Punjab: World Bank and CREB joint Research Initiative </a></li>
			<li><a href="econ_growth.php#Hamiltonian">A Partial Hamiltonian Approach for Current Value Hamiltonian Systems</a></li>
			<li><a href="econ_growth.php#Reviewing">Reviewing Pakistan's Import Demand Function: A Time-Series Analysis, 1970-2010 </a></li>
			<li><a href="econ_growth.php#Analyzing">Analyzing Pakistan's Trade Opportunity with Turkey </a></li>
			<li><a href="econ_growth.php#Future">An Impact Assessment of Expected Future Turmoil Risk on FDI: A Panel Data Analysis of Developing Countries </a></li>
			<li><a href="econ_growth.php#Growth">Pakistan's Growth Spurts and Reversals: A Historical Perspective </a></li>
			<li><a href="econ_growth.php#Patterns">Patterns of Export Diversification: Evidence from Pakistan </a></li>
			<li><a href="econ_growth.php#Financial">Financial Crisis and Migrant Remittances: Effects on Growth and Poverty in Selected South Asian Countries </a></li>
			<li><a href="econ_growth.php#Microinsurance">Microinsurance in Pakistan: Progress, Problems, and Prospects </a></li>
			<li><a href="econ_growth.php#Patronage">Patronage in Rural Punjab: Evidence from a New Household Survey Dataset </a></li>

		</ul>	
		<br>
		<a href="mphil_growth.php">MPhil Theses	</a>
		<ul>
			<li><a href="mphil_growth.php#Multiple">Multiple equilibria and stability analysis of an economic growth model with Human capital externalities and endogenous time preferences</a></li>
			<li><a href="mphil_growth.php#Endogenous">Endogenous time preferences and Environmental quality: Multiple equilibria and Fiscal implications</a></li>
			<li><a href="mphil_growth.php#Corruption">Corruption: The Role of Taxes and Wage Incentives</a></li>
			<li><a href="mphil_growth.php#Impact">The Impact of the Presence of an External Migrant and Remittance Inflows on Women Empowerment, Punjab</a></li>
			<li><a href="mphil_growth.php#Investment">Investment in Early Childhood Health and its Implications for Human Capital Accumulation</a></li>
			<li><a href="mphil_growth.php#Political">The Impact of Political Connections on the Allocation of Development Projects in Faisalabad</a></li>
			<li><a href="mphil_growth.php#Role">The Role Of International Migration Of Unskilled Labor And Parental Absenteeism In The Human Capital Formation Of Children Left Behind</a></li>
			<li><a href="mphil_growth.php#Human">Human and Social Capital Complementarities in the Presence of Credit Market Imperfections</a></li>
			<li><a href="mphil_growth.php#Ethnic">The Political Economy of Ethnic Polarization, Natural Resource Curse and Income Inequality</a></li>
			<li><a href="mphil_growth.php#Unique">Unique and Multiple Equilibria in a Macroeconomic Model with Environment: Stability Analysis and Transitional Dynamics</a></li>
			<li><a href="mphil_growth.php#Tax">Corruption, Tax Evasion And Economic Development In Economies With Hierarchial Tax Administrative System</a></li>
			<li><a href="mphil_growth.php#Endogenous">Endogenous Patience in a Model of Economic Growth with Human and Unproductive Social Capitals</a></li>
			<li><a href="mphil_growth.php#Socio">The Role of Socio-Economic Networks in Lahore for the General Elections 2013</a></li>
			<li><a href="mphil_growth.php#Spillovers">Growth Spillovers: Separating the Impact of Cultural Distance from Geographical Distance</a></li>
			<li><a href="mphil_growth.php#Determinants">Determinants of Female Labor Force Participation in Pakistan: An Instrumental Variable Approach</a></li>

		</ul>	
		
		<hr>
		

	
		

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
			<li><a href="research_themes.php">&nbsp;&nbsp;&nbsp;<B>Research&nbsp;Themes</B></a></li>

			<li><a href="industrial_policy.php" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Industrial&nbsp;Policy</a></li>			
			
			<!--<li><a href="mphil_theme.php" target="_blank">MPhil Theses</a></li>	-->		
			
			<li><a href="innov_tech.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Innovation&nbsp;and&nbsp;Tech.</a></li>	
			<li><a href="firm_productivity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firm&nbsp;Productivity</a></li>	
			<li><a href="health.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Health</a></li>	
			<li><a href="education.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education</a></li>	
			<li><a href="behavioural_economics.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Behavioural&nbsp;Econ.</a></li>	
			<li><a href="econ_growth.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Economic&nbsp;Growth</a></li>	
			
			
		
<!--<li><a href="dissertations_thesis.php"><B>MPhil Theses</B></a></li>-->	
		</ul>
		
		</div><!--end <div class="leftmenu">-->
		<br><br>
		
		
		
		
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
