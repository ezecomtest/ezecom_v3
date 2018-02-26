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
<body>
<div class="container-fluid">
	<div class="container container-top-mar">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-img-padding">
				<div class="wrapper-top">
					<span>
						<img id="pop-up-form" class="img-responsive" src="<?php echo base_url()?>images/our-services/btn-sign-up.png"/>
					</span>
					<img  class="img-responsive" src="<?php echo base_url()?>images/our-services/dedicate.jpg"/>
				</div>
			</div>
		</div>
		<div class="row row-margin-top">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="business">
						<img class="img-responsive" src="<?php echo base_url()?>images/our-services/business.png"/>
					<div class="border-bottom"></div>
					<p>
						EZECOM Dedicated Packages are designed to support 
						business critical functions and 
						offer high speed connectivity and reliable access.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="storage">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/storage.png"/>
					<div class="border-bottom"></div>
					<p>
						EZECOM Dedicated Packages allow you to send and receive 
						large amount of data, conduct video conferences, run web based applications, 
						stream video and any mission critical applications.
					</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="support-customer">
					<img class="img-responsive" src="<?php echo base_url()?>images/our-services/support-customer.png"/>
					<div class="border-bottom"></div>
					<p>
						EZECOM dedicated packages give you the highest level 
						of performance delivered over our highly dependable and 
						redundant infrastructure with 24-hour network monitoring 
						and customer support included.
					</p>
				</div>
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
	(function($){
		// Back to top
		$('#back-to-top').on('click', function(){
			$("html, body").animate({scrollTop: 0}, 500);
			return false;
		});
	})(jQuery);
</script>