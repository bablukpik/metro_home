    <!-- Search Box -->
    <div class="container well" style="max-width: 600px; margin-top:10%; margin-left:auto; margin-right: auto; box-shadow: 0 5px 15px rgba(0,0,0,.5);">

        <div style="padding: 30px;">    
            <form id="search_renter_form" action="<?php echo base_url('super_admin/findRenterLocationFromDB');?>" method="post" autocomplete="on">
              <div class="form-group">
                <label for="search_renter">Enter Renter <span style="font-style: italic; color:red;">National ID</span></label>
                <div class="input-group">
                  <input id="search_renter" name="search_renter" type="text" class="form-control" placeholder="Search Renter">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                </div>
              </div>
            </form>
        </div>

    </div>

    <div id="print_download_area">
            <div style="clear:both;"></div>

            <!-- Download and print ptn -->
            <div id="download__print_search_result" style="float:right;"></div>

            <div style="clear:both;"></div>
            
            <!-- Search Result table -->
            <div id="search_renter_msg"></div>

    </div>
        