<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Varying Vagrant Vagrants</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="dashboard-custom/bootstrap/css/bootstrap.css" rel="stylesheet">
		<style>
		  body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		  }
		</style>
		<link href="dashboard-custom/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	</head>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">VVV</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="https://github.com/varying-vagrant-vagrants/vvv/">Repository</a></li>
							<li><a href="database-admin/">phpMyAdmin</a></li>
							<li><a href="memcached-admin/">phpMemcachedAdmin</a></li>
							<li><a href="opcache-status/opcache.php">Opcache Status</a></li>
							<li><a href="webgrind/">Webgrind</a></li>
							<li><a href="phpinfo/">PHP Info</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">

			<div class="row">
				<div class="span12 text-center">
					<h1>Varying Vagrant Vagrants</h1>
					<p>Varying Vagrant Vagrants is an evolving Vagrant configuration focused on WordPress development.</p>
				</div>
			</div>



			<!-- Example row of columns -->
			<!--
			<div class="row">
				<div class="span12 text-center">
					<h2>Stable</h2>
					<p><img width="150" src="dashboard-custom/wapuu/wapuu-archive/original-wapuu.png"/></p>
					<p>WordPress stable</p>

				</div>
			</div>
			-->

			<div class="row">
				<div class="span3 text-center">
					<h2>Stable</h2>
					<p>
						<a href="http://local.wordpress.dev/">
							<img width="40%" style="margin-top: 10%" src="dashboard-custom/wapuu/wapuu-archive/original-wapuu.png"/>
						</a>
					</p>
					<p>WordPress stable</p>

				</div>
				<div class="span3 text-center">
					<h2>Trunk</h2>
					<p>
						<a href="http://local.wordpress-trunk.dev/">
							<img width="50%" src="dashboard-custom/wapuu/wapuu-archive/scott-wapuu.png"/>
						</a>
					</p>
					<p>WordPress trunk</p>

				</div>
				<div class="span3 text-center">
					<h2>Develop</h2>
					<p>
						<a href="http://src.wordpress-develop.dev/">
							<img width="50%" src="dashboard-custom/wapuu/wapuu-archive/wct2013.png"/>
						</a>
					</p>
					<p>WordPress development files</p>

				</div>
				<div class="span3 text-center">
					<h2>Build</h2>
					<p>
						<a href="http://build.wordpress-develop.dev/">
							<img width="50%" src="dashboard-custom/wapuu/wapuu-archive/wct2012.png"/>
						</a>
					</p>
					<p>Grunt build of those development files</p>

				</div>
			</div>

			<?php
			function vvv_get_random_wapuu() {
				$files = glob('dashboard-custom/wapuu/wapuu-archive/*.png');
				$file = array_rand($files);
				return $files[ $file ];
			}
			?>

			<!--
			<div style="float: right; width: 300px; padding: 20px">
				<img src="<?php echo vvv_get_random_wapuu(); ?>"/>
			</div>
			-->
			<!--
			<ul>
				<li><a href="http://local.wordpress.dev/">http://local.wordpress.dev</a> for WordPress stable (www/wordpress-default)</li>
				<li><a href="http://local.wordpress-trunk.dev/">http://local.wordpress-trunk.dev</a> for WordPress trunk (www/wordpress-trunk)</li>
				<li><a href="http://src.wordpress-develop.dev/">http://src.wordpress-develop.dev</a> for trunk WordPress development files (www/wordpress-develop/src)</li>
				<li><a href="http://build.wordpress-develop.dev/">http://build.wordpress-develop.dev</a> for a Grunt build of those development files (www/wordpress-develop/build)</li>
			</ul>
			-->
			<!--
			<h2>WordPress Core</h2>

			<ul>
				<li><a href="https://make.wordpress.org/core/">https://make.wordpress.org/core/</a> for Make WordPress Core</li>
				<li><a href="https://core.trac.wordpress.org/browser">https://core.trac.wordpress.org/browser/</a> for Trac Browser</li>
			</ul>
			-->
		</div> <!-- /container -->

		<footer>
		<div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner">
			<ul class="nav">
				<li><a href="https://make.wordpress.org/core/">https://make.wordpress.org/core/</a> for Make WordPress Core</li>
				<!--<li><a href="https://core.trac.wordpress.org/browser">https://core.trac.wordpress.org/browser/</a> for Trac Browser</li>-->
			</ul>
			</div>
		</div>
		</footer>

		<!-- Le javascript -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="dashboard-custom/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>
