
		<div class="slideshow">
		<div id="slideshow" class="carousel slide carousel-fade" data-ride="carousel" 
		data-interval="3000">
		<div class="carousel-inner">
		<div class="item active">
		<img class="img-responsive" src="<?php echo base_url();?>assets/images/slide1.jpg" alt="First Slide">
		<div class="container">
		<div class="carousel-caption">
		<h1>Fashion Inspired By Me</h1>
		<h3>Find Designers and Consultants</h3>
		<button class="btn explore-btn">Shop Now</button>
		</div>
		</div>
		</div><!-- /. Item Active -->
		<div class="item">
		<img class="img-responsive" src="<?php echo base_url();?>assets/images/slide2.jpg" alt="Second Slide">
		<div class="container">
		<div class="carousel-caption">
		<h1>Fashion Inspired By Me</h1>
		<h3>Find Designers and Consultants</h3>
		<button class="btn explore-btn">shop Now</button>
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
		<div class="bluebtn"><a href="#">shop now</a></div>
		</div>
	  </div>
	  <div class="col-md-4 caterogy-each">
	    <img src="<?php echo base_url();?>assets/images/getlook.jpg" class="img-responsive">
		<div class="category-text">
		<h3>Our Looks</h3>
		<div class="pinkbtn"><a href="#">Checkout</a></div>
		</div>
	  </div>
	  <div class="col-md-4 caterogy-each">
	    <img src="<?php echo base_url();?>assets/images/women.jpg" class="img-responsive">
		<div class="category-text">
		<h3>women</h3>
		<div class="bluebtn"><a href="#">shop now</a></div>
		</div>
	  </div>	  
    </div>
	<!--categories-->
	
	
	<!-- trending products -->
	<h2>trending Products</h2>
	<div class="container trending-wrap">
		<?php
		foreach ($tproducts as $key => $tproduct) {
		?>
		<a href="<?php echo base_url('product/'.$tproduct->p_id);?>">
	  <div class="col-md-3 trend-each">
        <div class="listimg">
		  <img src="<?php echo $tproduct->p_image; ?>" title="<?php echo $tproduct->p_name; ?>" alt="<?php echo $tproduct->p_name; ?>" class="img-responsive">
		</div>
		<h4><?php echo $tproduct->p_name; ?></h4>
		<div class="col-md-12 text-center"><span class="mrp"><?php echo $tproduct->p_mrp; ?></span>
		<span class="aftrdsnt"><?php echo $tproduct->p_price; ?></span></div>
	  </div>
		</a>
		<?php
		}
		?>
   </div>
	<!-- trending products -->
	
	<!--creators-->
	<h2>the look creators</h2>
	<div class="container creators-wrap">
	  <div class="col-md-12" id="created-categ">
		  <ul>
			<li class="active"><a href="#page1">by popular designers</a></li>
			<li><a href="#page2">by popular users</a></li>		
		  </ul>
		</div>
	  
	  <!--by designers-->
	  <div id="page1" class="content">
	  <div class="col-md-3 created-each">
	    <div class="pattern6">
		  <ul>
		    <li><img src="<?php echo base_url();?>assets/images/trending/t1.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t2.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t6.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t8.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t3.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive"></li>
		  </ul>
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="pattern3">
		  <ul>
			<li><img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t2.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t6.jpg" class="img-responsive"></li>
		  </ul>
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="pattern5">
		    <div class="pattern5-left">
			<ul>
		    <li><img src="<?php echo base_url();?>assets/images/trending/t1.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t2.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t6.jpg" class="img-responsive"></li>
			</ul>
			</div>
			<div class="pattern5-right">
			<ul>
			<li><img src="<?php echo base_url();?>assets/images/trending/t8.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t7.jpg" class="img-responsive"></li>
		    </ul>	
			</div>
		  
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d2.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="pattern4">
		  <ul>
		    <li><img src="<?php echo base_url();?>assets/images/trending/t1.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t2.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t6.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t8.jpg" class="img-responsive"></li>
		  </ul>
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="pattern3">
		  <ul>
			<li><img src="<?php echo base_url();?>assets/images/trending/t2.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t6.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t8.jpg" class="img-responsive"></li>
		  </ul>
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d2.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	<div class="col-md-3 created-each">
	    <div class="pattern2">
		  <ul>
		    <li><img src="<?php echo base_url();?>assets/images/trending/t1.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t2.jpg" class="img-responsive"></li>
		  </ul>
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d2.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	  <div class="col-md-3 created-each">
	    <div class="pattern3">
		  <ul>
		    <li><img src="<?php echo base_url();?>assets/images/trending/t1.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t2.jpg" class="img-responsive"></li>
		  </ul>
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d2.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="pattern4">
		  <ul>
		    <li><img src="<?php echo base_url();?>assets/images/trending/t1.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t2.jpg" class="img-responsive"></li>
			<li><img src="<?php echo base_url();?>assets/images/trending/t6.jpg" class="img-responsive"></li>
		  </ul>
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	</div>
	<!-- by designers-->
	
	 <!--by users-->
	  <div id="page2" class="content" style="display: none;">
	  <div class="col-md-3 created-each">
	    <div class="listimg">
		  <img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive">
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the boy next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="listimg">
		  <img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive">
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="listimg">
		  <img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive">
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="listimg">
		  <img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive">
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="listimg">
		  <img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive">
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	<div class="col-md-3 created-each">
	    <div class="listimg">
		  <img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive">
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	  <div class="col-md-3 created-each">
	    <div class="listimg">
		  <img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive">
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	
	 <div class="col-md-3 created-each">
	    <div class="listimg">
		  <img src="<?php echo base_url();?>assets/images/trending/t4.jpg" class="img-responsive">
		</div>
		<div class="created-by">
		<div class="created-image"><img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive"></div>
		<h3>the girl next door</h3>
		<div class="col-md-12 clearfix text-center"><span class="mrp">2300</span>
		<span class="aftrdsnt">2000</span></div>
		<h4>By Aneel Kaushik</h4>
	  </div>
	  <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
	</div>
	</div>
	<!--by users-->
    <div class="col-md-12 view"><a href="#">View All Looks created by designers [599]</a></div>
	</div>
	<!--creators-->
	
		
	<!--top designers carousel-->
	<div class="carousel-designers">
		<div class="container text-center">
		<div class="carousel-head"><a href="#">top designers</a></div>
			<div class="row">
				<div id="carousel-reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item next left">
						  <ul>
							<li class="col-md-3 col-sm-6">
							   <div class="designer">
								<div class="count girl">02</div>
								<div class="designer-image">
								   <img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive">
								</div>
								<h3>Rishab Gupta</h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+23</strong> Looks Created</h4>
							  </div>
							</li>
							 <li class="col-md-3 col-sm-6">
							   <div class="designer">
								<div class="count">02</div>
								<div class="designer-image">
								   <img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive">
								</div>
								<h3>Ashitha Rao</h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+50</strong> Looks Created</h4>
							  </div>
							</li>
							<li class="col-md-3 col-sm-6">
							   <div class="designer">
								<div class="count">02</div>
								<div class="designer-image">
								   <img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive">
								</div>
								<h3>James Duke</h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+50</strong> Looks Created</h4>
							  </div>
							</li>
							<li class="col-md-3 col-sm-6">
							   <div class="designer">
								<div class="count girl">02</div>
								<div class="designer-image">
								   <img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive">
								</div>
								<h3>Rajesh Varma</h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+50</strong> Looks Created</h4>
							  </div>
							</li>
							</ul>
						</div>
						
						<div class="item active left">
						  <ul>
							<li class="col-md-3 col-sm-6">
							   <div class="designer">
								<div class="count girl">02</div>
								<div class="designer-image">
								   <img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive">
								</div>
								<h3>Rishab Gupta</h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+23</strong> Looks Created</h4>
							  </div>
							</li>
							 <li class="col-md-3 col-sm-6">
							   <div class="designer">
								<div class="count">02</div>
								<div class="designer-image">
								   <img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive">
								</div>
								<h3>Ashitha Rao</h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+50</strong> Looks Created</h4>
							  </div>
							</li>
							<li class="col-md-3 col-sm-6">
							   <div class="designer">
								<div class="count">02</div>
								<div class="designer-image">
								   <img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive">
								</div>
								<h3>James Duke</h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+50</strong> Looks Created</h4>
							  </div>
							</li>
							<li class="col-md-3 col-sm-6">
							   <div class="designer">
								<div class="count girl">02</div>
								<div class="designer-image">
								   <img src="<?php echo base_url();?>assets/images/d3.jpg" class="img-responsive">
								</div>
								<h3>Rajesh Varma</h3>
								<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
								<h4><strong>+50</strong> Looks Created</h4>
							  </div>
							</li>
							</ul>
						</div>                   
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
	<!--top designers carousel-->
	
	<!--get look-->
	<div class="getlook-wrap">
	 <div class="getlook-main">
	   <h1>get the look</h1>
	   <h3>Browse through a collection of stylish outfits for different occasions,<br>
	   carefully hand picked by our expert stylists.</h3>
	   <button>shop now</button>
	 </div>
	</div>
	<!--get look-->	

	<!--ecom-->
	<div class="container-fluid">
	  <div class="container ecom-main">
		<div class="col-md-12">
                <div id="Carousel" class="carousel slide">              
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                </ol>              
                <!-- Carousel items -->
                <div class="carousel-inner">     
                <div class="item active">
                	<div class="row">
                	  <?php foreach ($providers as $key => $provider): ?>
                		<div class="col-md-3"><a href="#"><img src="<?php echo $provider->provider_image; ?>" alt="<?php echo $provider->provider_name; ?>" title="<?php echo $provider->provider_name; ?>" style="max-width:100%;"></a></div>
                	  <?php endforeach; ?>
                	</div><!--.row-->
                </div><!--.item-->
			</div>  
		</div>
	</div>
	</div>
	</div>
	<!--ecom-->
	
	