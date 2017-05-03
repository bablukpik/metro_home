<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo base_url('form/testForm');?>" method="post">
		<?php echo form_error('userName'); ?>
		<input type="text" name="userName"> 
		<input type="submit">
	</form>
</body>
</html>