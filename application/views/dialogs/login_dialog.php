<div id="loginForm" class="login-form display_none">
    <form action="<?php echo base_url('login/check_login');?>" method="post" id="login_Form" target="_blank">
        <div class="login_interface">
            
            <div class="form-group">
                <!-- <label for="usr">Please select an user</label> -->
                <select name="user_type" class="form-control" id="usr">
                    <option selected value="DEFAULT" disabled="disabled">Please select an user</option>
                    <option value="general">General User</option>
                    <option value="landlord">Landlord</option>
                    <option value="metro_police">Metro Police</option>
                    <option value="admin">Admin</option>
                    <option value="renter">Renter</option>
                </select>
            </div>

            <input class="form-control u-name" placeholder="Username" name="user_name" type="text" required="required" data-placement="auto" title="Username cannot be blank!">

            <input class="form-control" placeholder="Password" name="user_pass" required="required" data-placement="auto" title="Password cannot be black!" type="password">
            <button type="submit" class="btn btn-success btn-login">Sign in</button>


            <a class="for-pass" href="#" target="_blank">Forgot password?</a>
            <div class="new-account">
                <p>Don't have an account?</p>
                <button type="button" id="onlineRegBtn" class="btn btn-default btn-create" data-toggle="modal" data-target="#registrationOnline">Create account</button>
            </div>
        </div>

    </form>
</div>