<? $page="Thank You"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Qwest Credit Enhancement | <?php echo $page; ?></title>
<? include("inc/global-header-data.php"); ?>
</head>
<body>
	<div id="container">
		<div id="hdr">
<? include("inc/content-header.php"); ?>
		</div>
		<div id="content">
		<div id="main-content" class="home" style="height:400px;">
		<!-- content begins here -->
		<h1 style="text-align:center;"><em>Thank You!!</em></h1>
		<?php if ($_GET["type"] === "a") : ?>
			<p id="affiliate_message" style="font-size:20px; font-weight:bold; text-align:center">You were just sent an email containing a username and password to our website.<br />Please login to customize your page and begin sending new clients</p>
		<?php else: ?>
			<p id="customer_message" style="font-size:20px; font-weight:bold; text-align:center">You were just sent an email containing a username and password to our website.<br />Please login and attach your credit report info for review.</p>					
		<?php endif ?>
		<!-- end content -->
		</div>
		<div id="ftr">
<? include("inc/content-footer.php"); ?>
		</div>
	</div>
<? include("inc/global-ga.php"); ?>
</body>
</html>