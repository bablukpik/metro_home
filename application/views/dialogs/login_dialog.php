<div id="loginForm" class="login-form">

    <form action="login/check_login" method="post" id="login_Form" target="_blank" name="login_Form">
        <div class="login-corporate">
            
            <div class="form-group">
                <!-- <label for="usr">Please select an user</label> -->
                <select name="user_type" class="form-control" id="usr">
                    <option selected value="DEFAULT" disabled="disabled">Please select an user</option>
                    <option value="general_user">General User</option>
                    <option value="landloard_user">Landloard</option>
                    <option value="metro_police_user">Metro Police</option>
                    <option value="admin_user">Admin</option>
                </select>
            </div>

            <input class="form-control u-name" placeholder="Username" name="NAME" type="text" required="required" data-toggle="tooltip" data-placement="auto" title="Username cannot be blank!" id="NAME">

            <input class="form-control" placeholder="Password" name="PASS" maxlength="8" required="required" data-toggle="tooltip" data-placement="auto" title="Password cannot be black!" type="password" id="PASS">
            <input type="submit" id="mybdj" value="Sign In" class="btn btn-success btn-login">


            <a class="for-pass" href="#" target="_blank">Forgot password?</a>
            <div class="new-account">
                <p>Don't have an account?</p>
                <a href="#" target="_blank" onclick="_gaq.push(['_trackEvent', 'nabarmenu_new' , 'click', 'Corporate Create account',1.00,true]);" class="btn btn-default btn-create">Create account</a>
            </div>
        </div>

    </form>
</div>



<!-- 
Modal
<div class="modal fade" id="login_dialog" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>

            <div class="modal-body">
                <div id="login_tab">
                    Nav tabs
                    <div class="tap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#gen_user_login" aria-controls="home" role="tab" data-toggle="tab">General User</a></li>
                            <li role="presentation"><a href="#landLoard_login" aria-controls="profile" role="tab" data-toggle="tab">Landloard</a></li>
                            <li role="presentation"><a href="#metro_police" aria-controls="profile" role="tab" data-toggle="tab">Metro Police</a></li>
                            <li role="presentation"><a href="#admin_login" aria-controls="profile" role="tab" data-toggle="tab">Admin</a></li>
                        </ul>
                    </div>

                    <div style="    margin-top: 30px;text-transform: capitalize;" class="tab-content">

                        Tab panes for landLoard
                        <div role="tabpanel" class="tab-pane active" id="gen_user_login">
                            <form>
                                <div class="form-group">
                                    <label for="user_username">General User Login</label>
                                    <input type="email" class="form-control" id="user_username" placeholder="Holding No...">
                                    <input type="hidden" name="user_type" value="general_user" class="form-control" placeholder="Holding No...">
                                </div>
                                <div class="form-group">
                                    <label for="user_pass">Password</label>
                                    <input type="password" class="form-control" id="user_pass" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        Tab panes for landLoard
                        <div role="tabpanel" class="tab-pane" id="landLoard_login">
                            <form>
                                <div class="form-group">
                                    <label for="user_username">User name</label>
                                    <input type="email" class="form-control" id="user_username" placeholder="Holding No...">
                                </div>
                                <div class="form-group">
                                    <label for="user_pass">Password</label>
                                    <input type="password" class="form-control" id="user_pass" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        Tab panes for Metro Police
                        <div role="tabpanel" class="tab-pane" id="metro_police">
                            <form>
                                <div class="form-group">
                                    <label for="user_username">User name</label>
                                    <input type="email" class="form-control" id="user_username" placeholder="Holding No...">
                                </div>
                                <div class="form-group">
                                    <label for="user_pass">Password</label>
                                    <input type="password" class="form-control" id="user_pass" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        Tab pane for Admin
                        <div role="tabpanel" class="tab-pane" id="admin_login">
                            <form action="admin_login/check_login" method="post">
                                <div class="form-group">
                                    <label for="admin_username">Admin Id</label>
                                    <input type="text" name="admin_username" class="form-control" id="admin_username" placeholder="Admni Username">
                                    <input type="hidden" name="user_type" value="admin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="admin_pass">Password</label>
                                    <input type="password" name="admin_pass" class="form-control" id="admin_pass" placeholder="Admnin Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span>Don't have an account?</span>
                <a href="#" class="btn btn-success">Create an account</a>
            </div>

        </div>
    </div>
</div> End Modal -->