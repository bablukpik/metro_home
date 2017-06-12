<div class="panel panel-default">
	<div class="panel-body">
		<form action="<?php echo base_url('publicity/publish_publicity'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-top:50px;">
			<fieldset>
			<legend>Create an Ad</legend>

			<div class="form-group">
			  <label for="publicity_title" class="col-lg-2 control-label">Title</label>
			  <div class="col-lg-6">
			    <input type="text" name="publicity_title" required="required" class="form-control" id="publicity_title" placeholder="Title">
			  </div>
			  <div class="col-lg-4"></div>
			</div>

			<div class="form-group">
			  <label for="publicity_description" class="col-lg-2 control-label">Description</label>
			  <div class="col-lg-6">
			    <textarea name="publicity_description" required="required" class="form-control" rows="3" id="publicity_description"></textarea>
			  </div>
			  <div class="col-lg-4"></div>
			</div>

			<div class="form-group">
			  <label for="publicity_address" class="col-lg-2 control-label">Address</label>
			  <div class="col-lg-6">
			    <textarea name="publicity_address" required="required" class="form-control" rows="3" id="publicity_address"></textarea>
			  </div>
			  <div class="col-lg-4"></div>
			</div>

			<div class="form-group">
				<label for="publicity_charge_permonth" class="control-label col-lg-2">Per Month Rent</label>
				<div class="col-lg-6">
					<input type="text" name="publicity_charge_permonth" required="required" id="publicity_charge_permonth" class="form-control" placeholder="Per Month Rent">
				</div>
				<div class="col-lg-4"></div>
			</div>


			<div class="form-group">
			  	<label for="publicity_city" class="col-lg-2 control-label">Select your City</label>
			  	<div class="col-lg-6">
					<select name="publicity_city" required="required" class="form-control selectpicker" id="publicity_city" data-live-search="true">

			            <option disabled selected>Please select your City</option>
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
			  	<div class="col-lg-4"></div>
			</div>

			<div class="form-group">
				<label for="publicity_mobile" class="control-label col-lg-2">Mobile No.</label>
				<div class="col-lg-6">
					<input type="text" name="publicity_mobile" required="required" id="publicity_mobile" class="form-control" placeholder="Mobile No.">
				</div>
				<div class="col-lg-4"></div>
			</div>

			<div class="form-group">
				<label for="publicity_photo" class="control-label col-lg-2">Upload Image</label>
				<div class="col-lg-6">
					<?php echo form_error('publicity_photo'); ?>
					<input type="file" name="publicity_photo" id="publicity_photo" class="form-control">
				</div>
				<div class="col-lg-4"></div>
			</div>

			<div class="form-group" style="margin-top: 30px;">
			  <div class="col-lg-10 col-lg-offset-2">
			    <button type="reset" class="btn btn-default">Cancel</button>
			    <button type="submit" class="btn btn-primary">Submit</button>
			  </div>
			</div>

			</fieldset>
		</form>
	</div>
</div>
