<style>
   table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {border:solid 1px #000; width:100px; word-wrap:break-word;}
   table thead tr th {vertical-align: top !important; border:solid 1px #000;}
   h2,h3,h4{margin-bottom: 20px;}
   span{
        font-weight: bold;
   }
</style>

	<!-- Result Table -->
    <div class="container" style="max-width: 1060px; ">
        
        <div style="font-size: 12px;">
            <h3 style="text-decoration: underline; text-align:center;">Renter Information</h3>
            <div class="renter_info_area clearfix" style="margin-bottom: 40px; position: relative;">
                <div class="renter_info pull-left" align="left" style="font-size: 14px; line-height: 16px; position: relative;">
                    <?php 
                        echo "<p><b>Renter Name : </b>".$results[0]['renter_fullname']."</p>";
                        echo "<p><b>Mobile      : </b>".$results[0]['renter_phone']."</p>";
                        echo "<p><b>National ID : </b>".$results[0]['renter_nid']."</p>";
                        echo "<address><b>Permanent Address : </b>".$results[0]['renter_permanent_add']."</address>"; 
                    ?>
                </div>

                <div class="renter_pic" style="float: right; position: absolute; right: 30px;" align="right"><img width="100" src="<?php echo base_url('uploads/'); echo isset($results[0]['renter_photo'])?($results[0]['renter_photo']):''; ?>" alt=""></div>
            </div>

            <h4>Renter Tracking Info:</h4>
            <table class="table table-responsive table-striped table-bordered text-center">
                <thead>
	                <tr>
	                    
                        <th>Renter Start Date</th>
	                    <th>Renter End Date</th>

	                    <th>Landlord Name</th>
	                    <th>Landlord Cell No.</th>
	                    <th>Landlord NID</th>
	                    <th>Landlord P.S</th>
	                    <th>Landlord Holding No.</th>
	                    <th>Landlord Road No.</th>
	                    <th>Landlord Locality</th>
	                    <th>Landlord Post Code</th>
	                </tr>

                </thead>
                <tbody>
                <?php
                    if (isset($results)) {
                        
                        foreach ($results as $key => $obj) {
                            echo "<tr>";

                            echo "<td>".date('d/m/y',strtotime($obj['renter_started_date']))."</td>";

                            if (date('d/m/y',strtotime($obj['renter_started_date'])) == date('d/m/y',strtotime($obj['renter_ending_date'])) ) {
                            	echo "<td>"."Till now"."</td>";
                            }else{
                            	echo "<td>".date('d/m/y',strtotime($obj['renter_ending_date']))."</td>";
                            }
                            

                            echo "<td>".$obj['lnd_fullname']."</td>";
                            echo "<td>".$obj['lnd_phone']."</td>";
                            echo "<td>".$obj['lnd_nid']."</td>";
                            echo "<td>".$obj['lnd_police_station']."</td>";
                            echo "<td>".$obj['lnd_holding_no']."</td>";
                            echo "<td>".$obj['lnd_road_no']."</td>";
                            echo "<td>".$obj['lnd_locality']."</td>";
                            echo "<td>".$obj['lnd_postcode']."</td>";

                            echo "</tr>";
                        }
                        
                    }
                ?>
                </tbody>
            </table>
        </div>

    </div>