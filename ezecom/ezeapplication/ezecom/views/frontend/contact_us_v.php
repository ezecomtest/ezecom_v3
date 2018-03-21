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
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img  class="img-responsive" src="<?php echo base_url()?>images/contact/contact.jpg"/>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="wrapper-text">
					<p> Need some text <p>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>contact-us#Head" data-toggle="tab" data-id="Head">
					<div class="Head active-now">
						<p class="text-position">Head office Phnom Penh</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>contact-us#customer-service" data-toggle="tab" data-id="customer-service">
					<div class="customer-service">
						<p class="text-position">Customer Services and <br/>Sales Office, Phnom Penh</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>contact-us#Siem-Reap" data-toggle="tab" data-id="Siem-Reap">
					<div class="Siem-Reap">
						<p class="text-position">Siem Reap Branch</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>contact-us#Sihanouk" data-toggle="tab" data-id="Sihanouk">
					<div class="Sihanouk">
						<p class="text-position">Sihanoukville Branch</p>
					</div>
				</a>
			</div>
		</div>
		<div class="row mg-bt">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>contact-us#Koh-Kong" data-toggle="tab" data-id="Koh-Kong">
					<div class="Koh-Kong">
						<p class="text-position">Koh Kong Branch</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>contact-us#Battambang" data-toggle="tab" data-id="Battambang">
					<div class="Battambang">
						<p class="text-position">Battambang Branch</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>contact-us#Bavet" data-toggle="tab" data-id="Bavet">
					<div class="Bavet">
						<p class="text-position">Bavet Branch</p>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a href="<?=base_url();?>contact-us#Poipet" data-toggle="tab" data-id="Poipet">
					<div class="Poipet">
						<p class="text-position">Poipet Branch</p>
					</div>
				</a>
			</div>
		</div>
		
		<div class="tab-content">
			<div id="Head" class="tab-pane rl_tabs-pane nn_tabs-pane active payment-tap">
				<div class="row"><h1 class="text-center top-header">Head Office (Phnom Penh)</h1></div>
				<div class="row contact-bg mg-bt">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="address">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-home.png"/>
							<p>
								<b>#7D Russian Boulevard Cambodia Chamber of Commerce Building, Phnom Penh, Cambodia</b>
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bd-right">
						<div class="phone">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-phone.png"/>
							<p>
								<b>Tel : 023 888 181</b> <br/>
								<b>Fax : 023 882 961</b>
							</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="clock">
							<img  class="img-responsive" align="left" src="<?php echo base_url()?>images/contact/icon-time.png"/>
							<p>
								<b>Customer Service Hours:</b> <br/>
								<b>Monday - Friday @ 7:30AM - 5:30PM</b>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wrapper-content">
							<div id="map-canvas">
							</div>
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
</script>
<!-- BACK TO TOP BUTTON -->

<script type="text/javascript">
$(document).ready(function () {
	$('a .Head').click(function(e) {
		
		$('a .customer-service').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Sihanouk').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .customer-service').click(function(e) {
		
		$('a .Head').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Sihanouk').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Siem-Reap').click(function(e) {
		
		$('a .Head').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Sihanouk').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Sihanouk').click(function(e) {
		
		$('a .Siem-Reap').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Head').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Koh-Kong').click(function(e) {
		
		$('a .Sihanouk').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Battambang').click(function(e) {
		
		$('a .Sihanouk').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Poipet').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Head').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Bavet').click(function(e) {
		
		$('a .Sihanouk').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Head').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
	
	$('a .Poipet').click(function(e) {
		
		$('a .Sihanouk').removeClass('active-now');
		$('a .customer-service').removeClass('active-now');
		$('a .Battambang').removeClass('active-now');
		$('a .Bavet').removeClass('active-now');
		$('a .Siem-Reap').removeClass('active-now');
		$('a .Koh-Kong').removeClass('active-now');
		$('a .Head').removeClass('active-now');
		$(this).addClass('active-now');
		e.preventDefault();
	});
}); 
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN_KbE6yYEz98eIIRzWacJEm-kkm6K__8" type="text/javascript"></script>
<script>
	  var map;
      var centerPos = new google.maps.LatLng(11.562108,104.888535);
      var zoomLevel = 15;
      //var image = "<?php base_url()?>images/livetraffic/pin-map.png";

      function initialize() {
        var mapOptions = {
          center: centerPos,
          zoom: zoomLevel
        };
        map = new google.maps.Map( document.getElementById("map-canvas"), mapOptions );
		var base_url = "<?php echo base_url() ?>contact-us";
        var locations = [
          ['RATANA PLAZA', 11.56248592, 104.87130404,base_url,11],
          ['TUOLKORK',11.5695493, 104.90087271,base_url,7],
          ['STEUNGMEANCHEY',11.54665574, 104.89712834,base_url,12],
		  ['KBAL THNOL',11.52963677, 104.93106902,base_url,2],
		  ['SPEAN DEAK CHOMKA DONG',11.52611512, 104.88751262,base_url,17],
		  ['RIVERSIDE',11.56928653, 104.93023217,base_url,3],
		  ['CHAOM CHAO',11.53538697, 104.83038962,base_url,8],
		  ['OLYMPIC',11.55767179, 104.90819648,base_url,15],
		  ['CAMKO CYCLE',11.59244625, 104.89617616,base_url,6],
		  ['POCHENTONG',11.55360389, 104.8441574,base_url,16],
		  ['CHBAR OMPOV',11.53202307, 104.93706107,base_url,18],
		  ['RUSSIA HOSPITAL',11.54364938, 104.90262151,base_url,19],
		  ['NOKIA INTERSECTION (271)',11.55294167, 104.88722563,base_url,20],
		  ['WAT SONSOMKOSAL (271)',11.53133977, 104.91374195,base_url,21],
		  ['MONDIAL CENTER',11.557861, 104.9013555,base_url,22]
		  
		  
        ];
        
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map,
            url:locations[i][3],
			cam_id:locations[i][4]
            
          });

        /*   google.maps.event.addListener(marker, 'click', function() {
			  var id = this.cam_id;
			  var name = this.title;
			  // reload camera location by id and name.
			  display_camera(id,name);
          });
		  */
        }

      }
      
	google.maps.event.addDomListener(window, 'load', initialize);
</script>