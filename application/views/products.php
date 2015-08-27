	
<div class="slideshow">
	<div id="slideshow" class="carousel slide carousel-fade" data-ride="carousel" 
	data-interval="3000">
	<div class="carousel-inner">
		<div class="item active">
			<img class="img-responsive lazy" data-original="<?php echo base_url();?>assets/images/listing.jpg" alt="First Slide">
		</div><!-- /. Item Active -->
	</div><!-- /. Carousel-Inner -->
</div><!-- /# Slideshow .Carousel -->
</div><!-- /. Slideshow -->
</div><!-- /. Container -->
</div><!-- /# Mastehead -->  
<!--slider ends-->

<div class="filters-top-wrap">
	<div class="container">
		<div class="row">
		<form action="" method="get">
			<div class="col-md-5"><input type="text" name="s" id="s_pdt" tabindex="1"
				class="form-control" placeholder="Search by Product, Look and Designer" value="<?php if(isset($_GET['s'])) { echo strip_tags($_GET['s']); } ?>"></div>
				<div class="col-md-2">
					<div class="dropdown dropdown-dark">
						<select name="gender" id="s_gen" class="dropdown-select">
							<option value="">Gender</option>
							<?php
							$genders = array('Male'=>'Male', 'Female'=>'Female');
							foreach ($genders as $key => $gender) {
								?>
							<option value="<?php echo $key; ?>" <?php if(isset($_GET['gender'])) {echo ($_GET['gender'] == $key) ? 'selected="selected"' : ''; } ?> ><?php echo $gender; ?></option>
								<?php
							}
							?>
						</select>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="dropdown dropdown-dark">
						<select name="category" id="s_cat" class="dropdown-select">
							<option value="">Category</option>
							<?php
							foreach ($pcategories as $key => $pcategory) {
								?>
								<option value="<?php echo $pcategory->pc_id; ?>" <?php if(isset($_GET['category'])) { echo ($_GET['category'] == $pcategory->pc_id) ? 'selected="selected"' : ''; } ?>><?php echo $pcategory->pc_name; ?></option>
								<?php
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-2"><button type="submit" id="s_srh" name="search">Search</button></div>
				</form>
			</div>
		</div> 
	</div>
	<!-- filtered products -->
	
	<h2>Products</h2>
	<div class="container products-wrap">
		<div class="row">
			<div class="col-md-3 clearfix filters-left"> 
				<?php
				if(count($s_pcategories)):
					$pcategories = $s_pcategories;
				?>
				<h4>by Categories</h4>
				<ul class="f_cat">
					<?php
					foreach ($pcategories as $key => $pcategory) {
						?>
						<li><input id='f_cat<?php echo $pcategory->pc_id; ?>' type='checkbox' name="f_cat" value="<?php echo $pcategory->pc_id; ?>" onclick="pf_search();" />
							<label for='f_cat<?php echo $pcategory->pc_id; ?>'><span></span><?php echo $pcategory->pc_name; ?>
							</label>
						</li>
						<?php
					}
					?>
				</ul>
				<?php endif; ?>
				<h4>By Provider</h4>
				<ul class="f_prov">
					<?php
					foreach ($providers as $key => $provider) {
						?>
						<li><input id='f_prov<?php echo $provider->provider_id; ?>' type='checkbox' name="f_prov" value="<?php echo $provider->provider_id; ?>" onclick="pf_search();" />
							<label for='f_prov<?php echo $provider->provider_id; ?>'><span></span><?php echo $provider->provider_name; ?>
							</label>
						</li>
						<?php
					}
					?>
				</ul>
				
				<!-- <div id="budget-wrapper">
					<h4>Budget <input type="text" id="slider-display" name="slider-display" value="0" /></h4>
					<div id="slider"></div>
				</div> -->
				
				<!-- <h4>by Color &nbsp;<select name="colorpicker-picker-longlist">
					<option value="#ac725e">#ac725e</option>
					<option value="#d06b64">#d06b64</option>
					<option value="#f83a22">#f83a22</option>
					<option value="#fa573c">#fa573c</option>
					<option value="#ff7537">#ff7537</option>
					<option value="#ffad46">#ffad46</option>
					<option value="#42d692">#42d692</option>
					<option value="#16a765">#16a765</option>
					<option value="#7bd148">#7bd148</option>
					<option value="#b3dc6c">#b3dc6c</option>
					<option value="#fbe983">#fbe983</option>
					<option value="#fad165">#fad165</option>
					<option value="#92e1c0">#92e1c0</option>
					<option value="#9fe1e7">#9fe1e7</option>
					<option value="#9fc6e7">#9fc6e7</option>
					<option value="#4986e7">#4986e7</option>
					<option value="#9a9cff">#9a9cff</option>
					<option value="#b99aff">#b99aff</option>
					<option value="#c2c2c2">#c2c2c2</option>
					<option value="#cabdbf">#cabdbf</option>
					<option value="#cca6ac">#cca6ac</option>
					<option value="#f691b2">#f691b2</option>
					<option value="#cd74e6">#cd74e6</option>
					<option value="#a47ae2">#a47ae2</option>
				</select></h4>
				 -->
				
				<!-- 
				<h4>Size</h4>
				<div class="sizes clearfix">
					<input type="radio" name="size" id="small" value="small" checked="checked" /> 
					<label for="small">S</label>
					<input type="radio" name="size" id="medium" value="medium" />     
					<label for="medium">M</label>
					<input type="radio" name="size" id="large" value="large" />     
					<label for="large">L</label>
					<input type="radio" name="size" id="xlarge" value="xlarge" />     
					<label for="xlarge">XL</label>
					<input type="radio" name="size" id="xxlarge" value="xxlarge" />     
					<label for="xlarge">XXL</label>
				</div> -->
				<div class="clearfix"></div>
			</div>
			<!-- filters-left end-->
			
			<div class="col-md-9" id="pdts_wrapper">
				<?php
				if(count($products)) {
				foreach ($products as $key => $product) {
					?>
					<a href="<?php echo base_url('product/'.$product->p_id);?>">
						<div class="col-md-3 col-xs-6 trend-each">
							<div class="listimg">
								<img data-original="<?php echo $product->p_image; ?>" title="<?php echo $product->p_name; ?>" alt="<?php echo $product->p_name; ?>" class="lazy">
							</div>
							<h4><?php echo $product->p_name; ?></h4>
							<div class="col-md-12 text-center">
								<?php if($product->p_mrp > $product->p_price):  ?>
								<span class="mrp"><span class="webrupee">Rs.</span><?php echo $product->p_mrp; ?></span>
								<?php endif; ?>
								<span class="aftrdsnt"><span class="webrupee">Rs.</span><?php echo $product->p_price; ?></span>
							</div>
						</div>
					</a>
					<?php
				}
				}
				else {
					echo "No Products found...";
				}
				?>
			</div>	  
		</div>
	</div>
</div>
<!-- trending products -->

	<?php if($tdesigners[0]->user_id != ''): ?>
	<!--top designers carousel-->
	<div class="carousel-designers">
		<div class="container text-center">
		<div class="carousel-head"><a href="#">top designers</a></div>
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
						  	<?php
						  	$j++;
						  	if($j%4 == 0) {
						  		break;
						  	}
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
	<!--top designers carousel-->
	<?php endif; ?>

<script type="text/javascript">
	function pf_search() {
		var f_cat = [];
		$('.f_cat input:checked').each(function() {
		    f_cat.push($(this).val());
		});

		var f_prov = [];
		$('.f_prov input:checked').each(function() {
		    f_prov.push($(this).val());
		});

		var s_input = {};
		s_input['f_cat'] = f_cat;
		s_input['f_prov'] = f_prov;

		$.ajax({
			type:"POST",
			url:'<?php echo base_url("products/pf_ajax");?>',
			data:s_input,
			dataType:"json",
			success: function(data){
				// console.log(data);
				generate_products(data);
			},
		  error: function(e) {
			//called when there is an error
			console.log(e.message);
		  }
		});
	}

	function ps_search () {
		var s_pdt = $('#s_pdt').val();
		var s_gen = $('#s_gen').val();
		var s_cat = $('#s_cat').val();
		
		var s_input = {};
		s_input['s_pdt'] = s_pdt;
		s_input['s_gen'] = s_gen;
		s_input['s_cat'] = s_cat;

		console.log(JSON.stringify(s_input));

		$.ajax({
			type:"POST",
			url:'<?php echo base_url("products/s_ajax");?>',
			data:s_input,
			dataType:"json",
			success: function(data){
				generate_products(data);
			},
		  error: function(e) {
			//called when there is an error
			console.log(e.message);
		  }
		});
	}

	function generate_products (products) {
		var content = '';
		if(products.length == 0) {
			content = 'No Products found...';
		}
		$.each(products, function(index, product){
			var base_url = '<?php echo base_url("product/");?>';
			content += '<a href="'+ base_url + '/' + product.p_id + '">'+
						'<div class="col-md-3 trend-each">'+
							'<div class="listimg">'+
								'<img data-original="'+product.p_image+'" title="'+product.p_name+'" alt="'+product.p_name+'" class="img-responsive lazy">'+
							'</div>'+
							'<h4>'+product.p_name+'</h4>'+
							'<div class="col-md-12 text-center">'+
								'<span class="mrp">'+product.p_mrp+'</span>'+
								'<span class="aftrdsnt">'+product.p_price+'</span>'+
							'</div>'+
						'</div>'+
					'</a>';
		});

		$('#pdts_wrapper').html(content);
		$("img.lazy").lazyload();
	}
</script>