		<div class="slideshow">
		<div id="slideshow" class="carousel slide carousel-fade" data-ride="carousel" 
		data-interval="3000">
		<div class="carousel-inner">
		<div class="item active">
		<img class="img-responsive" src="<?php echo base_url();?>assets/images/slide2.jpg" alt="First Slide">
		<div class="container">
		<div class="carousel-caption">
		<h1>Chic trends, latest inspirations in one place!</h1>
		<h3>Don’t let a few elite decide your personal style, put together something that’s uniquely yours with expert help!</h3>
		<a class="btn explore-btn" href="<?php echo base_url('looks'); ?>">Explore Now</a>
		</div>
		</div>
		</div><!-- /. Item Active -->
		<div class="item">
		<img class="img-responsive" src="<?php echo base_url();?>assets/images/slide1.jpg" alt="Second Slide">
		<div class="container">
		<div class="carousel-caption">
		<h1>Remove the Shackles – Experience Fashion Freedom</h1>
		<h3>Don’t be bound by other people’s sense of style, create your own!</h3>
		<a class="btn explore-btn" href="<?php echo base_url('looks'); ?>">Explore Now</a>
		</div>
		</div>
		</div><!-- /. Item -->
		<div class="item">
		<img class="img-responsive" src="<?php echo base_url();?>assets/images/slide3.jpg" alt="Second Slide">
		<div class="container">
		<div class="carousel-caption">
		<h1>Have passion for fashion? Follow us!</h1>
		<h3>Who says you can’t mix and match to create your own personal style? Our designers certainly don’t!</h3>
		<a class="btn explore-btn" href="<?php echo base_url('looks'); ?>">Explore Now</a>
		</div>
		</div>
		</div><!-- /. Item -->
		<div class="item">
		<img class="img-responsive" src="<?php echo base_url();?>assets/images/slide4.jpg" alt="Second Slide">
		<div class="container">
		<div class="carousel-caption">
		<h1>Every day is fashion show, make world your runaway!</h1>
		<h3>Discard the rules of fashion and walk your own path of style!</h3>
		<a class="btn explore-btn" href="<?php echo base_url('looks'); ?>">Explore Now</a>
		</div>
		</div>
		</div><!-- /. Item -->
		</div><!-- /. Carousel-Inner -->
		</div><!-- /# Slideshow .Carousel -->
		</div><!-- /. Slideshow -->
		</div><!-- /. Container -->
		</div><!-- /# Mastehead -->  
	<!--slider ends-->
	
	<!--categories-->
	<div class="container categories-main">
      <div class="col-md-4 caterogy-each">
	    <img src="<?php echo base_url();?>assets/images/men.jpg" class="img-responsive">
		<div class="category-text">
		<h3>men</h3>
		<div class="bluebtn"><a href="<?php echo base_url('looks?gender=male'); ?>">shop now</a></div>
		</div>
	  </div>
	  <div class="col-md-4 caterogy-each">
	    <img src="<?php echo base_url();?>assets/images/getlook.jpg" class="img-responsive">
		<div class="category-text">
		<h3>Our Looks</h3>
		<div class="pinkbtn"><a href="<?php echo base_url('looks'); ?>">Explore</a></div>
		</div>
	  </div>
	  <div class="col-md-4 caterogy-each">
	    <img src="<?php echo base_url();?>assets/images/women.jpg" class="img-responsive">
		<div class="category-text">
		<h3>women</h3>
		<div class="bluebtn"><a href="<?php echo base_url('looks?gender=female'); ?>">shop now</a></div>
		</div>
	  </div>	  
    </div>
	<!--categories-->
	
	
	<!-- trending products -->
	<h2 class="heads">trending Products</h2>
	<div class="container trending-wrap">
		<?php
		foreach ($tproducts as $key => $tproduct) {
		?>
		<a href="<?php echo base_url('product/'.$tproduct->p_id.'/'.url_title($tproduct->p_name));?>">
	  <div class="col-md-3 col-xs-6 trend-each">
        <div class="listimg">
		  <img data-original="<?php echo $tproduct->p_image; ?>" title="<?php echo $tproduct->p_name; ?>" alt="<?php echo $tproduct->p_name; ?>" class="lazy">
		</div>
		<h4><?php echo $tproduct->p_name; ?></h4>
		<div class="col-md-12 text-center">
		<?php if($tproduct->p_mrp > $tproduct->p_price): ?>
		<span class="mrp"><span class="webrupee">Rs.</span><?php echo $tproduct->p_mrp; ?></span>
		<?php endif; ?>
		<span class="aftrdsnt"><span class="webrupee">Rs.</span><?php echo $tproduct->p_price; ?></span></div>
	  </div>
		</a>
		<?php
		}
		?>
   </div>
	<!-- trending products -->
	
	<!--creators-->
	<h2 class="heads">the look creators</h2>
	<div class="container creators-wrap">
	  <div class="col-md-12" id="created-categ">
		  <ul>
			<li class="active"><a href="#page1">by popular designers</a></li>
		  </ul>
		</div>
	  
	  <!--by designers-->
	  <div id="page1" class="content">
	  <?php
      foreach ($pbd_looks as $key => $pbd_look) {
      ?>
	  <div class="col-md-3 created-each">
      <a href="<?php echo base_url('looks/view/'.$pbd_look['l_id'].'/'.url_title($pbd_look['l_title'])); ?>">
      <?php if(count($pbd_look['l_products']) == 5): ?>
	    <div class="pattern<?php echo count($pbd_look['l_products']); ?>">
	    	<div class="pattern5-left">
		  <ul>
		    <?php $i=1; foreach ($pbd_look['l_products'] as $key => $lp): ?>
			<li><img data-original="<?php echo $lp->p_image;?>" class="img-responsive lazy"></li>
			<?php if($i==3):  ?>
				</ul>
	    	</div>

	    	<div class="pattern5-right">
				<ul>
			<?php endif; $i++ ?>
			<?php endforeach; ?>
		  </ul>
	    	</div>
		</div>
      <?php else: ?>
	    <div class="pattern<?php echo count($pbd_look['l_products']); ?>">
		  <ul>
		    <?php foreach ($pbd_look['l_products'] as $key => $lp): ?>
			<li><img data-original="<?php echo $lp->p_image;?>" class="img-responsive lazy"></li>
			<?php endforeach; ?>
		  </ul>
		</div>
      <?php endif; ?>
	  </a>
		<div class="created-by">
      	<a href="<?php echo base_url('designer/'.$pbd_look['l_uid'].'/'.url_title($pbd_look['l_user'])); ?>">
		<div class="created-image"><img data-original="<?php echo base_url();?>uploads/designers/<?php echo ($pbd_look['l_user_image'] == '') ? 'default.jpg' : $pbd_look['l_user_image']; ?>" class="img-responsive lazy"></div>
      	</a>
      	<a href="<?php echo base_url('looks/view/'.$pbd_look['l_id'].'/'.url_title($pbd_look['l_title'])); ?>">
		<h3><?php echo $pbd_look['l_title']; ?></h3>
		</a>
		<div class="col-md-12 clearfix text-center">
		<?php if($pbd_look['l_mrp'] != '' && $pbd_look['l_mrp'] > 0): ?>
		<span class="mrp"><span class="webrupee">Rs.</span><?php echo $pbd_look['l_mrp']; ?></span>
		<?php endif; ?>
		<span class="aftrdsnt"><span class="webrupee">Rs.</span><?php echo $pbd_look['l_price']; ?></span></div>
      	<a href="<?php echo base_url('designer/'.$pbd_look['l_uid'].'/'.url_title($pbd_look['l_user'])); ?>">
		<h4>By <?php echo $pbd_look['l_user']; ?></h4>
		</a>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	<?php
	}
	?>
	</div>
	<!-- by designers-->
	<?php if(count($pbd_looks)): ?>
    <div class="col-md-12 view"><a href="<?php echo base_url('looks'); ?>">View All Looks created by designers [...]</a></div>
	<?php endif; ?>
	</div>
	<!--creators-->
	
	<?php if($tdesigners[0]->user_id != ''): ?>	
	<!--top designers carousel-->
	<div class="carousel-designers">
		<div class="container text-center">
		<div class="carousel-head"><a href="<?php echo base_url('designers'); ?>">top designers</a></div>
			<div class="row">
				<div id="carousel-reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<?php
					for ($i=0, $j=0; $i < count($tdesigners); $i++) { 
						?>
						<div class="item active">
						  <ul>
						  <?php
						  foreach ($tdesigners as $key => $tdesigner) {
						  	?>
						  	<a href="<?php echo base_url('designer/'.$tdesigner->user_id.'/'.url_title($tdesigner->user_fname)); ?>">
							<li class="col-md-3 col-sm-6">
							   <div class="designer">
								<!-- <div class="count girl">02</div> -->
								<div class="designer-image">
								   <img src="<?php echo base_url();?>uploads/designers/<?php echo ($tdesigner->user_image == '') ? 'default.jpg' : $tdesigner->user_image; ?>" class="img-responsive">
								</div>
								<h3><?php echo $tdesigner->user_fname; ?></h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+<?php echo $tdesigner->l_count; ?></strong> Looks Created</h4>
							  </div>
							</li>		
							</a>				  	
						  	<?php
						  	$j++;
						  	if($j%4 == 0) {
						  		break;
						  	}
						  }
						  	if($i<=$j) {
						  		break;
						  	}
						  ?>
						  </ul>
						</div>   
					<?php
					}
					?>                
					</div>
					<a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
						<img src="<?php echo base_url();?>assets/images/left.png" width="20">
					</a>
					<a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
						<img src="<?php echo base_url();?>assets/images/right.png" width="20">
					</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--top designers carousel-->
	<?php endif; ?>
	
	<!--get look-->
	<div class="getlook-wrap">
	 <div class="getlook-main">
	   <h1>get the look</h1>
	   <h3>Browse through a collection of stylish outfits for different occasions,<br>
	   carefully hand picked by our expert stylists.</h3>
	   <a href="<?php echo base_url('personalize'); ?>">Recommend a look</a>
	 </div>
	</div>
	<!--get look-->		