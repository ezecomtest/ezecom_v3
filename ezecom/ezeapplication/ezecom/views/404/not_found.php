<!DOCTYPE HTMl>
<html>
<head>
<link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/gif" sizes="16x16">
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/404/style.css" type="text/css" media="all" />
 <link href='http://fonts.googleapis.com/css?family=Strait' rel='stylesheet' type='text/css'>
 <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/animate.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/icheck/flat/green.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
</head>
<body style="background:#7961A9; " onload="redirect()">
	
			<div class="wrap">
				<h1><img src="<?php echo base_url(); ?>images/ezecom-logo.png"></h1>
				<div class="banner"><img src="<?php echo base_url(); ?>images/fuel-404-logo.png" alt="" /></div>
				<div class="search" style="text-align: center;">
					<button class="btn btn-primary" style="background: #fff;color:#7961A9;border:1px solid #fff;" onclick="url();">Back Home</button>
				</div>
			<div class="copy" style="color:#fff;">
	    		<p>© 2016 Ezecom Co., Ltd. All Rights Reserved</p>
	    	</div>
			</div>

<script type="text/javascript">
	
	function url(){
		window.location.href = "<?php echo base_url(); ?>";
	}

    $(document).ready(function() {
        $("body").bind("contextmenu",function(){
            return false;
            });
     } );

    function redirect(){
    	 setTimeout("location.href = 'https://www.ezecom.com.kh/';", 1500);
    }
</script>


	    	
</body>
</html>    

