<html>
<head></head>
<body>

 <img src="<?php echo base_url();?>headers/LOPHeader.png"> 

    <p><b>Organization:</b> <?php echo $aform[0]['name']?> <br>
    <b>Title of Activity: </b> <?php echo $aform[0]['title']?><br>
   <?php for ($i =0; $i<count($aformdate); $i++):?>
     <b> Date and Time:  </b>
	<?php 
			$fromdate = $aformdate[$i]['startdate'];
			$fromdatenew = strtotime($fromdate);
			$formatted_fromdate = date('F d, Y', $fromdatenew);
			echo $formatted_fromdate;
			if($aformdate[$i]['enddate'] != Null){
				echo " - ";
				$fromdate = $aformdate[$i]['enddate'];
				$fromdatenew = strtotime($fromdate);
				$formatted_fromdate = date('F d, Y', $fromdatenew);
				echo $formatted_fromdate;
			}
		?> 
		
		<?php echo $aformdate[$i]['starttime']?> - <?php echo $aformdate[$i]['endtime']?>
	<br>
	<?php endfor;?>
	
    <b> Venue: </b><?php echo $aform[0]['venue']?> <br> 
    <b> Expected Number of Participants: </b> <?php echo $aform[0]['ENP']?> </br>
    </p>
    <br>
    <center> <b>PARTICIPANTS WITH WAIVER FORMS </b></center>
    <table id="table" border="1">
        <thead>
            <tr>
                <th width='13%'> ID Number </th>
                <th width='13%'> Last Name </th>
                <th width='13%'> First Name </th>
                <th width='13%'> Middle Initial </th>
                <th width='13%'> Age </th>
                <th width='13%'> Signature </th>
            </tr>
        </thead>
        <tbody>
			<?php for ($i =0; $i<count($lopdetails1); $i++):?>
                <tr>
                  <td width="13%" align="center"><?php echo $lopdetails1[$i]['IDno']?></td>
                   <td width="13%" align="center"><?php echo $lopdetails1[$i]['lastname']?></td>
                   <td width="13%" align="center"><?php echo $lopdetails1[$i]['firstname']?></td>
                   <td width="13%" align="center"><?php echo $lopdetails1[$i]['middleinitial']?></td>
                  <td width="13%" align="center"><?php echo $lopdetails1[$i]['age']?></td>
                  <td width="13%" align="center"><?php if($lopdetails1[$i]['waiver'] == 1) {echo 'yes';} else echo 'no'; ?></td>
                  </tr>
			<?php endfor;?>
        </tbody>
    </table>
        <br>
    <center> <b>PARTICIPANTS WITHOUT WAIVER FORMS </b></center>
    <table id="table" border="1">
        <thead>
            <tr>
                <th width='13%'> ID Number </th>
                <th width='13%'> Last Name </th>
                <th width='13%'> First Name </th>
                <th width='13%'> Middle Initial </th>
                <th width='13%'> Age </th>
                <th width='13%'> Signature </th>
            </tr>
        </thead>
        <tbody>
			<?php for ($i =0; $i<count($lopdetails2); $i++):?>
                <tr>
                  <td width="13%" align="center"><?php echo $lopdetails2[$i]['IDno']?></td>
                   <td width="13%" align="center"><?php echo $lopdetails2[$i]['lastname']?></td>
                   <td width="13%" align="center"><?php echo $lopdetails2[$i]['firstname']?></td>
                   <td width="13%" align="center"><?php echo $lopdetails2[$i]['middleinitial']?></td>
                  <td width="13%" align="center"><?php echo $lopdetails2[$i]['age']?></td>
                  <td width="13%" align="center"><?php if($lopdetails2[$i]['waiver'] == 1) {echo 'yes';} else echo 'no'; ?></td>
                  </tr>
			<?php endfor;?>
        </tbody>
    </table>
</body>
</html>