<html>
<head>
    <title>My Form</title>
</head>
<body>

<?php /*echo validation_errors(); */?>

<?php echo form_open('test_form',['enctype'=>'multipart/form-data']); ?>

    <h5>Username</h5> <?php echo form_error('username', '<div class="error">', '</div>'); ?>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

    <h5>Password <?php echo form_error('password');?> </h5>
    <input type="text" name="password" value="" size="50" />

    <h5>Password Confirm <?php echo form_error('passconf');?></h5>
    <input type="text" name="passconf" value="" size="50" />

    <h5>Email Address <?php echo form_error('email');?></h5>
    <input type="text" name="email" value="" size="50" />

    <div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>