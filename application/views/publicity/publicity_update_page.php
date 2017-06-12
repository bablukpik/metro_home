<div class="panel panel-default">
	<div class="panel-body">
		<form id="publicityUpdateForm" action="<?php echo base_url('publicity/update'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
			<input type="hidden" name="publicity_id" value="<?php echo $updatePublicityFormData->publicity_id; ?>">
			<div class="form-group">
			  <label for="publicity_title" class="col-lg-2 col-lg-offset-1 control-label">Title</label>
			  <div class="col-lg-6">
			    <input type="text" name="publicity_title" value="<?php echo $updatePublicityFormData->publicity_title; ?>" required="required" class="form-control" id="publicity_title" placeholder="Title">
			  </div>
			  <!-- <div class="col-lg-4"></div> -->
			</div>

			<div class="form-group">
			  <label for="publicity_description" class="col-lg-2 col-lg-offset-1 control-label">Description</label>
			  <div class="col-lg-6">
			    <textarea name="publicity_description" required="required" class="form-control" rows="3" id="publicity_description"><?php echo $updatePublicityFormData->publicity_description; ?></textarea>
			  </div>
			  <!-- <div class="col-lg-4"></div> -->
			</div>

			<div class="form-group">
			  <label for="publicity_address" class="col-lg-2 col-lg-offset-1 control-label">Address</label>
			  <div class="col-lg-6">
			    <textarea name="publicity_address" required="required" class="form-control" rows="3" id="publicity_address"><?php echo $updatePublicityFormData->publicity_address; ?></textarea>
			  </div>
			  <!-- <div class="col-lg-4"></div> -->
			</div>

			<div class="form-group">
				<label for="publicity_charge_permonth" class="control-label col-lg-2 col-lg-offset-1">Per Month Rent</label>
				<div class="col-lg-6">
					<input type="text" name="publicity_charge_permonth" value="<?php echo $updatePublicityFormData->publicity_charge_permonth; ?>" required="required" id="publicity_charge_permonth" class="form-control" placeholder="Per Month Rent">
				</div>
				<!-- <div class="col-lg-4"></div> -->
			</div>


			<div class="form-group">
			  	<label for="publicity_city" class="col-lg-2 col-lg-offset-1 control-label">Select your City</label>
			  	<div class="col-lg-6">
					<select name="publicity_city" required="required" class="form-control selectpicker" id="publicity_city" data-live-search="true">

			            <option data-tokens="<?php echo $updatePublicityFormData->publicity_city; ?>" selected><?php echo $updatePublicityFormData->publicity_city; ?> </option>
			            <option data-tokens="Adabor">Adabor</option>
			            <option data-tokens="Badda">Badda</option>
			            <option data-tokens="Bangsal">Bangsal</option>
			            <option data-tokens="Bimanbandar">Bimanbandar</option>
			            <option data-tokens="Cantonment">Cantonment</option>
			            <option data-tokens="Chak Bazar">Chak Bazar</option>
			            <option data-tokens="Dakshinkhan">Dakshinkhan</option>
			            <option data-tokens="Darus Salam">Darus Salam</option>
			            <option data-tokens="Demra">Demra</option>
			            <option data-tokens="Dhamrai">Dhamrai</option>
			            <option data-tokens="Dhanmondi">Dhanmondi</option>
			            <option data-tokens="Dohar">Dohar</option>
			            <option data-tokens="Gendaria">Gendaria</option>
			            <option data-tokens="Gulshan">Gulshan</option>
			            <option data-tokens="Hazaribagh">Hazaribagh</option>
			            <option data-tokens="Jatrabari">Jatrabari</option>
			            <option data-tokens="Kadamtali">Kadamtali</option>
			            <option data-tokens="Kafrul">Kafrul</option>
			            <option data-tokens="Kalabagan">Kalabagan</option>
			            <option data-tokens="Kamrangirchar">Kamrangirchar</option>
			            <option data-tokens="Keraniganj">Keraniganj</option>
			            <option data-tokens="Khilgaon">Khilgaon</option>
			            <option data-tokens="khilkhet">khilkhet</option>
			            <option data-tokens="Kotwali">Kotwali</option>
			            <option data-tokens="Lalbagh">Lalbagh</option>
			            <option data-tokens="Mirpur">Mirpur</option>
			            <option data-tokens="Mohammadpur">Mohammadpur</option>
			            <option data-tokens="Motijheel">Motijheel</option>
			            <option data-tokens="Nawabganj">Nawabganj</option>
			            <option data-tokens="Newmarket">Newmarket</option>
			            <option data-tokens="Pallabi">Pallabi</option>
			            <option data-tokens="Paltan">Paltan</option>
			            <option data-tokens="Ramna">Ramna</option>
			            <option data-tokens="Rampura">Rampura</option>
			            <option data-tokens="Sabujbagh">Sabujbagh</option>
			            <option data-tokens="Savar">Savar</option>
			            <option data-tokens="Shah Ali">Shah Ali</option>
			            <option data-tokens="Shahbag">Shahbag</option>
			            <option data-tokens="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
			            <option data-tokens="Shyampur">Shyampur</option>
			            <option data-tokens="Sutrapur">Sutrapur</option>
			            <option data-tokens="Tejgaon">Tejgaon</option>
			            <option data-tokens="Mohakhali">Mohakhali</option>
			            <option data-tokens="Tejgaon Industrial Area">Tejgaon Industrial Area</option>
			            <option data-tokens="Turag">Turag</option>
			            <option data-tokens="Uttara">Uttara</option>
			            <option data-tokens="Uttar Khan">Uttar Khan</option>
			     
			        </select>
			  	</div>
			  	<!-- <div class="col-lg-4"></div> -->
			</div>

			<div class="form-group">
				<label for="publicity_mobile" class="control-label col-lg-2 col-lg-offset-1">Mobile No.</label>
				<div class="col-lg-6">
					<input type="text" name="publicity_mobile" value="<?php echo $updatePublicityFormData->publicity_mobile; ?>" required="required" id="publicity_mobile" class="form-control" placeholder="Mobile No.">
				</div>
				<!-- <div class="col-lg-4"></div> -->
			</div>

			<div class="form-group">
				<label for="publicity_photo" class="control-label col-lg-2 col-lg-offset-1">Upload Image</label>
				<div class="col-lg-6">
					<?php echo form_error('publicity_photo'); ?>
					<input type="file" name="publicity_photo" value="<?php echo $updatePublicityFormData->publicity_photo; ?>" id="publicity_photo" class="form-control">
					<?php if ($updatePublicityFormData->publicity_photo):?>
					<div><p>Preview</p><img src="<?php echo base_url('publicity/images/publicity_img').$updatePublicityFormData->publicity_photo; ?>" alt="Publicity Image" width="50" /></div>
					<?php endif; ?>
				</div>
				<!-- <div class="col-lg-4"></div> -->
			</div>

			<div class="form-group" style="margin-top: 30px;">
			  <div class="col-lg-6 col-lg-offset-6">
			    <button type="reset" data-dismiss="modal" class="btn btn-default">Cancel</button>
			    <button type="submit" id="publicity_update_form_submit" class="btn btn-primary">Submit</button>
			  </div>
			</div>
		</form>
	</div>
</div>
