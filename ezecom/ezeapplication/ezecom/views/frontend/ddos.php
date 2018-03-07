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
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/DDos/ddos.jpg"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<div class="ddos-services">
					<h3>DDoS Mitigation Service</h3>
					<p>
						DDoS Mitigation Service is designed for businesses and enterprises to secure their online 
						operation against cyber-attacks known as distributed denial of service (DDoS) attacks.
					</p>
					<p>
						EZECOM’s DDoS Mitigation Service is equipped with technology powered by an 
						internationallyrecognized research lab and developed with over 10 years of experience protecting the 
						world’s largest banks, telecommunications, gaming and social media companies. It uses an innovative, multi-stage approach for monitoring, detecting and mitigating the most complex DDoS attacks to ensure only legitimate traffic reaches your important network and application resources. It has local scrubbing center with scrubbing capacity of 4Gbps (upgradable on demand) and global cloud scrubbing center with scrubbing capacity of up to 2Tbps and combine with world-class global threat intelligence, 
						working in unison to automatically defeat every size, duration, and frequency of DDoS attacks.
					</p>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row ddos-attacks">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<div class="ddos-attacks">
					<h3>How DDoS Attacks</h3>
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/DDoS-attack-chart.png"/>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row">
			<div class="impact">
				<h3>DDoS Attacks on Business Impact</h3>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Revenue-Loss.png"/>
					<h4 class="text-center">REVENUE LOSS</h4>
					<p class="text-center">
						Downtime affects your growing business as it now becomes IT and internet reliant. 
						Your technical infrastructure has become more complex and requires proper 
						system or back up process to minimise downtime threat.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Productivity-Loss.png"/>
					<h4 class="text-center">PRODUCTIVITY LOSS</h4>
					<p class="text-center">
						When your network systems are shut down, your workforce productivity 
						will be immediately halted both internal & external 
						communications which will downgrade customers’ satisfaction.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="revenue">
					<img class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/icon-Reputation-Damage.png"/>
					<h4 class="text-center">REPUTATION DAMAGE</h4>
					<p class="text-center">
						Your brand image suffers because you have lost your valuable customers.
					</p>
				</div>
			</div>
		</div>
		<div class="row ddos-attacks">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<div class="ddos-attacks">
					<h4>How Our DDoS Mitigation Works</h4>
					<p>
						DDoS Mitigation Service,
Prevents The Loss Of Your Business’s Revenue And Reputation
					</p>
					<img  class="img-responsive img-position" src="<?php echo base_url()?>images/our-services/DDos/DDoS-Mitigation-diagram.png"/>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
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