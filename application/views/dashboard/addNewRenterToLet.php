
<div style="max-width: 500px; margin: 0 auto; margin-top:10%; box-shadow: 0 5px 15px rgba(0,0,0,.5);" class="well" >
	<div style="padding: 15px; padding-bottom: 10px;">
		<form role="form" action="<?php echo base_url('super_admin/addNewRenterToLet');?>" id="newRenterAddform" method="POST">
			<div class="form-group">
				<label for="nid_renter">Enter Renter <span style="font-style: italic; color:red;">National ID</span></label>
				<input class="form-control" type="text" name="renter_nid" id="nid_renter" required="required">
			</div>
			<button id="submit" class="btn btn-primary">Add to Home</button>
		</form>
		<div style="margin-top:10px;" id="newRenterAddedHomeMsg"></div>
	</div>
</div>