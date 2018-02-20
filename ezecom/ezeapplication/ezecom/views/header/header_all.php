<!--<header id="t3-header" class="container t3-header">
	<div class="row">
     <div class="col-xs-12 col-sm-4">
                    
         <!-- LANGUAGE SWITCHER -->
      <!--<div class="languageswitcherload">
        <div class="mod-languages">

	        <ul class="lang-inline">
						<li class="lang" dir="ltr" id="2" onclick="change_language(this.id)">
							 <img src="<?php //echo base_url()?>images/km.gif" alt="KhmerCambodia" title="KhmerCambodia">
			      </li>
				    <li class="lang" dir="ltr" id="3" onclick="change_language(this.id)">
				       <img src="<?php //echo base_url()?>images/zh.gif" alt="chinese" title="chinese">
			      </li>
				    <li class="lang" dir="ltr" id="1" onclick="change_language(this.id)">
				       <img src="<?php //echo base_url()?>images/en.gif" alt="English (UK)" title="English (UK)">
			      </li>
				  </ul>
        </div>
     </div>
      <!-- //LANGUAGE SWITCHER -->
      <!--</div>
                        
 <!-- LOGO -->
  <!--<div class="col-xs-12 col-sm-8 logo">
    <div class="logo-image">
      <a href="<?php //echo base_url(); ?>" title="EZECOM Cambodia Premuim Internet Service Provider">
        <img class="logo-img" src="<?php //echo base_url()?>images/ezecom-logo.png" alt="EZECOM Cambodia Premuim Internet Service Provider">
        <span>EZECOM Cambodia Premuim Internet Service Provider</span></a>
            <small class="site-slogan"></small>
    </div>
  </div>
  <!-- //LOGO -->
	<!--</div>


</header>
<style type="text/css">
  .lang{
    cursor: pointer;
  }
</style>

<!-- Top Navigation -->

<div class="container-fluid">
	<div class="container">
		<div class="row" style="padding:15px 0">
			<div class="col-md-6 col-xs-6">
				<a href="<?php echo base_url(); ?>" title="EZECOM Cambodia Premuim Internet Service Provider">
					<img class="img-responsive text-middle" src="<?php echo base_url()?>images/ezecom-logo.png" alt="EZECOM Cambodia Premuim Internet Service Provider">
				</a>
			</div>
			<div class="col-md-6 col-xs-6">
				<div class="text-right">
					<span><img src="<?php echo base_url()?>images/flags/kh.png" id="2" onclick="change_language(this.id)" alt="Khmer" title="Khmer"></span>
					<span><img src="<?php echo base_url()?>images/flags/en.png" id="1" onclick="change_language(this.id)" alt="English" title="English"></span>
					<span><img src="<?php echo base_url()?>images/flags/ch.png" id="3" onclick="change_language(this.id)" alt="Chinese" title="Chinese"></span>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function change_language(id){
    var base_url= "<?php echo base_url() ?>";
	$.ajax({
		type:"POST",
		url: base_url+ "set_session_lang",
		data:{id:id},
		success:function(dta)
		{
		  window.location.reload();
		}
	});
  }
</script>
