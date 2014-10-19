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
		<div id="fb-root"></div>
	
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

				<p class="lead"><a href="https://twitter.com/MalvernCops">@MalvernCops</a> proposed a genius new use - the Emergency Contact Disc.
				<br />Here you can instantly generate your own Emergency Contact Disc online.</p>
				
				<p>Enter contact information for your next of kin below, and any medical alert information about yourself.<br />
				The example information can be ignored and will not appear on the final print.</p>
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
									<input class="form-control" type="text" id="nok[name]" name="nok[name]" placeholder="Mr Frank Furter" />
								</div>
							</div>

							<div class="form-group">					
								<label class="col-sm-2 control-label" for="nok[relation]">Relationship:</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" id="nok[relation]" name="nok[relation]" placeholder="Spouse" />
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
									<input class="form-control" type="text" id="nok[address]" name="nok[address]" placeholder="101 The Street, IP32 7RE" />
								</div>
							</div>
						</fieldset>

						<br />

						<fieldset>
							<legend>Contact Alert Information (you):</legend>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="mai[name]">Name:</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" id="mai[name]" name="mai[name]" placeholder="Mrs Peach Furter" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="mai[dob]">DOB:</label>
								<div class="col-sm-3">
									<input class="form-control" type="text" id="mai[dob]" name="mai[dob]" placeholder="1964-01-03" />
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
			
<!--			<div class="row text-center">
				<div class="col-sm-3">
					<script type="IN/Share" data-url="http://soggysoftware.co.uk/emergencycontactdisc/" data-counter="right"></script>
				</div>
				<div class="col-sm-3">
					<div class="fb-like" data-href="http://soggysoftware.co.uk/emergencycontactdisc" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
				</div>
				<div class="col-sm-3">
					<div class="g-plusone" data-size="standard" data-count="true"></div>
				</div>
				<div class="col-sm-3">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://soggysoftware.co.uk/emergencycontactdisc/" data-via="wallyhall">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>-->

			<div class="row">
				<p class="text-muted">This service is provided unofficially, for free, and with absolutely no implied warranty by <a href="http://soggysoftware.co.uk">Matthew Hall</a>.<br />
				Please feel free to share this website with any friends of family.</p>				
				<p class="text-muted">Be assured that absolutely none of your information entered here is stored by us or sent to 3rd parties.<br />
				<?php echo file_get_contents(dirname(__FILE__)."/hits.dat"); ?> discs generated.</p>
			</div>
		</div>

	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		
		<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
    </body>
</html>
