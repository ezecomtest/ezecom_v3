<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <?php
			/* Top Header */
			$this->load->view('header/frontend_header');
			$this->load->view('header/header_all');
			$this->load->view('header/main_nav_user_v');
	    ?>
	</head>
<body>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-right">
				<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/VoIP/VoIP.jpg"/>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-left">
				<div class="VoIP-Contact">
					<h3>VoIP On Your Phone</h3>
					<p>
						EZECOM offers an easy way to stay in touch with the world at the lowest cost. 
						Just dial 177 before you call abroad with your fixed line or 
						mobile phone with only 15 cents a minute to any country. 
						If you are a Camintel or Mobitel customer, it will cost 20 cents a minute per call. 
						So for the cheapest international calls dial:
					</p>
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/VoIP/contact.png"/>
					<p class="text-center phone">This service is available across the phone networks: <br/>012 092 089 & Camintel</p>
				</div>
			</div>
		</div>
		<div class="row mg-top">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-right">
				<div class="internet-phone">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/VoIP/phone-icon.png"/>
					<h3>VoIP Through Your Internet Phone</h3>
					<p>
						Ezecom offers international VoIP calling to pre and postpaid customers and third party telecommunication providers. 
						For even cheaper calls, you can use our EzeCall VoIP service with only 1 cent a minute. 
						You have the choice of renting an EzeCall VoIP phone for $4 a month, or purchasing one for $70. 
						Our phones are available at all our offices and work over your internet connection.
					</p>
					<p class="detail">Please contact us for more details.</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-left">
				<div class="img-internet-call">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/VoIP/internet-phone.jpg"/>
				</div>
			</div>
		</div>
		<div class="row mg-top">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="bg-color">
					<p>
					See our rates below: these rates apply when using our EzeCall VoIP phones available at
					your local Ezecom outlet.
					</p>
					<h3 class="text-center">Popular Call Destinations</h3>
					<p class="text-center">Destination & Rate</p>
					<div class="row mg-top mg-bt">
						<div class="destination-rate">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>USA- Other mainland : $0.0175</p>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>Thailand : $0.055</p>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>China : $0.020</p>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>Singapore : $0.04</p>
							</div>
						</div>
					</div>
					<div class="row mg-bt">
						<div class="destination-rate">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>Hong Kong : $0.03</p>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>India : $0.020</p>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>South Korea : $0.0425</p>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>Malaysia : $0.045</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="destination-rate">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>France - Mobile : $0.065</p>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>Laos : $0.070</p>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<p>Vietnam : $0.07</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mg-top">
			<div class="rate-by-country">
				<h3 class="text-center">All International Rates by Country</h3>
			</div>
		</div>
	</div>
	
</div>          
<!-- FOOTER -->
<?php $this->load->view("footer/footer_user_v")?> 

<!-- BACK TOP TOP BUTTON -->
<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
  <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
</div>
 
</body>
</html>
<script type="text/javascript">
	(function($) {
		// Back to top
		$('#back-to-top').on('click', function(){
			$("html, body").animate({scrollTop: 0}, 500);
			return false;
		});
	})(jQuery);
	
	jQuery(function($){
		$('#pop-up-form').click(function() {
			$('.form-wrapper').toggle('500');
		});
	
		$('#btn-close').click(function(e) {
            $('.form-wrapper').toggle('500');
        });
	
	});
</script>
<!-- BACK TO TOP BUTTON -->