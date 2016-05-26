<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>


<!DOCTYPE html>
<html lang="en">

	<head>
	    <?php echo $this->Html->charset(); ?>

	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

		<title>
			Spotifind :: 
			<?php echo $this->fetch('title'); ?>
		</title>
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css(
				array(
					'bootstrap.min',
					'metisMenu.min',
					'sb-admin-2',
					'font-awesome.min',
					'own_classes'
				)
			);

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>

	    <div id="wrapper">

	        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <?php echo $this->Html->link($this->Html->image('spotify_logo.png', array('id' => 'logo-image')), '/', array('escape' => false, 'class' => 'navbar-brand'));?>
	            </div>
	        </nav>

	        <div id="page-wrapper">

	        	<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>

	        </div>
	    </div>

	    <?php 
		    echo $this->Html->script(
		    	array(
		    		'jquery.min',
		    		'bootstrap.min',
		    		'metisMenu.min',
		    		'app_functions'
				)
		    );
	    ?>

	</body>
</html>