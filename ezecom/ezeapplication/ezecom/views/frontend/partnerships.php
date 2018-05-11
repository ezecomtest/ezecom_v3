<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title;?></title>
		<link href="<?php echo base_url();?>images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	
<body>
<?php
	/* Top Header */
	$this->load->view('header/frontend_header');
    $this->load->view('header/header_all');
	$this->load->view('header/main_nav_user_v');
?>
<div class="container-fluid">
	<div class="container">
			<div class="row row-margin-bt">
				<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
					<div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-xs-12">
						<div class="wrapper-partnerships">
							<h3>GoodWill Partners</h3>
							<p>
								Our partners include the nonprofits, businesses, and governments to 
								whom we make grants. Other partners may co-fund work or help us bring 
								together multiple players working toward a common goal.

							</p>
						</div>
					</div>
				<div class="col-xl-2 col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
			</div>
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="wrapper-text">
						<h3>Goodwill</h3>
						<h5><strong>Investing in Communities and Fostering Opportunity</strong></h5>
						<p>
							Our commitment to using the power of technology to help communities 
							thrive and enable people to achieve their potentials continue to drive 
							our works at EZECOM. One of our most important goals is to expand access 
							to the benefits of digital technology beyond our client base to reach those in need.
						</p>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="wrapper-text padding-bt-EzeCampus">
						<h3>EzeCampus</h3>
						<p>
							Our initiative EzeCampus offers free internet to the 
							top universities in Cambodia, reaching over 65,000 students. 
							Next, we intend to broaden access to technology and technology 
							training for high school pupils, thereby expanding this initiative to 
							the majority of schools in the country. Click here for more details.
						</p>
					</div>
				</div>
			</div>
			<div class="row btmar-nearfooter">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="wrapper-text">
						<img class="img-responsive padding-img" src="<?php echo base_url()?>images/partnerships/logo-partnership.jpg"/>
						<h3>Mith Samlanh (Friends)</h3>
						<p>
							EZECOM provides free internet for the computer classroom of Mith 
							Samlanh (Friends Organization) a renowned NGO working with marginalized 
							children for a better future. Old promotional materials of EZECOM get 
							recycled by beneficiaries of their Home-based Production project in to 
							corporate gifts for EZECOM so that children can go to school instead of 
							working on the streets. If you want to know more about the work Mith Samlanh 
							does, please visit <a href="http://www.mithsamlanh.org/">www.mithsamlanh.org</a>
						</p>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="wrapper-text padding-bt-development-invo">
						<img class="img-responsive padding-img" src="<?php echo base_url()?>images/partnerships/development-inovation.png" alt="Development Innovation" title="Development Innovation"/>
						<h3 class="di">Development Innovations and 5D Lab</h3>
						<p>
							Development Innovations is a USAID funded project 
							that helps turn ideas that use technology into solutions 
							that change Cambodia for the better. A big part of the project 
							is the shared office space and innovation “lab”, better known as 
							the 5D Lab, equipped with EZECOM internet, that is freely available 
							to any individual or organization in Cambodia interested in 
							using technology to create social innovations. For more information, 
							visit <a href="http://www.development-innovations.org/">www.development-innovations.org</a>
						</p>
					</div>
				</div>
			</div>
		</div>
</div>


  

<!-- FOOTER -->
<?php
	$this->load->view('footer/footer_user_v');
?>

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