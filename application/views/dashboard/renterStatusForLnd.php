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
    <div class="container" style="max-width: 1060px; margin-top: 30px;">
        
        <div style="font-size: 12px;">
            <h3 style="text-decoration: underline; text-align:center;">Renter Status</h3>
            <table class="table table-responsive table-striped table-bordered text-center">
                <thead>
	                <tr>
                        <th>Renter Name</th>
                        <th>Renter NID</th>
                        <th>Renter Phone</th>
                        <th>Renter Started Date</th>
	                    <th>Renter Left Date</th>
	                    <th>Status</th>
	                </tr>

                </thead>
                <tbody>
                <?php
                    if (isset($results)) {
                        foreach ($results as $key => $obj1) {
                            echo "<tr>";

                            echo "<td>".$obj1->renter_fullname."</td>";
                            echo "<td>".$obj1->renter_nid."</td>";
                            echo "<td>".$obj1->renter_phone."</td>";

                            echo "<td>".date('d/m/y',strtotime($obj1->renter_started_date))."</td>";

                            //Start date and End Date
                            if (date('d/m/y',strtotime($obj1->renter_started_date)) == date('d/m/y',strtotime($obj1->renter_ending_date)) ) {
                            	echo "<td>"."Till Now"."</td>";
                            }else{
                            	echo "<td>".date('d/m/y',strtotime($obj->renter_ending_date))."</td>";
                            }
                            //Status
                            if (date('d/m/y',strtotime($obj1->renter_started_date)) == date('d/m/y',strtotime($obj1->renter_ending_date)) ) {
                            	echo "<td style='color:green;'>"."Active"."</td>";
                            }else{
                            	echo "<td style='color:red;'>"."Inactive"."</td>";
                            }

                            echo "</tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>

    </div>