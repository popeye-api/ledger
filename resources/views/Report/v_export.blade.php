<table id="table" class="table" style="width:100%">
    <thead class="thead-dark ">
        <tr>
        <th scope="col" style="text-align:center;">Month</th>
        <th scope="col" style="text-align:center;">Balance</th>
        <th scope="col" style="text-align:center;">Cumulative balance</th>
        </tr>
    </thead>
    <tbody id="data">
        <tr>
        <td>January</td>
        <?php 
            $balance = 0;
            $balance_jan = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '01'){
                if($row->log_type_id == 1){
                $balance_jan += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_jan -= $row->balance;
                }
            }
            }

        ?>
        <td style="text-align:right;"><?php echo $balance_jan ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_jan  ?></td>
        </tr>
        <tr>
        <td>February</td>
        <?php 
            $balance_feb = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '02'){
                if($row->log_type_id == 1){
                $balance_feb += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_feb -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_feb ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_feb  ?></td>
        </tr>
        <tr>
        <td>March</td>
        <?php 
            $balance_mar = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '03'){
                if($row->log_type_id == 1){
                $balance_mar += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_mar -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_mar ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_mar  ?></td>
        </tr>
        <tr>
        <td>April</td>
        <?php 
            $balance_april = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '04'){
                if($row->log_type_id == 1){
                $balance_april += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_april -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_april ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_april  ?></td>
        </tr>
        <tr>
        <td>May</td>
        <?php 
            $balance_may = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '05'){
                if($row->log_type_id == 1){
                $balance_may += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_may -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_may ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_may  ?></td>
        </tr>
        <tr>
        <td>June</td>
        <?php 
            $balance_june = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '06'){
                if($row->log_type_id == 1){
                $balance_june += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_june -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_june ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_june  ?></td>
        </tr>
        <tr>
        <td>July</td>
        <?php 
            $balance_july = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '07'){
                if($row->log_type_id == 1){
                $balance_july += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_july -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_july ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_july  ?></td>
        </tr>
        <tr>
        <td>August</td>
        <?php 
            $balance_aug = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '08'){
                if($row->log_type_id == 1){
                $balance_aug += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_aug -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_aug ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_aug  ?></td>
        </tr>
        <tr>
        <td>September</td>
        <?php 
            $balance_sep = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '09'){
                if($row->log_type_id == 1){
                $balance_sep += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_sep -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_sep ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_sep  ?></td>
        </tr>
        <tr>
        <td>October </td>
        <?php 
            $balance_oct = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '10'){
                if($row->log_type_id == 1){
                $balance_oct += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_oct -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_oct ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_oct  ?></td>
        </tr>
        <tr>
        <td>November </td>
        <?php 
            $balance_nov = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '11'){
                if($row->log_type_id == 1){
                $balance_nov += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_nov -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_nov ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_nov  ?></td>
        </tr>
        <tr>
        <td>December </td>
        <?php 
            $balance_dec = 0;
            foreach($result as $row){
            if(date('m',strtotime($row->created_at)) == '12'){
                if($row->log_type_id == 1){
                $balance_dec += $row->balance;
                }
                if($row->log_type_id == 2){
                $balance_dec -= $row->balance;
                }
            }
            }
        ?>
        <td style="text-align:right;"><?php echo $balance_dec ?></td>
        <td style="text-align:right;"><?php echo $balance += $balance_dec  ?></td>
        </tr>
        <tr>
        <td colspan="2" style="text-align: center;">Total </td>
        <td style="text-align:right;"><?php echo $balance ?></td>
        </tr>
    </tbody>
</table>