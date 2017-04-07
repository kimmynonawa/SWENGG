<html>
	<head>
	<img src="<?php echo base_url();?>headers/approvalchange.png"  style="width:100%;"> <br>
	<style type="text/css">
		div{
			display: inline-block;
		}
	</style>
	</head>
	<body>
	<br>
		<table style="width: 100%" border="1" align="center">
			<tbody>
				<tr>
					<td><strong> REQUESTING ORGANIZATION </strong></td>
					<td> <?php echo $aform[0]['name']?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
					<td><strong> TYPE OF ACTIVITY </strong></td>
					<td> <?php echo $aform[0]['activitytype']?> &nbsp   </td>
				</tr>
				<tr>
					<td colspan="1"><strong>TITLE OF ACTIVITY</strong></td>
					<td colspan="3"> <?php echo $aform[0]['title']?> </td>
				</tr>
				<tr>
					<td><strong> VENUE </strong></td>
					<td> <?php echo $aform[0]['venue']?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
					<td><strong> DATE AND TIME </strong></td>
					<td><?php for ($i =0; $i<count($aformdate); $i++):?>
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

		<?php echo $aformdate[$i]['starttime']?> - <?php echo $aformdate[$i]['endtime']?><br>
	<?php endfor;?>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
				</tr>
				
				
			</tbody>
		</table>

			<div style="width: 60%">
			<br>
			<fieldset> 
				<p style="margin: 2px"><strong>Changes:</strong></p>
				<hr>
				<?php if (isset($cadvenue)):?> 
				<p style="margin: 2px">Type of Change: &nbsp Venue  </p>
				<p style="margin: 2px">Change: &nbsp <?php echo $cadvenue[0]['newvenue']?>  </p>
				
				<p style="margin: 2px">Justification: <?php echo $cad[0]['justification']?> </p>
				<?php endif;?> 
				<p style="margin: 2px"> &nbsp </p>
				
				<?php if (isset($caddate)):?> 
				<p style="margin: 2px">Type of Change: &nbsp Date and Time  </p>
				<?php for ($i =0; $i<count($caddate); $i++):?>
				<p> Date: 	
				<?php 
					$fromdate = $caddate[$i]['newstartdate'];
					$fromdatenew = strtotime($fromdate);
					$formatted_fromdate = date('F d, Y', $fromdatenew);
					echo $formatted_fromdate;
					if($caddate[$i]['newenddate'] != Null){
						echo " - ";
						$fromdate = $caddate[$i]['newenddate'];
						$fromdatenew = strtotime($fromdate);
						$formatted_fromdate = date('F d, Y', $fromdatenew);
						echo $formatted_fromdate;
					}
				?> <br>
				<p> Time:  <?php echo $caddate[$i]['newstarttime']?> - <?php echo $caddate[$i]['newendtime']?> <br>
						
				<?php endfor;?>
				<p style="margin: 2px">Justification: <?php echo $cad[0]['justification']?> </p>
				<?php endif;?> 
				
				
				</fieldset>
	 		</div>
			<p> <strong>Requested by:</strong></p>
			<p style="margin: 2px"> ______________________ &nbsp _________________ &nbsp ______________________ &nbsp _________________ </p>
			<p style="margin: 2px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>Date/Time</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>Date/Time</strong>

			<p align="right" style="font-size:12px" style="margin: 2px"><strong><i>Approval in Changes in Activity Details – Organization copy </i></strong></p>
			<p align="right" style="font-size:12px" style="margin: 2px"><strong><i>(Attach with the Special Approval Slip )  </i></strong></p>

			<hr style="border-top: dotted 1px;" />

					<table style="width: 100%" border="1" align="center">
			<tbody>
				<tr>
					<td><strong> REQUESTING ORGANIZATION </strong></td>
					<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
					<td><strong> TYPE OF ACTIVITY </strong></td>
					<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
				</tr>
				<tr>
					<td colspan="1"><strong>TITLE OF ACTIVITY</strong></td>
					<td colspan="3">&nbsp</td>
				</tr>
				<tr>
					<td><strong> VENUE </strong></td>
					<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
					<td><strong> DATE AND TIME </strong></td>
					<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </td>
				</tr>
			</tbody>
		</table>

			<div style="width: 60%">
			<br>
			<fieldset> 
				<p style="margin: 2px"><strong>Changes:</strong></p>
				<hr>
				<?php if (isset($cadvenue)):?> 
				<p style="margin: 2px">Type of Change: &nbsp Venue  </p>
				<p style="margin: 2px">Change: &nbsp <?php echo $cadvenue[0]['newvenue']?>  </p>
				
				<p style="margin: 2px">Justification: <?php echo $cad[0]['justification']?> </p>
				<?php endif;?> 
				<p style="margin: 2px"> &nbsp </p>
				
				<?php if (isset($caddate)):?> 
				<p style="margin: 2px">Type of Change: &nbsp Date and Time  </p>
				<?php for ($i =0; $i<count($caddate); $i++):?>
				<p> Date: 	
				<?php 
					$fromdate = $caddate[$i]['newstartdate'];
					$fromdatenew = strtotime($fromdate);
					$formatted_fromdate = date('F d, Y', $fromdatenew);
					echo $formatted_fromdate;
					if($caddate[$i]['newenddate'] != Null){
						echo " - ";
						$fromdate = $caddate[$i]['newenddate'];
						$fromdatenew = strtotime($fromdate);
						$formatted_fromdate = date('F d, Y', $fromdatenew);
						echo $formatted_fromdate;
					}
				?> <br>
				<p> Time:  <?php echo $caddate[$i]['newstarttime']?> - <?php echo $caddate[$i]['newendtime']?> <br>
						
				<?php endfor;?>
				<p style="margin: 2px">Justification: <?php echo $cad[0]['justification']?> </p>
				<?php endif;?> 
				
				
				</fieldset>

			<p> <strong>Requested by:</strong></p>
			<p style="margin: 2px"> ______________________ &nbsp _________________ &nbsp ______________________ &nbsp _________________ </p>
			<p style="margin: 2px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>Date/Time</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>Date/Time</strong>

			<p align="right" style="font-size:12px" style="margin: 2px"><strong><i>Approval in Changes in Activity Details – AMT copy </i></strong></p>
			<p align="right" style="font-size:12px" style="margin: 2px"><strong><i>(Attach with the Special Approval Slip )  </i></strong></p>
		
	</body>
</html>