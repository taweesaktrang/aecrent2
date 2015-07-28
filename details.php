<!DOCTYPE html> 
<html> 
	<head> 
	<title>ThaiCreate.Com</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="theme/jquery.mobile-1.1.0.min.css" />
	<script src="theme/jquery-1.7.1.min.js"></script>
	<script src="theme/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<a href="javascript:history.back();" data-icon="back" data-iconpos="notext" data-direction="reverse">Back</a>
		<h1>Details</h1>
	</div><!-- /header -->
	
		<?
			$objConnect = mysql_connect("localhost","root","1234") or die(mysql_error());
			$objDB = mysql_select_db("mobile");
			$strSQL = " SELECT * FROM news WHERE NewsID = '".$_GET["NewsID"]."' ";

			$objQuery = mysql_query($strSQL) or die (mysql_error());
			$objResult = mysql_fetch_array($objQuery);
		?>


			<div class="ui-body ui-body-c">
				<h3><?=$objResult["Subject"];?></h3>
				<p><?=$objResult["Details"];?></p>
				
					<p class="ui-li-aside"><strong><?=date("Y-m-d",strtotime($objResult["NewsDate"]));?></strong></p>
			</div>

</div><!-- /page -->

</body>
</html>

<!-- This Code Download from www.ThaiCreate.Com -->