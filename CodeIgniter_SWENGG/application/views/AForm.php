<html>
<head></head>
<body>
    <img src="<?php echo base_url();?>headers/AFormHeader.png" id="afHeader"> <br>
    <br>
	<b> Requesting Organization: </b> <?php echo $aform[0]['name']?> <br>
	<b> Title of Activity: </b> <?php echo $aform[0]['title'];?> <br>
	<b> Nature of Activity: </b>  <?php echo $aform[0]['activitynature'];?> <br>
	<b> Type of Activity: </b> <?php echo $aform[0]['activitytype'];?>  <br> <br>

	<hr>
	<br>
	<b> <u> ACTIVITY DETAILS</b></u> <br>
	<br>
	<?php for ($i =0; $i<count($aformdate); $i++):?>
		<b> Date: </b> 			
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
		?> <br> 
		<b> Time: </b>  <?php echo $aformdate[$i]['starttime']?> - <?php echo $aformdate[$i]['endtime']?> <br>
	<?php endfor;?>
	
	<b> Venue: </b> <?php echo $aform[0]['venue']?><br>
	<b> ENP: </b> <?php echo $aform[0]['ENP']?><br>
	<b> ENMP: </b> <?php echo $aform[0]['ENMP']?> <br>
	<br>
	<br>
	Submitted By: <br>
	&nbsp;&nbsp;__________________________ &nbsp;&nbsp; &nbsp;&nbsp;_______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________ &nbsp;&nbsp; &nbsp;&nbsp;_______________<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature Over Printed Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date and Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organization President&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date and Time<br><br> <br>

	Noted By: <br>
	&nbsp;&nbsp;__________________________ &nbsp;&nbsp; &nbsp;&nbsp;_______________ &nbsp;&nbsp;&nbsp;<input type="checkbox">&nbsp;Faculty Adviser &nbsp;&nbsp;<input type="checkbox">&nbsp;USG Treasuerer&nbsp;<input type="checkbox">&nbsp;EB in Charge<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature Over Printed Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date and Time<br><br>
	&nbsp;&nbsp;__________________________ &nbsp;&nbsp; &nbsp;&nbsp;_______________ &nbsp;&nbsp;&nbsp;<input type="checkbox">&nbsp;COSCA &nbsp;&nbsp;<input type="checkbox">&nbsp;LSPO&nbsp;&nbsp;<input type="checkbox">&nbsp;STRATCOM&nbsp;&nbsp;<input type="checkbox">&nbsp;OCCS<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature Over Printed Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date and Time<br><br><br>
	
	<center><i>CSO/DAAM USE ONLY</i></center>
	<fieldset>
	<b>Status: </b>&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;Approved&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;Pending&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;Denied&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;Please see me ASAP<br>
	<span><b> Comments: </b><br> <fieldset><br><br><br></fieldset></span>	
	</fieldset>

	<br>
	Approved By: <br>
	&nbsp;&nbsp;__________________________ &nbsp;&nbsp; &nbsp;&nbsp;_______________ &nbsp;&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;SLIFE/STC Coordinator &nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;CSO APS&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;USG DAAM<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature Over Printed Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date and Time<br><br>

	 <img src="<?php echo base_url();?>headers/AFormHeader.png" id="afHeader"> 
	<br> <br><b><u>IN CASE OF CHANGE</u></b><br><br>
	
	<?php if (isset($caddate)):?> 
	<?php for ($i =0; $i<count($caddate); $i++):?>
		<b> Date: </b><?php 
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
									?>  <br>
		<b> Time: </b> <?php echo $caddate[$i]['newstarttime']?> - <?php echo $caddate[$i]['newendtime']?> <br>
		<?php endfor;?>
		<?php endif;?>
		
	<?php if (isset($cadvenue)):?> 
	<b> Venue: </b><?php echo $cadvenue[0]['newvenue']?> <br>
	<?php endif;?> 

	<b> Changes Approved By: </b>_______________________&nbsp;&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;SLIFE/STC Coordinator &nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;CSO APS&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;USG DAAM<br><br><br>
	Received By:  __________________________ &nbsp;&nbsp;&nbsp;Date/Time: __________________________ <br><br><br>

	<hr>
	<br><b> <u> POST ACTIVITY REQUIREMENTS </u></b> <br><br>
	<b> Due Date: </b> _______________________<br>
	<b> Status: </b>__________________________ <br> <br>
	<input type="checkbox"> &nbsp;&nbsp;Pre-Acts Requirements <br>
	<input type="checkbox"> &nbsp;&nbsp;Attendance Log Sheet <br>
	<input type="checkbox"> &nbsp;&nbsp;List of Expenses <br>
	<input type="checkbox"> &nbsp;&nbsp;List of Pictures <br>
	<input type="checkbox"> &nbsp;&nbsp;Approved Poster/Flyer <br>
	<input type="checkbox"> &nbsp;&nbsp;Sample Publication <br>
	<input type="checkbox"> &nbsp;&nbsp;FRA Report (due on_______) <br>
	<input type="checkbox"> &nbsp;&nbsp;Income Statement <br>
	<input type="checkbox"> &nbsp;&nbsp;List of Participants and Winners <br>
	<input type="checkbox"> &nbsp;&nbsp;Signed MOA/s <br>
	<input type="checkbox"> &nbsp;&nbsp;Minutes of the Meeting <br>
	<input type="checkbox"> &nbsp;&nbsp;Activity Report <br>
	<input type="checkbox"> &nbsp;&nbsp;Evaluation Results <br>
</body>
</html>