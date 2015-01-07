<? $page="How it Works"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Qwest Credit Enhancement | <?php echo $page; ?></title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" title="" />
<? include("inc/global-header-data.php"); ?>
<style type="text/css">
	h2{
		margin-bottom:5px;
	}
	h2 small.alert{
		width:185px!important;
		margin:0 30px 0 265px;
		text-align:center;
		display:inline-block;
		padding:0 15px;
	}
	.no-sidebar #primary_content .padding{
		padding-right:25px;
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
			<? include("inc/content-header.php"); ?>
		</div>
		<div id="content_wrapper" class="row-fluid">
			<div id="primary_content" class="span12">
				<div class="padding">
		<!-- content begins here -->
		
		
		
		<h2>Step 1: <small class="alert alert-success">Consulation</small> <a href="http://www.youtube.com/embed/dWQ0o91F2QM" class="modal-trigger btn btn-mini btn-success"><i class="icon-white icon-film"></i> watch the video</a></h2>
		<p>This is where we create and design your program.  Our credit experts gather all required info from your credit report, assess your specific goals, and customize the program in the most aggressive way possible.  The expertise in FICO, FCRA and FDCPA, combined with a thorough understanding of each clients specific goals and needs allow for a completely customized program.</p>

		<h2>Step 2: <small class="alert alert-success">Enrollment</small> <a href="http://www.youtube.com/embed/GLQSjsi30Ik" class="modal-trigger btn btn-mini btn-success"><i class="icon-white icon-film"></i> watch the video</a></h2>
		<p>Once your consultation is complete, we will need all enrollment and ID documents so that the credit report correction phase of the program can begin.  Enrollment into this phase of the program is not required.  Each client has the option to simply enjoy the benefits of the consultation and pursue correcting the credit report on their own, or employ Qwest to pursue correction of the credit report. <strong>Upon enrollment, you will be sent an email that contains your login and password to our website and your own client page.</strong></p>
					
		<h2>Step 3: <small class="alert alert-success">Enforce and Educate</small> <a href="http://www.youtube.com/embed/I8QxO5ldpIU" class="modal-trigger btn btn-mini btn-success"><i class="icon-white icon-film"></i> watch the video</a></h2>				
		<p>During this phase of the program, Qwest will work hard to enforce your rights under FCRA, FDCPA, and FACTA to get your credit report corrected. Each client will be given a package at the beginning of each investigation cycle, which needs to be delivered to your local post office.  Every investigation cycle lasts 40 days.  While the investigation cycle is processing, you will be encouraged to utilize the "Education" and "Resources" provided on the website.  Part of each clients program typically consists of utilizing the various tools available, to either overcome deficiencies or lay foundation for a stronger credit report. <strong>You will be sent an email at the beginning of this phase of the program, advising you that your investigation cycle is ready to begin.</strong></p>

		<h2>Step 4: <small class="alert alert-success">Update</small> <a href="http://www.youtube.com/embed/c-U_SkeLAQk" class="modal-trigger btn btn-mini btn-success"><i class="icon-white icon-film"></i> watch the video</a></h2>
		<p>Once an investigation cycle completes, which is typically 40 days from the start date, it will be time to update your credit file.  We will ask you to forward(scan or fax)in any responses that came in the mail.  The more organized they are, the better we will be able to process them <strong>(Please do NOT just drop off a stack of envelopes to the office)</strong>. This will also be the time to update your credit report and track the progress to the credit score, as well as the corrections to the credit report.  We ask all clients to wait until the investigation cycle is complete before you forward in any mail responses.  <strong>You will be sent an email at this phase of the program, advising you that your file is ready for an update.</strong></p>
		
		<h2>Step 5: <small class="alert alert-success">Repeat</small> <a href="http://www.youtube.com/embed/Y6HlaxxcVbY" class="modal-trigger btn btn-mini btn-success"><i class="icon-white icon-film"></i> watch the video</a></h2>
		<p>After the update of the file is complete, if there is still more work to do, the process simply repeats the step of Enforcement and Education.  From the clients position, that step will always be them same. What will change of course, is which parties are being communicated with and what is being addressed, depending on what still needs to be corrected and what has occurred in previous cycles. This process will continue until the most optimal results have been achieved.</p>
		
		</div>
		<!-- end content -->
		
			</div>
		</div>
		<div id="ftr">
<? include("inc/content-footer.php"); ?>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".modal-trigger").on("click", function(e){
				e.preventDefault();
				var targetURL = $(this).attr("href");
				
				$("#video_modal").remove(); //cleanup;
				var html = "<div id='video_modal' class='modal fade hide'>";
				html += "<div class='modal-header'><h3>Watch the video</h3></div>";
				html += "<div class='modal-body'>";
				html += "<iframe width='400' height='350' style='margin-left:70px;' src=" + targetURL + " frameborder='0' allowfullscreen></iframe>";
				html += "</div>";
				html += "<div class='modal-footer'>";
				html += "<a href='#' class='btn btn-primary' data-dismiss='modal'>close</a>";
				html += "</div></div>";
				
				$("body").append(html);
				$('#video_modal').modal('show').on("hide", function(){
					$("#video_modal").remove();
				});
			});
		});		
	</script>
<? include("inc/global-ga.php"); ?>
</body>
</html>