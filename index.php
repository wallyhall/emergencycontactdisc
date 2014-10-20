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
				<p class="lead">In October 2014, the UK government <a href="http://www.gov.uk/dvla/nomoretaxdisc">discontinued paper tax discs</a> for cars.
				<br />This left no purpose to the millions of tax disc holders owned by drivers.</p>

				<p class="lead"><a href="https://twitter.com/MalvernCops">@MalvernCops</a> proposed a genius new use - the Emergency Contact Disc.
				<br />Here you can instantly generate your own Emergency Contact Disc online.</p>
				
				<p>Enter contact information for your next of kin below, and any medical alert information about yourself.<br />
				Any example information can be skipped and will not appear on the final print.</p>
			</div>
			
			<div class="row">
				<div class="col-lg-6">
					<form class="form-horizontal" role="form" method="post" action="<?php print(dirname($_SERVER['PHP_SELF'])); ?>/generate.php">
						<input type="hidden" name="generate" value="true" />
	
						<fieldset>
							<legend>Emergency Contact Information (next of kin):</legend>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="nok[name]">Name:</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" id="nok[name]" name="nok[name]" placeholder="e.g. Mr Frank Furter" />
								</div>
							</div>

							<div class="form-group">					
								<label class="col-sm-2 control-label" for="nok[relation]">Relationship:</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" id="nok[relation]" name="nok[relation]" placeholder="e.g. Spouse" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="nok[tel]">Telephone:</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" id="nok[tel]" name="nok[tel]" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="nok[address]">Address:</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" id="nok[address]" name="nok[address]" placeholder="e.g. 101 The Street, IP32 7RE" />
								</div>
							</div>
						</fieldset>

						<br />

						<fieldset>
							<legend>Contact Alert Information (you):</legend>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="mai[name]">Name:</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" id="mai[name]" name="mai[name]" placeholder="e.g. Mrs Peach Furter" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="mai[dob]">DOB:</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" id="mai[dob]" name="mai[dob]" placeholder="e.g. 1964-01-03" />
								</div>
							</div>
					
							<div class="form-group">
								<label class="col-sm-2 control-label" for="mai[alert]">Medical alert:</label>
								<div class="col-sm-6">
									<textarea class="form-control" id="mai[alert]" name="mai[alert]" placeholder="N/A - No medical alerts"></textarea>
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

			<hr />
			
			<div class="row marketing">
				<div id="sharrre" data-url="http://soggysoftware.co.uk/emergencycontactdisc/" data-text="DVLA declare no more tax discs! Utilise your UK tax disc holder with an Emergency Contact Disc. Create one now at http://soggysoftware.co.uk/emergencycontactdisc/" data-title="share this page"></div>
			</div>

			<div class="row marketing">
				<p class="text-muted">This service is provided unofficially, for free, and with absolutely no implied warranty by <a href="http://soggysoftware.co.uk">Matthew Hall</a>.<br />
				Please feel free to share this website with any friends of family.</p>				
				<p class="text-muted">Be assured that absolutely none of your information entered here is stored by us or sent to 3<sup>rd</sup> parties.<br />
				<?php echo file_get_contents(dirname(__FILE__)."/hits.dat"); ?> discs generated since 2014-10-18.</p>
			</div>
		</div>

	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
        <script src="<?php print dirname($_SERVER['PHP_SELF']); ?>/externals/Sharrre/jquery.sharrre.js"></script>
        <script type="text/javascript">
        $('#sharrre').sharrre({
		  share: {
			googlePlus: true,
			facebook: true,
			twitter: true,
			linkedin: true,
		  },
		  buttons: {
			googlePlus: {size: 'tall', annotation:'bubble'},
			facebook: {layout: 'box_count'},
			twitter: {count: 'vertical'},
			digg: {type: 'DiggMedium'},
			linkedin: {counter: 'top'},
		  },
		  enableHover: false,
		  enableCounter: false,
		  enableTracking: true
		});
        </script>
    </body>
</html>
