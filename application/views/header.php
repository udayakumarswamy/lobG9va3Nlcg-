<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fashionoo :: Listing</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/layout.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/zoomer.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>

  	<!--signin modal starts-->
  	<?php if(!$this->session->userdata('uid')): ?>
  	<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-lg">
  			<div class="modal-content modal-wrap">
  				<div class="modal-header">
  					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
  						<img src="<?php echo base_url();?>assets/images/close.png"></span>
  					</button>
  				</div>
  				<div class="col-md-6 login-main">
  					<h2>Login In</h2>
  					<form accept-charset="" action="" class=""  method="">
  						<div class='row'>
  							<div class='col-xs-12 form-group required'>
  								<label class='control-label'>E-mail ID</label>
  								<input class='form-control' type='text' name="login_email" id="login_email">
  							</div>
  						</div>
  						<div class='row'>
  							<div class='col-xs-12 form-group required'>
  								<label class='control-label'>Password</label>
  								<input class='form-control' type="password" name="login_pass" id="login_pass">
  							</div>
  						</div>
  						<div class='col-xs-12 form-group'>
  							<button type="submit" id="login_submit" name="login_submit" class="submit">Submit</button>
  						</div>
  					</form>
  				</div>

  				<div class="col-md-6 signup-main">
  					<h2>No Account yet? Register.</h2>
  					<form accept-charset="" action="" class=""  method="">
  						<div class='row'>
  							<div class='col-xs-12 form-group required'>
  								<label class='control-label'>Full Name</label>
  								<input class='form-control' type='text'>
  							</div>
  						</div>
  						<div class='row'>
  							<div class='col-xs-12 form-group required'>
  								<label class='control-label'>E-mail ID</label>
  								<input class='form-control' type='text'>
  							</div>
  						</div>
  						<div class='row'>
  							<div class='col-xs-12 form-group required'>
  								<label class='control-label'>Password</label>
  								<input class='form-control' type="password">
  							</div>
  						</div>
  						<div class='col-xs-12 form-group'>
  							<button class="submit">Submit</button>
  						</div>
  					</form>
  				</div>
  				<div class="clearfix"></div>
  			</div>
  		</div>
  	</div>
  	<?php endif; ?>
  	<!-- signin modal ends-->

  	<!-- head top starts--> 
  	<div class="container-fluid head-top">
  		<div class="container">
  			<div class="col-md-6 head-left no-pad">
  				<ul>
  					<!-- <li>(855) 255 - 5011</li>-->
  				</ul>
  			</div>

  			<div class="col-md-6">
  				<nav class="navbar">
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  							<span class="sr-only">Toggle navigation</span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  						</button>
  					</div>

  					<?php if(!$this->session->userdata('uid')): ?>
  					<!-- Collect the nav links, forms, and other content for toggling -->
  					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  						<ul class="nav navbar-nav navbar-right top-menu">
  							<li><a href="#" data-toggle="modal" data-target="#LoginModal">Login</a></li>
  							<li>
  								<div class="ui-group-buttons">
  									<button type="button" class="btn userbtn btn-xs" data-toggle="modal" 
  								data-target="#LoginModal">Signup As User</button>
  									<div class="or or-xs"></div>
  									<button type="button" class="btn desbtn btn-xs" data-toggle="modal" 
  								data-target="#LoginModal">Signup As Designer</button>
  								</div>
  							</li>
  						</ul>
  					</div><!-- /.navbar-collapse -->
  					<?php else: ?>
  					<!-- Collect the nav links, forms, and other content for toggling -->
  					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  						<ul class="nav navbar-nav navbar-right top-menu">
  							<li><a href="<?php echo base_url('user/logout'); ?>">Logout</a></li>
  						</ul>
  					</div><!-- /.navbar-collapse -->
  					<?php endif; ?>
  				</nav>
  			</div>
  		</div>
  	</div>
  	<!--head top end-->

  	<!-- slider starts -->
  	<div id="masterhead">
  		<div class="container-fluid no-pad">
  			<div class="menu-main">
  				<nav class="navbar">
  					<div class="container">
  						<!-- Brand and toggle get grouped for better mobile display -->
  						<div class="navbar-header">
  							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  								<span class="sr-only">Toggle navigation</span>
  								<span class="icon-bar"></span>
  								<span class="icon-bar"></span>
  								<span class="icon-bar"></span>
  							</button>
  							<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></a>
  						</div>

  						<!-- Collect the nav links, forms, and other content for toggling -->
  						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  							<ul class="nav navbar-nav navbar-right">
  								<li class="active"><a href="<?php echo base_url(); ?>looks">get the look <span class="sr-only">(current)</span></a></li>
  								<li><a href="<?php echo base_url(); ?>products">shop</a></li>
  								<li><a href="#">top offers</a></li>
  								<li><a href="#">how it works</a></li>
  								<li><a href="#">blog</a></li>
  								<form class="navbar-form navbar-left" role="search" action="">
  									<div class="form-group">
  										<input type="text" name="s" id="s" class="form-control menu-search" placeholder="Search" value="<?php if(isset($_GET['s'])) { echo strip_tags($_GET['s']); } ?>">
  									</div>
  								</form>
  							</ul>
  						</div><!-- /.navbar-collapse -->
  					</div><!-- /.container-fluid -->
  				</nav>
  			</div>
