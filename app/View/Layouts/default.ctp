<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php
		if($this->fetch('title')):
			echo $this->fetch('title');
		else:
			echo __('Titre');
		endif;
		?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');

		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css');
		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css');
		echo $this->Html->css('//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.min.css');
		
		echo $this->Html->css('style');
		echo $this->fetch('css');
	?>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo $this->Html->script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'); ?>
      <?php echo $this->Html->script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'); ?>
    <![endif]-->

</head>
<body>
	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
    </div><!-- /.container -->

	<?php
		echo $this->Html->script('//code.jquery.com/jquery-1.10.2.min.js');
		echo $this->Html->script('//code.jquery.com/ui/1.10.4/jquery-ui.min.js');
		echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js');

		echo $this->fetch('script');
		echo $this->Js->writeBuffer();
	?>
</body>
</html>
