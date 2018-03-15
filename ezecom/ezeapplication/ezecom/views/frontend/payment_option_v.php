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
		<div class="row top-mg">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-right">
				<img  class="img-responsive max-size" src="<?php echo base_url()?>images/support/payment/payment.jpg"/>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 pd-left">
				<div class="payment-option">
					<p class="ezeBill">PAYMENT EZECOM BILL</p>
					<p class="first">just mouse click away</p>
					<p class="second">
						For our customers convenience we offer a number of different payment optins. 
						Besides paying your bill online or via your mobile phone, at all our 
						offices and e-café’s you can pay your bill in cash. This page gives you and overview of 
						all methods, with a step by step instruction. 
						So you can choose what fits best for you or your company.
					</p>
				</div>
			</div>
		</div>
		<div class="row mg-top">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="payment-detail">
					<p>For your convenience we offer a number of different payment options. 
					Besides paying your bill online or via your mobile phone, at all our offices you can pay your bill in cash.
					This page gives you an overview of all methods, with a step by step instruction.
					So you can choose what fits best for you or your business.</p>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>support/payment#aba" data-toggle="tab" data-id="aba">
					<div class="aba">
						<p class="text-position">ABA Bank</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>support/payment#anz" data-toggle="tab" data-id="anz">
					<div class="anz">
						<p class="text-position">ANZ Royal</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>support/payment#acleda" data-toggle="tab" data-id="acleda">
					<div class="acleda">
						<p class="text-position">ACLEDA Unity</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>support/payment#cellcard" data-toggle="tab" data-id="cellcard">
					<div class="cellcard active-now">
						<p class="text-position">Cellcard Brand Office</p>
					</div>
				</a>
			</div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>support/payment#Maybank" data-toggle="tab" data-id="Maybank">
					<div class="Maybank">
						<p class="text-position">Maybank</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>support/payment#wing" data-toggle="tab" data-id="wing">
					<div class="wing">
						<p class="text-position">Wing</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>support/payment#wing-app" data-toggle="tab" data-id="wing-app">
					<div class="wing-app">
						<p class="text-position">Wing Money App</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>support/payment#download" data-toggle="tab" data-id="download">
					<div class="download">
						<p class="text-position">Download Book</p>
					</div>
				</a>
			</div>
		</div>
		<div class="row bg-color clear-mg">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<!-- Content -->
				<div class="tab-content">
					<div id="cellcard" class="tab-pane rl_tabs-pane nn_tabs-pane active payment-tap">
							<h1>Payment Cellcard Counters</h1>
							<div class="wrapper-content">
								<p>
									1. Go to Cellcard Office of your choice
									2. Go to the cashiers counter
									3. Hand the cashier your invoice and the cash amount.
									4. Your invoice will be processed by Cellcard staff
									5. There are 5 locations in Phnom Penh and 4 locations nationwide where you can pay your EZECOM invoice:

								Phnom Penh Cellcard Head Office 
								Address: No. 33 Preah Sihanouk. Blvd, Sangkat Chak Tomouk, Khan Daun Penh, Phnom Penh

								Phnom Penh Customer Service and Sales Center (Toul Kork) 
								Address: No. 46, St. 289, Beung Kok 1, Toul Kok, Phnom Penh

								Phnom Penh Customer Service and Sales Center (Russian Market) 
								Address: No. 166, (E0,E1), St. 155, S. Toul Tompong 1, K. Chamkamorn, Phnom Penh

								Phnom Penh Customer Service and Sales Center (Kampuchea Krom) 
								Address: No. 219, Corner of St. 128 and St. 169, S. Methapheap, K. 7 Makara, Phnom Penh

								Phnom Penh Customer Service and Sales Center (Sovanna) 
								Address: No. D25(opposite the main entrance of Sovanna Shopping Mall), Diamond Street, S. Tomnob Toek, K. Chamkamorn, Phnom Penh

								Siem Reap Representative Office 
								Address: No. 50, Sivutha Street, SangKat Svay Dongkum, District Siem Reap, Siem Reap

								Battambang Representative Office 
								Address: No. 98-100, Group 38, Phum 20 Usaphea, Khum Svai Pau, Srok Battambang, Battambang

								Sihaknoukville Representative Office 
								Address: No. 118, St. Ekareak, Phum 2 Sangkat 4, Krong Preah Sihanouk, Sihanouk province

								Kampong Cham Representative Office 
								Address: No. Phun No. 4, Khum Veal Vong, Srok Kompong Cham, Kompong Cham
							</p>
							</div>
					</div> <!-- End Cellcard-->
					<div id="Maybank" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
						<h1>Payment Cellcard Counters</h1>
						<div class="wrapper-content">
							<p>
								M2U Maybank Internet Banking Follow these easy steps to pay your bill via M2U:
							</p>
						</div>
					</div><!-- End Maybank -->
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

<script type="text/javascript">
$(document).ready(function () {
	$('a .aba').click(function(e) {
		
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .anz').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .acleda').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .cellcard').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Maybank').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .wing').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .wing-app').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .download').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .download').click(function(e) {
		
		$('a .aba').removeClass('active-now');
		$('a .anz').removeClass('active-now');
		$('a .acleda').removeClass('active-now');
		$('a .cellcard').removeClass('active-now');
		$('a .Maybank').removeClass('active-now');
		$('a .wing').removeClass('active-now');
		$('a .wing-app').removeClass('active-now');
		/* Active bg */
		var imageUrl = "<?php echo base_url()?>images/support/payment/hover-download.png";
		$('.download').css('background-image', 'url(' + imageUrl + ')');
		$(this).addClass('active-now');
		e.preventDefault();
	});
}); 
</script>