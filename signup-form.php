<? $page="Sign up"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Qwest Credit Enhancement |
		<?php echo $page; ?></title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" title="" />
	<style type="text/css">
		#padding_wrapper.padding{
			padding:15px 25px;

		}
	</style>
	<? include("inc/global-header-data.php"); ?></head>
<body>
<body class="no-sidebar">

	<div class="container">

		<div id="hdr">

			<? include("inc/content-header.php"); ?></div>

		<div id="content_wrapper" class="row-fluid">
			<div id="padding_wrapper" class="padding">
				<div id="primary_content" class="span8">

					<div id="FormBody554" class="well">
						<form action="https://www.securecrmsite.com/aff/t.aspx?c=8H&amp;a=2&amp;g=&amp;l=B8&amp;t=18" method="post" id="FormSet">
							<label>First Name *</label>
							<input type="text" name="_question_1_TextBox" id="_question_1_TextBox" class="required">
							<label>Last Name *</label>
							<input type="text" name="_question_2_TextBox" id="_question_2_TextBox" class="required">
							<label>Email *</label>
							<input type="text" name="_question_22_TextBox" id="_question_22_TextBox" class="txt required email">
							<label>Phone *</label>
							<input type="text" name="_question_17_TextBox" id="_question_17_TextBox" class="required">
							<label>Alt. Phone *</label>
							<input type="text" name="_question_18_TextBox" id="_question_18_TextBox" class="required">
							<label>City *</label>							
							<input type="text" name="_question_14_TextBox" id="_question_14_TextBox" class="required">														
							<label>State *</label>							
							<select name="_question_15_DropDownList" id="_question_15_DropDownList">
								<option value="AK">AK</option>
								<option value="AL">AL</option>
								<option value="AR">AR</option>
								<option value="AZ">AZ</option>
								<option value="CA">CA</option>
								<option value="CO">CO</option>
								<option value="CT">CT</option>
								<option value="DC">DC</option>
								<option value="DE">DE</option>
								<option value="FL">FL</option>
								<option value="GA">GA</option>
								<option value="HI">HI</option>
								<option value="IA">IA</option>
								<option value="ID">ID</option>
								<option value="IL">IL</option>
								<option value="IN">IN</option>
								<option value="KS">KS</option>
								<option value="KY">KY</option>
								<option value="LA">LA</option>
								<option value="MA">MA</option>
								<option value="MD">MD</option>
								<option value="ME">ME</option>
								<option value="MI">MI</option>
								<option value="MN">MN</option>
								<option value="MO">MO</option>
								<option value="MS">MS</option>
								<option value="MT">MT</option>
								<option value="NC">NC</option>
								<option value="ND">ND</option>
								<option value="NE">NE</option>
								<option value="NH">NH</option>
								<option value="NJ">NJ</option>
								<option value="NM">NM</option>
								<option value="NV">NV</option>
								<option value="NY">NY</option>
								<option value="OH">OH</option>
								<option value="OK">OK</option>
								<option value="OR">OR</option>
								<option value="PA">PA</option>
								<option value="PR">PR</option>
								<option value="RI">RI</option>
								<option value="SC">SC</option>
								<option value="SD">SD</option>
								<option value="TN">TN</option>
								<option value="TX">TX</option>
								<option value="UT">UT</option>
								<option value="VA">VA</option>
								<option value="VT">VT</option>
								<option value="WA">WA</option>
								<option value="WI">WI</option>
								<option value="WV">WV</option>
								<option value="WY">WY</option>
							</select>
							<label>Zip Code *</label>							
							<input type="text" name="_question_16_TextBox" id="_question_16_TextBox" class="required">														
							<label>Source</label>							
							<input type="text" name="_question_45_TextBox" id="_question_45_TextBox">														
							<!--
							<label class="hide">Notes</label>							
							<textarea class="hide" name="_question_43_TextArea" id="_question_43_TextArea"></textarea>							
							-->
							<br />
							<br />
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="alert alert-info">
						Upon Submitting, You Will Be Allowed To Login And Attach Your Credit Report Info
					</div>

				</div>
				<div class="span4">

					<img src="http://qwestcredit.com/images/forms/client_sidebar.jpg" alt="qwestcredit sidebar"></div>
			</div>
		</div>
		<div id="ftr">

			<? include("inc/content-footer.php"); ?></div>

	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#FormSet").submit(function(){
				var isSuccessful = true;
				
				$(".required").each(function() {
					if($(this).val().length == 0){
						$(this).addClass("error")
						isSuccessful = false;
					}else{
						$(this).removeClass("error");
					}	
				});

				$(".email").each(function(){					
					var val = $(this).val()
					if(!validateEmail(val)) {
						$(this).addClass("error")
						isSuccessful = false;
					}else{
						$(this).removeClass("error");
					}
				});

				return isSuccessful;
			});			

		});
		
		var validateEmail = function (email) { 
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		    return re.test(email);
		}

	</script>
	<? include("inc/global-ga.php"); ?></body>

</html>