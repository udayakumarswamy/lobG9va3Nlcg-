		</div><!-- /. Container -->
		</div><!-- /# Mastehead -->  
	<!--slider ends-->
		
	
	<!-- create look -->
	<div class="container createlook-main">
		<h2 class="heads">create a look</h2>
		  <div class="filter-bar">
				<div class="row">
					<div class="col-md-2">
						<select class="minimal" name="f_gen" id="f_gen">
							<option value="">By Gender</option>
							<?php
							$genders = array('Male'=>'Male', 'Female'=>'Female');
							foreach ($genders as $key => $gender) {
								?>
							<option value="<?php echo $key; ?>"><?php echo $gender; ?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="col-md-2">
						<select class="minimal" name="f_cat" id="f_cat">
							<option value="">By Category</option>
							<?php
							foreach ($pcategories as $key => $pcategory) {
								?>
								<option value="<?php echo $pcategory->pc_id; ?>"><?php echo $pcategory->pc_name; ?></option>
								<?php
							}
							?>
						</select>
					</div>
					<!-- <div class="col-md-2">
						<select class="minimal" name="f_scat" id="f_scat">
							<option value="">Sub Category</option>
						</select>
					</div> -->
					<div class="col-md-2">
						<select class="minimal" name="f_prov" id="f_prov">
							<option value="">By Provider</option>
							<?php
							foreach ($providers as $key => $provider) {
								?>
								<option value="<?php echo $provider->provider_id; ?>"><?php echo $provider->provider_name; ?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="col-md-2">
						<select class="minimal" name="f_brd" id="f_brd">
							<option value="">By Brand</option>
							<?php
							foreach ($brands as $key => $brand) {
								?>
								<option value="<?php echo $brand->brand_id; ?>"><?php echo $brand->brand_name; ?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="col-md-2">
						<select class="minimal" name="f_dis" id="f_dis">
							<option value="">By Discount</option>
							<option value="0-10"> Upto 10% </option>
							<option value="10-20"> 10% - 20% </option>
							<option value="20-30"> 20% - 30% </option>
							<option value="30-100"> More than 30% </option>
						</select>
					</div>
					<div class="col-md-12">
                      <div class="clearfix subcategory">
                        <input type="radio" id="f_scat" name="f_scat" value="" checked/>
                      </div>
					</div>
				</div>
			</div>
		
	   <div class="row">
	     <div class="col-md-7 createlook-left"> 
	     	<p><strong id="lp_count"><?php echo count($look['l_products']); ?></strong> Products added to the look</p>
		   <div class="prodsadded">
		     <ul id="ld">
		     	<?php foreach ($look['l_products'] as $key => $l_product): ?>
		     	<li id="ld_<?php echo $l_product->p_id; ?>">
		     		<a href="javascript:void(0);" target="_blank">
		     			<img src="<?php echo $l_product->p_image; ?>" class="img-responsive">
		     		</a>
		     	</li>
		     	<?php endforeach; ?>
		     </ul>
		   </div>
		   
		   <div class="clearfix"></div>
		   <div class="clearfix selectedprod-wrap">
		     <div id="lp">
		     	<?php $pids = array(); 
		     	foreach ($look['l_products'] as $key => $l_product):
		     		$pids[] = $l_product->p_id; ?>
		     	<div class="selectedprod-each" id="lp_<?php echo $l_product->p_id; ?>">
		     		<div class="row">
		     			<div class="col-md-2">
		     				<img src="<?php echo $l_product->p_image; ?>" id="lp_image_<?php echo $l_product->p_id; ?>" style="max-width:85px;height:60px">
		     			</div>
		     			<div class="col-md-10 prodpick-details">
		     				<div class="row">
		     					<a href="<?php echo base_url('product/'.$l_product->p_id); ?>" target="_blank">
		     						<h3 id="lp_name_<?php echo $l_product->p_id; ?>"><?php echo $l_product->p_name; ?></h3>
		     					</a>
		     					<div class="col-md-4 prodpick-left">
		     						<div class="provider">
		     							<img src="<?php echo $l_product->provider_image; ?>">
		     						</div>
		     					</div>
		     					<div class="col-md-3 prodpick-right">
		     						<div class="mrp" id="lp_mrp_<?php echo $l_product->p_id; ?>"> Rs.  <?php echo $l_product->p_mrp; ?></div>
		     					</div>
		     					<div class="col-md-3 prodpick-right">
		     						<div class="cost" id="lp_price_<?php echo $l_product->p_id; ?>"> Rs. <?php echo $l_product->p_price; ?></div>
		     					</div>
		     					<div class="col-md-2 no-pad removeadded">
		     						<a href="javascript:void(0);" onclick="remove_lp(<?php echo $l_product->p_id; ?>);" id="lp_remove_<?php echo $l_product->p_id; ?>">Remove <img src="<?php echo base_url(); ?>assets/images/removeadded.png"></a>
		     					</div>
		     				</div>
		     			</div>
		     		</div>
		     	</div>
		     	<?php endforeach; ?>
		     </div>
			 <div class="totaladded" id="lp_total_div" >
			  <div class="row">
			    <div class="col-md-8 text-right"><strong>Total</strong></div>
			    <div class="col-md-2 no-pad" id="lp_total_mrp">Rs. <?php echo $look['l_mrp']; ?></div>
			    <div class="col-md-2 no-pad" id="lp_total">Rs. <?php echo $look['l_price']; ?></div>
			  </div>
			 </div>
			 <!-- -->
			 <div class="lookname-wrap" id="lc_create">
			 	<div class="row">
                  <div class="col-md-6">
                  	<input placeholder="Look name" value="<?php echo $look['l_title']; ?>" id="l_name" name="l_name" class="form-control" type="text">
                  </div>
                  <div class="col-md-6">
	                  <select class="minimal" id="l_cat" name="l_cat">
		     			<option value="">--Look Category--</option>
		     			<?php
							foreach ($lcategories as $key => $lcategory) {
								?>
								<option value="<?php echo $lcategory->lc_id; ?>" <?php echo ($look['l_category'] == $lcategory->lc_id) ? 'selected="selected"' : ''; ?>><?php echo $lcategory->lc_name; ?></option>
								<?php
							}
							?>
		     		</select>
                  </div>
                  <div class="col-md-6">
	                  <select class="minimal" name="l_gen" id="l_gen">
							<option value="">--Gender--</option>
							<?php
							$genders = array('Male'=>'Male', 'Female'=>'Female');
							foreach ($genders as $key => $gender) {
								?>
							<option value="<?php echo $key; ?>" <?php echo ($look['l_gender'] == $key) ? 'selected="selected"' : ''; ?>><?php echo $gender; ?></option>
								<?php
							}
							?>
						</select>
                  </div>
                  <div class="col-md-6">
                  	<input type="button" class="form-control savelook" value="Update Look" id="l_create" name="l_create" onclick="edit_look();">
                  	<button type="button" class="hide" id="preview_look" data-toggle="modal" data-target="#previewModal">
                  	Save &amp; Preview</button>
                  </div>
			 	</div>
			 </div>
			 <!-- -->
		   </div>
	     </div>
		 
		 <div class="col-md-5"> 
	       <p>Showing <strong><?php echo count($products); ?></strong> Results </p>
		   <div class="create-search">
		     <input type="text" name="f_name" id="f_name" class="form-control" placeholder="Search by Product name">
		   </div>
		   <div class="createlook-right" id="f_products_wrapper">
		     <!--list one-->
		     <?php
		     foreach ($products as $key => $product) {
		     ?>
		     <div class="clearfix createlook-list">
			   <div class="col-md-3">
			   <div class="looklist-image">
			     <img src="<?php echo $product->p_image; ?>" id="p_image_<?php echo $product->p_id; ?>" title="<?php echo $product->p_name; ?>" alt="<?php echo $product->p_name; ?>" class="img-responsive">
			   </div>
			   </div>
			   <div class="col-md-9 prodpick-details">
			     <div class="row">
				   <a href="<?php echo base_url('product/'.$product->p_id); ?>" target="_blank"><h3 id="p_name_<?php echo $product->p_id; ?>"><?php echo $product->p_name; ?></h3></a>
				   <div class="col-md-5 prodpick-left">
				    <div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>
					<div class="provider"><img src="<?php echo $product->provider_image; ?>"></div>
					<div class="brand"><span>Brand</span><br><?php echo $product->brand_name; ?></div>		
				   </div>
				   <div class="col-md-7 prodpick-right">
				     <div class="mrp" id="p_mrp_<?php echo $product->p_id; ?>"><span class="webrupee"> Rs.</span>  <?php echo $product->p_mrp; ?></div>
					 <div class="cost" id="p_price_<?php echo $product->p_id; ?>"><span class="webrupee"> Rs.</span> <?php echo $product->p_price; ?></div>
				     <div class="addtolook" onclick="add_to_look(<?php echo $product->p_id; ?>);">
					   <a href="javascript:void(0);">Add to look <img src="<?php echo base_url();?>assets/images/addlook.png"></a>
					 </div>
					 <div class="fav">
					   <a href="javascript:void(0);" onclick="add_to_favourites(<?php echo $product->p_id; ?>);"><img src="<?php echo base_url();?>assets/images/fav.png"></a>
					 </div>
				   </div>				   
				 </div>
			   </div>
			 </div>
			 <?php
			}
			 ?>
			 
			 
		   </div>
	     </div>
	   </div>
	 </div>
	<!--create look end-->

<!--preview starts-->
	<div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Preview</h4>
	      </div>
	      <div class="clearfix modal-body">
	      <div class="row" id="prev_data">
	         <div class="col-md-6 col-xs-6 trend-each">
		        <div class="pattern3">
				  <ul>
					<li><img src="images/trending/t4.jpg" class="img-responsive"></li>
					<li><img src="images/trending/t2.jpg" class="img-responsive"></li>
					<li><img src="images/trending/t6.jpg" class="img-responsive"></li>
				  </ul>
				</div>
				<div class="col-md-12 text-center"><span class="mrp">
				<span class="webrupee">Rs.</span>2300</span>
				<span class="aftrdsnt"><span class="webrupee">Rs.</span>2000</span></div>
			 </div>

			 <div class="col-md-6 preview-right">
			   <ul>
			     <li><strong>Look Name:</strong> The Girl next Door</li>
			     <li><strong>Total Products:</strong> 03</li>
			     <li><strong>Look Name:</strong> The Girl next Door</li>
			     <li><strong>Look Created By:</strong> Aneel Kaushik</li>
			 	 <li><strong>Date Created:</strong> 12 Aug 2015</li>
			 	 <li><button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
	            <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Save Look</button></li>
	            </ul>
			 </div>
		  </div>
	      </div>
	    </div>
	  </div>
	</div>
  <!-- preview ends-->
     


<script type="text/javascript">

<!-- Add to look -->
localStorage.p_ids = '[<?php echo implode(",", $pids); ?>]';
localStorage.lp_mrp = <?php echo $look['l_mrp']; ?>;
localStorage.lp_total = <?php echo $look['l_price']; ?>;
function add_to_look(p_id) {
	var count = n_count = 0;
	if (localStorage.p_ids) {
	    var p_ids = JSON.parse(localStorage.p_ids);
	    count = p_ids.length;
	    if($.inArray(p_id, p_ids) == -1) {
	    	p_ids.push(p_id);
	    }
	    n_count = p_ids.length;
	} else {
	    var p_ids = [];
	    count = p_ids.length;
	    p_ids.push(p_id);
	    n_count = p_ids.length;
	}
	if(count == n_count) {
		alert('Already added');
		return false;
	}
	$('.prodsadded').css('background-image', 'none');
	$('#lp_count').text(n_count);

	localStorage.p_ids = JSON.stringify(p_ids);


	var p_name = $('#p_name_'+p_id).text();
	var p_price = $('#p_price_'+p_id).text();
	var p_mrp = $('#p_mrp_'+p_id).text();
	var p_image = $('#p_image_'+p_id).attr('src');
	var base_url = '<?php echo base_url("product/");?>';
	var lp = '<div class="selectedprod-each" id="lp_'+p_id+'">' +
			   '<div class="row">' +
			   '<div class="col-md-2">' +
			   '<img src="'+p_image+'" id="lp_image_'+p_id+'" style="max-width:85px;height:60px">' +
			   '</div>' +
			   '<div class="col-md-10 prodpick-details">' +
			     '<div class="row">' +
				   '<a href="'+base_url+'/'+p_id+'" target="_blank"><h3 id="lp_name_'+p_id+'">'+p_name+'</h3></a>' +
				   '<div class="col-md-4 prodpick-left">' +
					'<div class="provider"><img src="<?php echo base_url(); ?>assets/images/flipkart.png"></div>' +
				   '</div>' +
				   '<div class="col-md-3 prodpick-right">' +
				     '<div class="mrp" id="lp_mrp_'+p_id+'">'+p_mrp+'</div>' +
				   '</div>' +
				   '<div class="col-md-3 prodpick-right">' +
					 '<div class="cost" id="lp_price_'+p_id+'">'+p_price+'</div>' +
				   '</div>' +
	               '<div class="col-md-2 no-pad removeadded">' +
				     '<a href="javascript:void(0);" onclick="remove_lp('+p_id+');" id="lp_remove_'+p_id+'">Remove <img src="<?php echo base_url(); ?>assets/images/removeadded.png"></a>' +
				   '</div>' +
				 '</div>' +
			   '</div>' +
			   '</div>' +
		     '</div>';
	$('#lp').append(lp);

	<!-- look products total calculating -->
	p_mrp = p_mrp.split('s. ');
	p_price = p_price.split('s. ');
	if(p_mrp[1] == '') {
		p_mrp = 0;
	} else {
		p_mrp = p_mrp[1];
	}
	if(p_price[1] == '') {
		p_price = 0;
	} else {
		p_price = p_price[1];
	}
	if (localStorage.lp_total) {
		localStorage.lp_mrp = parseInt(localStorage.lp_mrp) + parseInt(p_mrp);
		localStorage.lp_total = parseInt(localStorage.lp_total) + parseInt(p_price);
	}
	else {
		localStorage.lp_mrp = parseInt(p_mrp);	
		localStorage.lp_total = parseInt(p_price);	
	}
	$('#lp_total_div').removeClass('hide');
	$('#lc_create').removeClass('hide');
	$('#lp_total_mrp').text('Rs. ' + localStorage.lp_mrp);
	$('#lp_total').text('Rs. ' + localStorage.lp_total);
	<!-- look products total calculating -->

	var ld = '<li id="ld_'+p_id+'">'+
						'<a href="javascript:void(0);" target="_blank">'+
							'<img src="'+p_image+'" class="img-responsive">'+
						'</a>'+
					'</li>';
	$('#ld').append(ld);
}
<!-- Add to look -->

<!-- Remove product from look -->
function remove_lp(p_id) {

	<!-- look products total calculating -->
	lp_mrp = $('#lp_mrp_'+p_id).text().split('s. ');
	lp_price = $('#lp_price_'+p_id).text().split('s. ');
	if (localStorage.lp_mrp) {
		localStorage.lp_mrp = parseInt(localStorage.lp_mrp) - parseInt(lp_mrp[1]);
	}
	if (localStorage.lp_total) {
		localStorage.lp_total = parseInt(localStorage.lp_total) - parseInt(lp_price[1]);
	}
	$('#lp_total_mrp').text('Rs. '+localStorage.lp_mrp);
	$('#lp_total').text('Rs. '+localStorage.lp_total);
	if(localStorage.lp_total == 0) {
		$('#lp_total_div').addClass('hide');
		$('#lc_create').addClass('hide');
	}
	<!-- look products total calculating -->

	$('#lp_'+p_id).remove();
	$('#ld_'+p_id).remove();
	if (localStorage.p_ids) {
	    var p_ids = JSON.parse(localStorage.p_ids);
	    p_ids = jQuery.grep(p_ids, function(value) {
		  return value != p_id;
		});
	}
	localStorage.p_ids = JSON.stringify(p_ids);
}
<!-- Remove product from look -->

<!-- Edit look -->
function edit_look() {
	var l_cat = $('#l_cat').val();
	var l_name = $('#l_name').val();
	var l_gender = $('#l_gen').val();
	if(l_cat == '') {
		alert('Please select look category');
		return false;
	}
	if(l_name == '') {
		alert('Please enter look name');
		return false;
	}
	if(l_gender == '') {
		alert('Please select gender');
		return false;
	}
	var l_mrp = $('#lp_total_mrp').text().split('s. ')[1];
	var l_price = $('#lp_total').text().split('s. ')[1];

	var p_ids = JSON.parse(localStorage.p_ids);
	var prev_data = '';

	var fullDate = new Date();
	var twoDigitMonth = fullDate.getMonth()+"";if(twoDigitMonth.length==1)	twoDigitMonth="0" +twoDigitMonth;
	var twoDigitDate = fullDate.getDate()+"";if(twoDigitDate.length==1)	twoDigitDate="0" +twoDigitDate;
	var currentDate = twoDigitDate + "/" + twoDigitMonth + "/" + fullDate.getFullYear();

	prev_data += '<div class="col-md-6 col-xs-6 trend-each">'+
	    '<div class="pattern'+p_ids.length+'">'+
		  '<ul>';
	for(var j = 0; j < p_ids.length; j++) {
		var p_img = $('#ld_'+p_ids[j]+' a img').attr('src');
		prev_data += '<li><img src="'+p_img+'" class="img-responsive"></li>';
	}
		  prev_data += '</ul>'+
		'</div>'+
		'<div class="col-md-12 text-center"><span class="mrp">'+
		'<span class="webrupee">Rs.</span>'+l_mrp+'</span>'+
		'<span class="aftrdsnt"><span class="webrupee">Rs.</span>'+l_price+'</span></div>'+
	 '</div>'+

	 '<div class="col-md-6 preview-right">'+
	   '<ul>'+
	     '<li><strong>Look Name:</strong> '+l_name+'</li>'+
	     '<li><strong>Total Products:</strong> '+p_ids.length+'</li>'+
	     '<li><strong>Look Name:</strong> '+$("#l_cat :selected").text()+'</li>'+
	     '<li><strong>Look Created By:</strong> '+$('.logged').text()+'</li>'+
	 	 '<li><strong>Date Created:</strong> '+currentDate+'</li>'+
	 	 '<li><button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel</button>'+
	    '<button type="button" onclick="update_look();" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Save -Look</button></li>'+
	    '</ul>'+
	 '</div>';
	 $('#prev_data').html(prev_data);

	$('#preview_look').trigger('click');

}
function update_look() {

	var l_cat = $('#l_cat').val();
	var l_name = $('#l_name').val();
	var l_gender = $('#l_gen').val();
	if(l_cat == '') {
		alert('Please select look category');
		return false;
	}
	if(l_name == '') {
		alert('Please enter look name');
		return false;
	}
	if(l_gender == '') {
		alert('Please select gender');
		return false;
	}
	var l_mrp = $('#lp_total_mrp').text().split('s. ')[1];
	var l_price = $('#lp_total').text().split('s. ')[1];
	$.ajax({
		type:"POST",
		url:'<?php echo base_url("looks/update_ajax");?>',
		data:{'l_uid':<?php echo $look['l_uid']; ?>,'l_id':<?php echo $look['l_id']; ?>,'l_cat':l_cat,'l_gender':l_gender,'l_name':l_name,'l_mrp':l_mrp,'l_price':l_price,'l_pids':localStorage.p_ids},
		dataType:"json",
		success: function(data){
			if(data.status == 'success') {
				alert("Look updated successfully");
				window.location.href = '<?php echo base_url("looks"); ?>';
			}
			else if(data.status == 'error') {
				alert(data.message);
			}
		},
	  error: function(e) {
		//called when there is an error
		console.log(e.message);
	  }
	});
}
<!-- Create look -->
</script>

<script type="text/javascript">
	$('#f_cat').change(function(){
		var select = '<input type="radio" id="f_scat" name="f_scat" value="" checked/>';
        $('.subcategory').html(select);
		var f_cat = $('#f_cat').val(); // get category value
		var f_gen = $('#f_gen').val(); // get gender value
		$.ajax({
			type:"GET",
			url:'<?php echo base_url("looks/f_pcategories");?>/'+f_cat+'/'+f_gen,
			// data:f_cat,
			dataType:"json",
			success: function(data){
				// console.log(data.length);
				var select = '<input type="radio" id="f_scat" name="f_scat" value=""  checked/>';
				$.each(data, function(index) {
		            select += '<div><input type="radio" id="f_scat'+index+'" name="f_scat" value="'+index+'" onchange="ps_filter();"/><label for="f_scat'+index+'">'+data[index]+'</label></div>';
		        });
		        // $('#f_scat').html(select);
		        $('.subcategory').html(select);
			},
		  error: function(e) {
			//called when there is an error
			console.log(e.message);
		  }
		});

	});
	
	$('#f_gen').change(function(){
		$('#f_cat').trigger('change');
	});
	$('#f_gen, #f_cat, #f_prov, #f_brd, #f_dis').change(function(){
		ps_filter();
	});
	$('#f_name').keyup(function(){
		ps_filter();
	});

	function ps_filter () {
		// var s_pdt = $('#s_pdt').val();
		var f_name = $('#f_name').val();	// get search name value
		var f_gen = $('#f_gen').val();	// get gender value
		var f_cat = $('#f_cat').val(); // get category value
		// var f_scat = $('#f_scat').val(); // get sub category value
		var f_scat = document.querySelector('input[name="f_scat"]:checked').value; // get sub category value
		var f_prov = $('#f_prov').val(); // get provider value
		var f_brd = $('#f_brd').val(); // get brand value
		var f_dis = $('#f_dis').val(); // get discount value
		
		var f_input = {};
		f_input['f_name'] = f_name;
		f_input['f_gen'] = f_gen;
		f_input['f_cat'] = f_cat;
		if(f_scat != '') {
			f_input['f_cat'] = f_scat;
		}
		f_input['f_prov'] = f_prov;
		f_input['f_brd'] = f_brd;
		f_input['f_dis'] = f_dis;

		// console.log(JSON.stringify(f_input));

		$.ajax({
			type:"POST",
			url:'<?php echo base_url("looks/f_ajax");?>',
			data:f_input,
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

	function generate_products (products) {
		var content = '';
		if(products.length == 0) {
			content = '<p>No results found...</p>';
		}
		$.each(products, function(index, product){
			var base_url = '<?php echo base_url("product/");?>';
			content += '<div class="clearfix createlook-list">'+
						   '<div class="col-md-3">'+
						   '<div class="looklist-image">'+
						     '<img src="'+product.p_image+'" id="p_image_'+product.p_id+'" title="'+product.p_name+'" alt="'+product.p_name+'" class="img-responsive">'+
						   '</div>'+
						   '</div>'+
						   '<div class="col-md-9 prodpick-details">'+
						     '<div class="row">'+
							   '<a href="'+base_url+'/'+product.p_id+'" target="_blank"><h3 id="p_name_'+product.p_id+'">'+product.p_name+'</h3></a>'+
							   '<div class="col-md-5 prodpick-left">'+
							    '<div class="rating"><img src="<?php echo base_url();?>assets/images/rating.png"></div>'+
								'<div class="provider"><img src="'+product.provider_image+'"></div>'+
								'<div class="brand"><span>Brand</span><br>'+product.brand_name+'</div>'+
							   '</div>'+
							   '<div class="col-md-7 prodpick-right">'+
							     '<div class="mrp" id="p_mrp_'+product.p_id+'"><span>Rs.</span> '+product.p_mrp+'</div>'+
								 '<div class="cost" id="p_price_'+product.p_id+'">Rs. '+product.p_price+'</div>'+
							     '<div class="addtolook" onclick="add_to_look('+product.p_id+');">'+
								   '<a href="javascript:void(0);">Add to look <img src="<?php echo base_url();?>assets/images/addlook.png"></a>'+
								 '</div>'+
								 '<div class="fav">'+
								   '<a href="javascript:void(0);" onclick="add_to_favourites('+product.p_id+');"><img src="<?php echo base_url();?>assets/images/fav.png"></a>'+
								 '</div>'+
							   '</div>'+				   
							 '</div>'+
						   '</div>'+
						 '</div>';
		});

		$('#f_products_wrapper').html(content);
	}

function add_to_favourites(id) {
	$.ajax({
	  type:"POST",
	  url:'<?php echo base_url();?>user/add_to_favourites',
	  data:{'type':'product','id':id},
	  dataType:"json",
	  success: function(data) {
	    // console.log(data);
	    if(data.status == 'error') {
	      // $('#s_msg').html('Sorry, Your email already subscribed.');
	    }
	    else if(data.status == 'success') {
	      // $('.favbtn').html('Added to your favourites');
	      $('.favs a').html('<i class="flaticon-like78"></i> '+(parseInt($('.favs a').text())+1));
	      // $('#follow').html($('#follow').html().replace(/Follow/, 'Following'));
	      // $('#followers').text(parseInt($('#followers').text())+1);
	      // $('#s_msg').html('Thanks, Your email successfully subscribed.');
	    }
	  }
	});
}
</script>

<script>
 //    $(function(){
	//   $('.subcategory input').on('change',function(){
	// 	if($(this).attr('type')=='checkbox'){
	// 	    console.log($(this).is(':checked'));
	// 	  }else{
	// 	    console.log($(this).val());
	// 	}
	//   });
	// });
    </script>