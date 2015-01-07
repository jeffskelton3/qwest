<? $page="Education"; ?>

<!DOCTYPE html>

<html>

<head>

	<title>Qwest Credit Enhancement |
		<?php echo $page; ?></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" title="" />
	<? include("inc/global-header-data.php"); ?>
	<style type="text/css">
	.no-sidebar #primary_content .padding{
		padding-right:25px;
	}
	.no-sidebar #left_sidebar .padding{
		padding:15px;

	}
	p{
		margin-bottom:35px;	
	}
	a.btn{
		color:#fff!important;
	}
</style>
</head>

<body class="no-sidebar">

	<div class="container">

		<div id="hdr">

			<? include("inc/content-header.php"); ?></div>

		<div id="content_wrapper" class="row-fluid">
			<div id="left_sidebar" class="span3">
				<div class="padding">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li>
								<a href="#faq">FAQ</a>
							</li>
							<li>
								<a href="#credit_tips">Credit Tips</a>
							</li>
							<li>
								<a href="#laws">Laws</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
			<div id="primary_content" class="span9">

				<div class="padding">
					<!-- content begins here -->
					<?php include("education-faqs.php"); ?>
					<?php include("education-credit-tips.php"); ?>
					<?php include("education-laws.php"); ?>
					<!-- end content -->
				</div>

			</div>
		
		<div id="ftr">

			<? include("inc/content-footer.php"); ?></div>

	</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function(){
			
		});		
	</script>
	<? include("inc/global-ga.php"); ?></body>

</html>