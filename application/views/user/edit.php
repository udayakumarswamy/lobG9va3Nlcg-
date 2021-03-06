<!--change pic pop-->
  <div class="modal fade" id="changepic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Change Profile Picture</h4>
      </div>
      <div class="modal-body">
        <div class="clearfix avatar-wrap">
          <div class="row">
          <div class="col-md-8">
          <h3>Choose Avatar</h3>
          <ul class="clearfix">
            <li>
               <div class="clearfix"><img src="<?php echo base_url(); ?>uploads/designers/male1.png" class="img-responsive"></div>
               <input value="male1.png" id="one" type="radio" name="avatar">
            </li>
            <li>
               <div class="clearfix"><img src="<?php echo base_url(); ?>uploads/designers/male2.png" class="img-responsive"></div>
               <input value="male2.png" id="two" type="radio" name="avatar">
            </li>
            <li>
               <div class="clearfix"><img src="<?php echo base_url(); ?>uploads/designers/female1.png" class="img-responsive"></div>
               <input value="female1.png" id="three" type="radio" name="avatar">
            </li>
            <li>
               <div class="clearfix"><img src="<?php echo base_url(); ?>uploads/designers/male2.png" class="img-responsive"></div>
               <input value="female2.png" id="four" type="radio" name="avatar">
            </li>
          </ul>
          <h3>Upload your Image</h3>
          <div class="file-area">
          <input type="file" name="fileToUpload" id="fileToUpload" accept=".png, .jpg, .jpeg">
          <div class="file-dummy">
            <div class="success">Great, your files are selected. Keep on.</div>
            <div class="default">Please select a file</div>
          </div>
          </div>
          </div>
          <div class="col-md-4"><img src="<?php echo base_url(); ?>uploads/designers/<?php echo ($designer_details->user_image == '') ? 'default.jpg' : $designer_details->user_image; ?>" id="preview_pic" class="img-responsive"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" name="change_pic" id="change_pic" value="Save Picture" >
      </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('#fileToUpload').change( function(event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#preview_pic").attr('src',tmppath);       
});

</script>
  <!--change pic pop-->		

<div class="designerslide"></div>
		</div><!-- /. Container -->
		</div><!-- /# Mastehead -->  
	<!--slider ends-->
		
	<!--designer top-->    
    <div class="container designertop-main">
      <div class="row">
        <div class="col-md-2 no-pad">
           <!--<div class="designerpro-img">
              <img src="<?php echo base_url(); ?>uploads/designers/<?php echo ($designer_details->user_image == '') ? 'default.jpg' : $designer_details->user_image; ?>" class="img-responsive">
              <div class="changepic"><a href="#"><img src="<?php echo base_url(); ?>assets/images/changepic.png" class="img-responsive" type="file"></a></div>
           </div> -->
<div class="designerpro-img">
              <img src="<?php echo base_url(); ?>uploads/designers/<?php echo ($designer_details->user_image == '') ? 'default.jpg' : $designer_details->user_image; ?>" class="img-responsive">
              <div class="changepic" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#changepic"><img src="<?php echo base_url(); ?>assets/images/picbtn.png">  Change Picture</div>
            </div>
        </div>
        <div class="col-md-6">
          <h2><?php echo $designer_details->user_fname; ?></h2>
          <h3><i class="flaticon-placeholder9"></i> <?php echo $designer_details->user_location . ', ' . $designer_details->user_state ?>.</h3>
        </div>
        <div class="col-md-4 designerpro-top-right">
          <ul>
            <li class="col-md-4"><span><a href="#"><i class="glyphicon glyphicon-heart"></i>
            </span><br> Follow</a></li>
            <li class="col-md-4"><span><?php echo count($d_looks); ?></span><br> Looks</li>
            <li class="col-md-4"><span><?php echo $d_followers; ?></span><br> Followers</li>
          </ul>
        </div>
      </div>     
    </div>
	<!--designer top-->  

	<!--designer main-->  
    <div class="container designerpro-main">
     <div class="row">
     <div class="col-md-9 no-pad designerpro-left">
		 <ul class="nav nav-tabs">
		   <li class="active"><a href="#looks" data-toggle="tab"><i class="flaticon-user7"></i>Lookser profile</a></li>
		   <li><a href="#profile" data-toggle="tab"><i class="flaticon-profile29"></i> Personal Profile</a></li>
		   <li><a href="#wallet" data-toggle="tab"><i class="flaticon-money407"></i> Wallet</a></li>
		 </ul>
		    <div id="myTabContent" class="tab-content">
		      <div class="tab-pane active in" id="looks">
		      <div class="row">
		      <?php
		      foreach ($d_looks as $key => $look) {
		      ?>
				  <div class="col-md-4 created-each">
				    <div class="share"><a href="#" data-toggle="modal" data-target="#shareModal">
              <img src="<?php echo base_url();?>assets/images/deletelook.png" alt="share icon" class="img-circle"></a>
				    </div>
				    <div class="pattern<?php echo count($look['l_products']); ?>">
					  <ul>
					    <?php foreach ($look['l_products'] as $key => $lp): ?>
						<li><img src="<?php echo $lp->p_image;?>" class="img-responsive"></li>
						<?php endforeach; ?>
					  </ul>
					</div>
          <a href="<?php echo base_url('looks/view/'.$look['l_id']); ?>">
					<div class="created-by">
					<h3><?php echo $look['l_title']; ?></h3>
					<div class="col-md-12 clearfix text-center">
          <?php if($look['l_mrp'] != '' && $look['l_mrp'] > 0): ?>
            <span class="mrp"><span class="webrupee">Rs.</span><?php echo $look['l_mrp']; ?></span>
					<?php endif; ?>
          <span class="aftrdsnt"><span class="webrupee">Rs.</span><?php echo $look['l_price']; ?></span></div>
				  </div>
          </a>
				  <div class="rating"><img src="<?php echo base_url(); ?>assets/images/rating.png"></div>
				</div>
				<?php
			}
				?>
			
				</div>
				<!-- <ul class="pagination pull-right">
	              <li class="disabled"><a href="#">«</a></li>
	              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
	              <li><a href="#">2</a></li>
	              <li><a href="#">3</a></li>
	              <li><a href="#">4</a></li>
	              <li><a href="#">5</a></li>
	              <li><a href="#">»</a></li>
                </ul> -->
		      </div>

		      <!--profile starts-->
		      <div class="tab-pane fade" id="profile">
		    <form class="form-horizontal" action="" method="post" name="edit_profile" id="edit_profile">
              <fieldset>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your Name" class="form-control" value="<?php echo $designer_details->user_fname; ?>">
              </div>
            </div>
    
             <!-- about me -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="about">About Me</label>
              <div class="col-md-9">
                <textarea class="form-control" id="about" name="about" rows="5" placeholder=""><?php echo $designer_details->user_about; ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="gender">Gender</label>
              <div class="col-md-9">
                <select id="gender" name="gender" class="form-control">
                  <option value="">--Select Gender--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Email Address</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" value="<?php echo $designer_details->user_email; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="location">Location</label>
              <div class="col-md-9">
                <input id="location" name="location" type="text" placeholder="Your Location" class="form-control" value="<?php echo $designer_details->user_location; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="location">State</label>
              <div class="col-md-9">
                <input id="state" name="state" type="text" placeholder="Your State" class="form-control" value="<?php echo $designer_details->user_state; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="mobile">Mobile</label>
              <div class="col-md-9">
                <input id="mobile" name="mobile" type="text" placeholder="Mobile Number" class="form-control" value="<?php echo $designer_details->user_mobile; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="Institution">Institution</label>
              <div class="col-md-9">
                <input id="institution" name="Institution" type="text" placeholder="Institution" class="form-control" value="<?php echo $designer_details->user_institution; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="Website">Experience</label>
              <div class="col-md-9">
                <input id="experience" name="experience" type="text" placeholder="Experience" class="form-control" value="<?php echo $designer_details->user_experience; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="Website">Website</label>
              <div class="col-md-9">
                <input id="website" name="Website" type="text" placeholder="Website" class="form-control" value="<?php echo $designer_details->user_website; ?>">
              </div>
            </div>
            <div class="form-group">
             <div class="col-md-12 text-right">
                <input type="submit" class="save" name="save" id="save" value="Save Changes">
             </div>
             </div>
          </fieldset>
          </form>
		  </div>
<!--wallet starts-->
		   <div class="tab-pane fade" id="wallet">
        <div class="row earnings">
          <div class="clearfix col-md-12 redeem-wrap">
          <div class="col-md-5 redeem no-pad">
            <div class="row">
              <div class="col-md-7">
              <h3><span class="webrupee">Rs.</span> 1500</h3></div>
              <div class="col-md-5"><input type="button" value="Redem Now" class="redeembtn"></div>
             </div>
           </div>
           <div class="col-md-7"><p>In My Wallet, you can check your balance or redeem your cashback by clicking on the "Redeem Now" button.</p>
           <p class="note">Note: Rewards can only be redeemed by Bank Transfer, once you reach a minimun amount of Rs 1,000 (One Thousand).
            There might be some delay in showing updated balance.</p></div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 earns-wrap">
              <div class="col-md-4 earn-each">Total Rewards <strong><span class="webrupee">Rs.</span>2348</strong>
              </div>
              <div class="col-md-4 earn-each">Pending Rewards <strong><span class="webrupee">Rs.</span>348</strong></div>
              <div class="col-md-4 earn-each">Last Payed on <strong> 21 Aug 2015</strong></div>
              </div>
        </div>
         <form class="form-horizontal wallet-form" action="" method="post">
            <fieldset>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Bank Account Number</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your Account Number" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="Website">Full Name</label>
              <div class="col-md-9">
                <input id="fullname" name="fullname" type="text" placeholder="Enter Fullname" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="Website">Branch Details</label>
              <div class="col-md-9">
                <input id="branch" name="branch" type="text" placeholder="Enter Branch Details" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="select bank">Select Bank</label>
              <div class="col-md-4">
                <select class="minimal">
                  <option value="ICICI">ICICI Bank</option>
                  <option value="HDFC">HDFC Bank</option>
                  <option value="Canara">Canara Bank</option>
                  <option value="SBI">SBI Bank</option>
                </select>
              </div>
              <label class="col-md-2 control-label" for="Website">IFSC Code</label>
              <div class="col-md-3">
                <input id="ifsc" name="ifsc" type="text" placeholder="Enter IFSC Code" class="form-control">
              </div>
              </div>
          </fieldset>
          <div class="form-group">
            <div class="col-md-12 text-right">
                <input type="button" class="save" value="Save Changes">
            </div>
            </div>
          </form>
    </div>
	  </div>
	  </div>

   <div class="col-md-3 designerpro-right">    
     <h3>Profile Statistics</h3>
     <div class="designpro-right-main">
      <!-- <div class="profile-right-each">
        <h3>Profile Percentage</h3>
			  <div id="bar-1" class="bar-main-container">
			    <div class="wrap">
			      <div class="bar-percentage" data-percentage="46"></div>
			      <div class="bar-container">
			        <div class="bar"></div>
			      </div>
			    </div>
			  </div>
			</div> -->
			<div class="profile-right-each">
              <ul class="procounts">
      	        <li><i class="flaticon-profile29"></i><br><span><?php echo count($d_looks); ?></span></li>
      	        <li><i class="flaticon-eye106"></i><br><span><?php echo $d_views; ?></span></li>
      	      </ul>
            </div>

           <div class="profile-right-each">
             <h3>link to your Profile</h3>
      	     <input type="text" class="form-control" value="<?php echo base_url('designer/'.$did.'/'.url_title($designer_details->user_fname)); ?>">
           </div>
           
         </div>
       </div>
     </div>
    </div>
    </div>
	<!--designer main-->  
	
 	  
   </div>
   </div>
   </div>
	<!-- trending products -->
	
	<script>
     $('.bar-percentage[data-percentage]').each(function () {
	  var progress = $(this);
	  var percentage = Math.ceil($(this).attr('data-percentage'));
	  $({countNum: 0}).animate({countNum: percentage}, {
	    duration: 2000,
	    easing:'linear',
	    step: function() {
	      // What todo on every count
	      var pct = Math.floor(this.countNum) + '%';
	      progress.text(pct) && progress.siblings().children().css('width',pct);
	    }
	  });
	});

   $('.share a').click(function(){
    var url = '<?php echo base_url("look/"); ?>'+$(this).attr('data-value');
    $('#share_url').val(url);

   });
   $('#share_fb').click(function(){
    var url = 'https://www.facebook.com/sharer/sharer.php?u='+encodeURI('https://www.facebook.com/sharer/sharer.php?u='+$('#share_url').val());
    window.open(url, '_blank');
   });

    </script>

<script type="text/javascript">
$(function(){
  $('#edit_profile').submit(function(){
    var name = $('#name').val();
    var about = $('#about').val();
    var gender = $('#gender').val();
    var email = $('#email').val();
    var location = $('#location').val();
    var state = $('#state').val();
    var mobile = $('#mobile').val();
    var institution = $('#institution').val();
    var experience = $('#experience').val();
    var website = $('#website').val();
    if(name == '') {
      alert('Please enter name');
      return false;
    }
    else if(about == '') {
      alert('Please enter about');
      return false;
    }
    else if(gender == '') {
      alert('Please select gender');
      return false;
    }
    else if(email == '') {
      alert('Please enter email');
      return false;
    }
    else if(location == '') {
      alert('Please enter location');
      return false;
    }
    else if(state == '') {
      alert('Please enter state');
      return false;
    }
    else if(mobile == '') {
      alert('Please enter mobile');
      return false;
    }
    else {
      $.ajax({
        type:"POST",
        url:'<?php echo base_url();?>user/ajax_update_profile',
        data:{'name':name,'about':about,'gender':gender,'email':email,'location':location,'state':state,'mobile':mobile,'institution':institution,'experience':experience,'website':website},
        dataType:"json",
        success: function(data) {
          console.log(data);
          if(data.status == 'error') {
            alert(data.message);
          }
          else if(data.status == 'success') {
            alert(data.message);
          }
        }
      });
    }
    return false;
  });
});
</script>