<style>
   table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
   table thead tr th {vertical-align: top !important;}
</style>
	<!-- Result Table -->
    <div class="container well" style="max-width: 1060px; ">
         <a href="#" style="float: right; margin-right: 5px;">Download</a>
        <div style="font-size: 12px;">
            <h3 class="text-center" style="text-decoration: underline;">Renter Location with Details</h3>
            <table class="table table-responsive table-striped table-bordered text-center">
                <thead>
	                <tr>
	                    <th>Renter Name</th>
	                    <th>Renter Cell No.</th>
	                    <th>Renter NID</th>
	                    <th>Renter Permanent Addr.</th>
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

                            echo "<td>".$obj['renter_fullname']."</td>";
                            echo "<td>".$obj['renter_phone']."</td>";
                            echo "<td>".$obj['renter_nid']."</td>";
                            echo "<td>".$obj['renter_permanent_add']."</td>";
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