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

</head>

<body style="background-color:#f2f2f2;">


			<?php 
				//error_reporting(E_ERROR | E_PARSE); // hide all warinings..
				include 'headerother.php';
			?>


	<div id="contentother">
	
	
	
	

	
	

	<!--LEFT MENU  END-->
	
	
	
	
	
	<!--START MAIN PANEL-->
		<div id="search">
		<h1>Search</h1>
		<br>
		
		
		
		
				

		<?php
			include 'connection.php';
			
			$SearchRecord=$_POST["txtsrch"];
			
			
			
			$SearchQuery=mysqli_query($conn,"SELECT * FROM  `searchlist` WHERE  `searchdesc` LIKE  '%$SearchRecord%' LIMIT 0 , 10");
			$NumRows=mysqli_num_rows($SearchQuery);
			
			
			if($NumRows <= 0){ echo "<h3>Record Not Found</h3><br>";}
			
			echo "<h3>$NumRows results were returned for $SearchRecord.</h3>";
			echo "<hr width='980px' align='left'><br>";
			
			while($SearchRow=mysqli_fetch_array($SearchQuery))
			{
				$SearchDesc=$SearchRow['searchdesc'];
				$SearchSub=$SearchRow['searchsub'];				
				$SearchLink=$SearchRow['searchlink'];								
			?>
			
			  <table id="mytable" class="display">
                                <thead>
                                    <tr>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
								
								<tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
								
	

	<tr>
    <td>
		<a href="<?php echo $SearchLink;?>"><?php echo $SearchDesc;?></a>
		<p><?php echo $SearchSub;?></p>
	</td>
    </tr>
	
	<tr><td><hr width='800px' align='left'></td></tr>
	
	</tbody></table>
		
		
			<?php
			}// end while($SearchRow=mysqli_fetch_array($SearchQuery))
			?>

		</div><!--END MAIN PANEL-->
	
	
	
	</div><!--<div id="contentother"> end-->

	</div>	<!--end <div class="main_width">-->	
</td></tr>


<?php
	include 'myfooter.php';
?>	






</body>
</html>
