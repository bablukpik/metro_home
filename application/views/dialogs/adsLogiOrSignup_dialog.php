<style>
.adsLoginRegForm *, .adsLoginRegForm *:before, .adsLoginRegForm *:after {
  box-sizing: border-box;
}


.adsLoginRegForm {
  font-family: 'Titillium Web', sans-serif;
}

.adsLoginRegForm a {
  text-decoration: none;
  color: #1ab188;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.adsLoginRegForm a:hover {
  color: #179b77;
}

.adsLoginRegForm .form {
  background: rgba(19, 35, 47, 0.9);
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #179b77;
  color: #ffffff;
}
.tab-group .active a {
  background: #1ab188;
  color: #ffffff;
}

.tab-content > div:last-child {
  display: none;
}

.adsLoginRegForm h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

.adsLoginRegForm label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
.adsLoginRegForm label .req {
  margin: 2px;
  color: #1ab188;
}

.adsLoginRegForm label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
.adsLoginRegForm label.active .req {
  opacity: 0;
}

.adsLoginRegForm label.highlight {
  color: #ffffff;
}

.adsLoginRegForm input, .adsLoginRegForm textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
.adsLoginRegForm input:focus, .adsLoginRegForm textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

.adsLoginRegForm textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.adsLoginRegForm .button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.adsLoginRegForm .button:hover, .adsLoginRegForm .button:focus {
  background: #179b77;
}

.adsLoginRegForm .button-block {
  display: block;
  width: 100%;
}

.adsLoginRegForm .forgot {
  margin-top: -20px;
  text-align: right;
}

</style>

<!-- Modal -->
<div id="adsLogiOrSignup_dialog" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style=" position: relative; background-color: transparent; -webkit-background-clip: padding-box; background-clip: padding-box; border: none; border: none; border-radius: 0; outline: none; -webkit-box-shadow: none; box-shadow: none; -webkit-appearance: none;">
      <div class="modal-body">

        <div class="adsLoginRegForm">
          <div class="form" id="ads_signupORlogin_form">
            <button type="button" class="close" data-dismiss="modal" style="margin-top: -30px; margin-right: -30px; color: #fff;">&times;</button>
            <ul class="tab-group">
              <li class="tab active"><a href="#signup">Sign Up</a></li>
              <li class="tab"><a href="#login">Log In</a></li>
            </ul>
            
            <div class="tab-content">
              
              <div id="signup">   
                <!-- Registration -->
                <form action="<?php echo base_url('adsManager/adsRegistration');?>" method="post" enctype="multipart/form-data">
                  
                  <div class="top-row">
                    <div class="field-wrap">
                      <label>
                        First Name<span class="req">*</span>
                      </label>
                      <input type="text" name="ad_lnd_first_name" required autocomplete="off" />
                    </div>
                
                    <div class="field-wrap">
                      <label>
                        Last Name<span class="req">*</span>
                      </label>
                      <input type="text" name="ad_lnd_last_name" required autocomplete="off"/>
                    </div>
                  </div>
                
                  <div class="field-wrap">
                    <label>
                      Username<span class="req">*</span>
                    </label>
                    <input type="text" name="ad_lnd_username" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Password<span class="req">*</span>
                    </label>
                    <input type="password" name="ad_lnd_password" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Thana<span class="req">*</span>
                    </label>
                    <input type="text" name="ad_lnd_police_station" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      House No.<span class="req">*</span>
                    </label>
                    <input type="text" name="ad_lnd_holding_no" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Road No.<span class="req">*</span>
                    </label>
                    <input type="text" name="ad_lnd_road_no" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Locality<span class="req">*</span>
                    </label>
                    <input type="text" name="ad_lnd_locality" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Post Code<span class="req">*</span>
                    </label>
                    <input type="text" name="ad_lnd_postcode" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Cell No.<span class="req">*</span>
                    </label>
                    <input type="text" name="ad_lnd_mobile" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <input type="file" name="ad_user_photo" />
                  </div>
                                  
                  <button type="submit" class="button button-block"/>Get Started</button>
                  
                </form>
              </div>

              <!-- Login -->
              <div id="login">   
                <form action="<?php echo base_url('login/check_login');?>" method="post">

                  <div class="field-wrap">
                    <label>
                      Username<span class="req">*</span>
                    </label>
                    <input type="text" name="user_name" required autocomplete="off"/>
                  </div>
                  
                  <div class="field-wrap">
                    <label>
                      Password<span class="req">*</span>
                    </label>
                    <input type="password" name="user_pass" required autocomplete="off"/>
                  </div>

                  <input type="hidden" name="user_type" value="general">
  
                  <p class="forgot"><a href="#">Forgot Password?</a></p>
                    
                  <button type="submit" class="button button-block"/>Log In</button>
                  
                </form>
              </div>

            </div><!-- tab-content -->
          </div> <!-- /form -->

        </div>

      </div>
    </div>

  </div>
</div>