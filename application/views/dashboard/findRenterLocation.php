
<div class="container" style="max-width: 800px; margin-top:5%;">
    <h2>Bordered Table</h2>
    <p>The .table-bordered class adds borders to a table:</p>            
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
            <?php
                /*while ($row = $result->fetch_array()) {
                    echo "<tr>";
                        echo "<td>".$row["name"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                    echo "</tr>";
                } */
            ?>
        </tbody>
    </table>
</div>