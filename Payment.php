<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Online Payment</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="wizard-v5-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="submitpayment.php" method="POST">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon">
			            		<i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Personal Information</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder">
										<label for="first_name">Student Name</label>
										<input type="text" class="form-control" id="first_name" name="first_name">
									</div>
									<div class="form-holder">
										<label for="last_name">Student IndexNo</label>
										<input type="text" class="form-control" id="last_name" name="last_name">
									</div>
								</div>
								<div class="form-row">
									<div id="radio">
										<label for="gender">Gender:</label>
										<input type="radio" name="gender" value="male" checked> Male
  										<input type="radio" name="gender" value="female"> Female
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="phone">Phone Number</label>
										<input type="text" class="form-control" id="phone" name="phone">
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Bank Information</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder">
										<label for="bank">Bank Name:</label>
										<input type="text" class="form-control input-step-2" id="bank" name="bank">
										<span><i class="zmdi zmdi-search"></i></span>
									</div>
									<div class="form-holder">
										<label for="branch">Branch Name:</label>
										<input type="text" class="form-control input-step-2" id="branch" name="branch">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Email Address:</label>
										<input type="email" name="email" class="email input-step-2-1" id="email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_name">Account Name:</label>
										<input type="text" class="form-control input-step-2-1" id="account_name" name="account_name">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="account_number">Account Number:</label>
										<input type="text" placeholder="4576-6970-3801-2620" class="form-control input-step-2-2" id="account_number" name="account_number">
										<span class="card"><i class="zmdi zmdi-card"></i></span>
									</div>
								</div>
								<div class="form-row form-row-date form-row-step-2">
									<div class="form-holder form-holder-2">
										<label for="date_2" class="special-label">Expiry Date:</label>
										<select name="date_2" id="date_2" class="form-control">
											<option value="15" selected>15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
										</select>
										<select name="month_2" id="month_2" class="form-control">
											<option value="Jan" selected>Jan</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year_2" id="year_2" class="form-control">
											<option value="2018" selected>2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Confirm Details</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Confirm Details</h3>
								<div class="form-row table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>Full Name:</th>
												<td id="fullname-val"></td>
											</tr>
											<tr class="space-row">
												<th>Email Address:</th>
												<td id="email-val"></td>
											</tr>
											<tr class="space-row">
												<th>Phone Number:</th>
												<td id="phone-val"></td>
											</tr>
											<tr class="space-row">
												<th>Gender:</th>
												<td id="gender-val"></td>
											</tr>
											<tr class="space-row">
												<th>Account Name:</th>
												<td id="account-name-val"></td>
											</tr>
											<tr class="space-row">
												<th>Account Number:</th>
												<td id="account-number-val"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
			            </section>	
		        	</div>
					<button class="btn btn-primary w-100" name="btn" type="submit">login</button>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</body>
</html>