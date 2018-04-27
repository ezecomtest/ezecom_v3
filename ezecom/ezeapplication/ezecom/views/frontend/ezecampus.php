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
	<div class="container bg-color">
		<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="ezecampus-desc">
					<h2>EzeCampus</h2>
					<p>
						EzeCampus is the name we have given to EZECOM’s support to education in Cambodia. In June of 2010 the first step in the EzeCampus program was announced. In cooperation with the Ministry of Education EZECOM installed fibre optic connection is the top universities of Phnom Penh, giving the students at their university access to high speed internet. 
						Further EZECOM entitled students from all universities to 10% discount on EZECOM Pulse packages for their home.
					</p>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="content-left">
					<h3>This first step in the EzeCampus gave 65 000 students access to high speed internet.</h3>
					<p>
						In August 2012 we announced the second phase of the EzeCampus project: 
						We have provided internet service and computer equipment to 50 general secondary 
						education schools and teacher training institutions in the country. With this agreement 
						EZECOM will provide broader educational resources to classes in various provinces countrywide. 
						It also means that distance learning may become a reality for hundreds of thousands of students 
						nationwide in the near future. The donation in the 
						form of free Internet service and network installments is worth tens of thousands of US dollars.
					</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="content-right">
					<h3>This second step expanded the number of students benefiting from this with another ten thousand.</h3>
					<p>
						Regarding the project Paul Blanche-Horgan, CEO of Ezecom, said, 
						“Ezecom always wishes to use its IT capacity to contribute to the country’s development. 
						This plan will allow us to use our 9000-kilometer optical cable network to provide educational 
						opportunities to youth across the country.” Among all our corporate social responsibility projects 
						education takes a special role and we are always looking for ways to contribute to Cambodia’s development.
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
	(function($) {
		// Back to top
		$('#back-to-top').on('click', function(){
			$("html, body").animate({scrollTop: 0}, 500);
			return false;
		});
	})(jQuery);
</script>
<!-- BACK TO TOP BUTTON -->