<?php // $Id$ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php print $head; ?>
  <title><?php print $title?></title>
  <?php print $styles; ?>
  <!--[if IE]>
    <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/css/ie.css" type="text/css">
  <![endif]-->
  <?php print $scripts; ?>
  
</head>
<body class="<?php print $body_classes; ?>">
  <div id="wrapper">
    <div id="header">
      <?php if ($site_name && $is_front): ?>
        <h1><a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>">
			<?php print $site_name;?>
		  </a></h1>
      <?php else: ?>
	    <div id="sitename">
		  <a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>">
		    <?php print $site_name;?>
		  </a>
		</div>
	  <?php endif; ?>
      <?php if ($site_slogan): ?>
	      <p><?php print $site_slogan; ?></p>
	  <?php endif; ?>
      <?php if ($header): ?>
        <div id="header-inner">
          <?php print $header; ?>
        </div>
      <?php endif; ?>
      <hr />
	  </div><!-- end #header -->
    
	  <div id="content">
		<div id="content-inner">
		  <?php if ($help || $messages): ?>
			<?php print $help; ?>
			<?php print $messages; ?>
		  <?php endif; ?> 
	      <?php if(!$is_front): ?>
		    <h1><?php print $title; ?></h1>
		  <?php endif; ?>
		  <?php if ($tabs): ?>
			<?php print $tabs; ?>
		  <?php endif; ?>
          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
			 </div>
		  <?php endif; ?>
		  <?php print $content; ?>
		  <?php if ($content_bottom): ?>
			<div id="content-bottom">
			  <?php print $content_bottom; ?>
			</div>
		  <?php endif; ?>
		</div><!-- end #content-inner -->
			
		<div id="sidebar">
			<?php if ($left): ?>
				<?php print $left; ?>
			<?php endif; ?>
		</div><!-- end #sidebar -->
		<div style="clear: both; height: 1px;"></div>
    </div><!-- end #conent -->
	  <div id="footer">
	    <?php if ($footer_message):?>
		  <p><?php print $footer_message; ?></p>
		<?php endif; ?> 
		<?php if ($footer): ?>
		  <div id="inner-footer">
			<?php print $footer; ?>
		  </div><!-- end #inner-footer -->
		<?php endif; ?>
	  </div><!-- end #footer -->
	</div><!-- end #wrapper -->
<?php print $closure; ?>
</body>
</html>
