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
					<div class="aba active-now">
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
					<div class="cellcard">
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
		<!--<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="tab-content">
					<div id="cellcard" class="tab-pane rl_tabs-pane nn_tabs-pane active payment-tap">
						<h1 class="text-center">Payment Cellcard Counters</h1>
					</div>
					<div id="Maybank" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
						<h1 class="text-center">Maybank Internet Banking</h1>
					</div>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>-->
		<div class="tab-content">
			<div id="aba" class="tab-pane rl_tabs-pane nn_tabs-pane active payment-tap">
					<div class="row"><h1 class="text-center top-header">ABA Bank</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<h1 class="header">Pay your EZECOM bill with ABA iBANKING</h1>
								<p><b>As an ABA account holder you can manage your finances from the comfort of your own home, or anywhere in the world.</b></p>
								<ol>
									<li>Go to www.ababank.com and click on the iBank button</li>
									<li>Login to your iBanking account with your username and password</li>
									<li>Go to <b>"Payments"</b> menu and click <b>"Quick Payment"</b> in the submenu</li>
									<li>Select "Internet Providers" and click <b>"EZECOM"</b></li>
									<li>Enter your <b>"Invoice Number"</b>, the amount of your bill and the currency (US Dollar)</li>
									<li>Click <b>"Pay"</b></li>
									<li>Click <b>"OK"</b> to confirm the payment</li>
									<li>Enter your dynamic authentication code</li>
									<li>A confirmation of your payment will be displayed</li>
								</ol>
								<p>
									For full information on how to sign up for an ABA banking account, 
									Please go to your nearest ABA Bank or check the details on ABA Bank website.
								</p>
								<h1 class="header">Pay your EZECOM bill with ABA ATM</h1>
								<p><b>If you are an ABA account holder you can pay your EZECOM bill at all ABA ATM's.</b></p>
								<ol>
									<li>Insert your ABA Bank card in the ABA ATM</li>
									<li>Choose your preferred language</li>
									<li>Enter your PIN code</li>
									<li>Select the <b>"More Services"</b> menu</li>
									<li>Choose <b>"Bill Payments"</b></li>
									<li>Select <b>"EZECOM"</b></li>
									<li>Enter your <b>"Invoice Number"</b></li>
									<li>Enter the US dollar amount of your bill</li>
									<li>Confirm or decline a printed receipt</li>
									<li>Confirm if the enter information is correct (<b>Yes</b>=process transaction, <b>No</b>=cancell transaction, you can then start the procedure again.</li>
									<li>Your payment is processed We recommend you keep your printed receipts for future references.</li>
								</ol>
							</div>
						</div>
					</div>
			</div> <!-- End ABA -->
			
			<div id="anz" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">ANZ Royal</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<h1 class="header">Pay your EZECOM bill with ANZ Royal bank</h1>
								<p><b>Pay your EZECOM bill with your ANZ Royal Account in a few easy steps from your home or anywhere in the world.</b></p>
								<ol>
									<li>Go to www.anzroyal.com</li>
									<li>Login your internet banking account</li>
									<li>Go to <b>"Funds Transfer"</b>& Click <b>"Bill Payment"</b></li>
									<li>In <b>"From Account"</b> drop down list, select the account you want to debit from</li>
									<li>In <b>"Biller Name"</b> drop down list, select <b>"EZECOM"</b></li>
									<li>Enter your 6 digit EZECOM <b>"invoice number"</b></li>
									<li>Enter the bill amount you want to pay</li>
									<li>Select <b>"Now"</b> if you want to pay immediately. Or, Select <b>"Once On"</b> and Choose the future date, you want to pay</li>
									<li>When your transaction is processed a confirmation will be displayed</li>
								</ol>
								<p>
									For full information on how to sign up for an ANZ Royal Internet banking account please go to your nearest ANZ Royal outlet or visit the website.
								</p>
								<h1 class="header">Pay your EZECOM bill with ANZ Royal Branch Deposit</h1>
								<p><b>You can pay your EZECOM invoice at all ANZ Royal branch offices, at no cost to you.</b></p>
								<ol>
									<li>Go to an ANZ Royal Office of your choice</li>
									<li>Go to the transfers counter</li>
									<li>Hand the cashier your invoice and the cash amount.</li>
									<li>Your invoice will be processed by ANZ Royal</li>
								</ol>
								<p>
									For full information on how to sign up for an ANZ Royal account. please go to your nearest ANZ Royal outlet or visit the website.
								</p>
							</div>
						</div>
					</div>
			</div> <!-- ANZ -->
					
			<div id="acleda" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">Acleda Unity</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<h1 class="header">Follow these easy steps to pay your bill via ACLEDA with your mobile phone.</h1>
								<ol>
									<li>Go to ACLEDA Unity menu</li>
									<li>Select <b>“Bill Payment”</b> for bill payment</li>
									<li>Select <b>“Make Bill Payment”</b></li>
									<li>Select <b>“EZECOM”</b></li>
									<li>Select the account which you wish to make the payment.</li>
									<li>Select Consumer Number for your payment.If you don’t have one, Select <b>“Create New Consumer Number”</b> to enter your Ezecom Customer ID.</li>
									<li>Enter your Customer ID (Eg. 14523) and press <b>“NEXT”</b></li>
									<li>Enter the US dollar amount of your bill, and press <b>“NEXT”</b></li>
									<li>Please verify your payment details, then press <b>“YES”.</b></li>
									<li>Your payment is successfully processed</li>
								</ol>
								<p>
									For full information on how to sign up for ACLEDA account please go to your nearest ACLEDA branch.
								</p>
			
							</div>
						</div>
					</div>
			</div> <!-- ACLEDA -->
			
			<div id="cellcard" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row">
						<h1 class="text-center top-header">Payment Cellcard Counters</h1>
					</div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
					<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
						<div class="wrapper-content">
							<p class="">
								You can pay your EZECOM invoice at selected Cellcard offices, at no cost to you.
							</p>
							<ol>
								<li>Go to Cellcard Office of your choice</li>
								<li>Go to the cashiers counter</li>
								<li>Hand the cashier your invoice and the cash amount.</li>
								<li>Your invoice will be processed by Cellcard staff</li>
								<li>There are 5 locations in Phnom Penh and 4 locations nationwide where you can pay your EZECOM invoice:</li>
							</ol>

							<p><b>Phnom Penh Cellcard Head Office</b> <br/>Address: No. 33 Preah Sihanouk. Blvd, Sangkat Chak Tomouk, Khan Daun Penh, Phnom Penh
							</p> 
							

							<p><b>Phnom Penh Customer Service and Sales Center (Toul Kork)<br/></b>
								Address: No. 46, St. 289, Beung Kok 1, Toul Kok, Phnom Penh
							</p> 
							

							<p><b>Phnom Penh Customer Service and Sales Center (Russian Market)<br/></b>
								Address: No. 166, (E0,E1), St. 155, S. Toul Tompong 1, K. Chamkamorn, Phnom Penh
							</p> 
							

							<p><b>Phnom Penh Customer Service and Sales Center (Kampuchea Krom)</b><br/>
								Address: No. 219, Corner of St. 128 and St. 169, S. Methapheap, K. 7 Makara, Phnom Penh
							</p> 
							

							<p><b>Phnom Penh Customer Service and Sales Center (Sovanna)</b> <br/>
							Address: No. D25(opposite the main entrance of Sovanna Shopping Mall), Diamond Street, S. Tomnob Toek, K. Chamkamorn, Phnom Penh
							</p> 
							

							<p><b>Siem Reap Representative Office</b><br/>
							Address: No. 50, Sivutha Street, SangKat Svay Dongkum, District Siem Reap, Siem Reap
							</p> 
							<p></p>

							<p><b>Battambang Representative Office</b><br/>
							Address: No. 98-100, Group 38, Phum 20 Usaphea, Khum Svai Pau, Srok Battambang, Battambang
							</p> 
							

							<p><b>Sihaknoukville Representative Office</b><br/>
							Address: No. 118, St. Ekareak, Phum 2 Sangkat 4, Krong Preah Sihanouk, Sihanouk province
							</p> 
						
							<p><b>Kampong Cham Representative Office</b><br/>
							Address: No. Phun No. 4, Khum Veal Vong, Srok Kompong Cham, Kompong Cham
							</p> 
							

						</div>
							
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
					</div>
			</div> <!-- End Cellcard -->
			<div id="Maybank" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">Maybank Branch Deposit</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<p><b>All maybank customers can pay their EZECOM invoice at all branch offices of Maybank.</b></p>
								<ol>
									<li>Go to the Maybank branch of your choice</li>
									<li>Go to the transfers counter</li>
									<li>Hand the cashier your invoice and the cash amount.</li>
									<li>Your invoice will be processed by Maybank</li>
								</ol>
								<p>
									For full information on how to sign up for an Maybank account. Pease go to your nearest Maybank outlet or visit the website.
								</p>
								<h1 class="header">M2U Maybank Internet Banking Follow these easy steps to pay your bill via M2U:</h1>
								<p>
									Go to <a href="http://www.maybank2u.com.kh/"> www.maybank2u.com.kh </a> & login
								</p>
								<p><b>On the Home Screen :</b></p>
								<ol>
									<li>Select <b>“Bill payment”</b></li>
									<li>Select <b>“One-Time Payment“</b></li>
								</ol>
								<p><b>On Step 1/3 of One-Time Payment</b></p>
								<ol>
									<li>Click on drop down list of Biller Institution</li>
									<li>Select <b>“EZECOM/TELCOTECH”</b></li>
									<li>Click <b>“Continue”</b></li>
								</ol>
								<p><b>On Step 2/3 of One-Time Payment</b></p>
								<ol>
									<li>Fill in the Invoice Number</li>
									<li>Fill in the Customer ID</li>
									<li>Fill in the Subscriber’s Name</li>
									<li>Fill in the Amount of your bill in dollar</li>
									<li>Select the Date of your payment (Can be current date and future date)</li>
									<li>Click Continues to proceed</li>
								</ol>
								<p><b>On Step 3/3 of One-Time Payment</b></p>
								<ol>
									<li>Re-Check / Confirm the detail of the Payment</li>
									<li>Click <b>“Confirm”</b> to proceed Successful Payment Status appear</li>
								</ol>
								<p>
									We recommend you print the receipt for reference For full information on how to sign up for M2U account please go to your nearest Maybank Branch or visit the website.
								</p>
							</div>
						</div>
					</div>
			</div><!-- Maybank -->
			<div id="wing-app" class="tab-pane rl_tabs-pane nn_tabs-pane payment-tap">
					<div class="row"><h1 class="text-center top-header">Wing Bill Payment</h1></div>
					<div class="row bg-color clear-mg">
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<div class="wrapper-content">
								<p><b>Follow these easy steps to pay your bill via WING with your mobile phone.</b></p>
								<ol>
									<li>Dial <b>*989#</b> to go to WING menu</li>
									<li>Enter your WING Account No, and press Send</li>
									<li>Enter <b>“5”</b> and press Send</li>
									<li>Enter <b>“8”</b> and press Send</li>
									<li>Enter your Customer ID, and press Send</li>
									<li>Enter Amount in USD, and press Send</li>
									<li>Enter PIN code (4 digits) of your WING account, and press Send</li>
								</ol>
								<p>
									For full information on how to sign up for WING 
									account please go to your nearest WING outlet or visit www.wingmoney.com
								</p>
							</div>
						</div>
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