<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
    
		<title>Emergency Contact Disc Generator</title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="custom.css" />
	</head>
	<body>
		<div class="container">
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<li class="active"><a href="https://github.com/wallyhall/emergencycontactdisc">#GitHub</a></li>
				</ul>
				<h3 class="text-muted">Emergency Contact Disc Generator</h3>
			</div>
			
			<div class="row marketing">
				<p class="lead">In October 2014, the UK government discontinued paper tax discs for cars.
				<br />This left no purpose to the millions of tax disc holders owned by drivers.</p>
				<p class="lead">@MalvernCops proposed a genius new use - the Emergency Contact Disc.
				<br />Here you can instantly generate your own Emergency Contact Disc online.</p>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<form class="form-horizontal" role="form" method="post" action="<?php print(dirname($_SERVER['PHP_SELF'])); ?>/generate.php">
						<input type="hidden" name="generate" value="true" />
	
						<fieldset>
							<legend>Emergency Contact Information (next of kin):</legend>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="nok[name]" class="sr-only">Name:</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="nok[name]" />
								</div>
							</div>

							<div class="form-group">					
								<label class="col-sm-2 control-label" for="nok[relation]">Relationship:</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" name="nok[relation]" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="nok[tel]">Telephone:</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" name="nok[tel]" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="nok[address]">Address:</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="nok[address]" />
								</div>
							</div>
						</fieldset>

						<br />

						<fieldset>
							<legend>Contact Alert Information (you):</legend>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="mai[name]">Name:</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="mai[name]" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="mai[dob]">DOB:</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" name="mai[dob]" />
								</div>
							</div>
					
							<div class="form-group">
								<label class="col-sm-2 control-label" for="mai[alert]">Medical alert:</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="mai[alert]"></textarea>
								</div>
							</div>
						</fieldset>
	
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" class="btn btn-primary" value="Generate" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>