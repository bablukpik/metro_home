<div class="container">
	<div class="col-sm-12">		
		<div style="margin-top:5%;" class="col-sm-offset-3 col-sm-5 well" >
			<form role="form" action="ajax.php" id="rform" method="POST">
				<div class="form-group">
					<label>Name:</label>
					<input class="form-control" type="name" name="name" id="name">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input class="form-control" type="email" name="email" id="email">
				</div>
				<button id="submit" class="btn btn-danger">Submit </button>
			</form>
			<div style="color:green;" id="success">
				
			</div>
		</div>
	</div>
</div>