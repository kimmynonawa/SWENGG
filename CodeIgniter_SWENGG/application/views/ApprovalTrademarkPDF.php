<html>
	<head>
	<img src="<?php echo base_url();?>/Downloads/approvaltrademark.png"  style="width:100%;"> <br>
	<style>
	span {
	    display:inline-block;
	     margin: 0px;
	}
	</style>
	</head>
	<body>

	<p>
	<strong>Name: </strong> 
	<u> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $requestInfo['requestedby']; ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u>
	<strong> Position/Section: </strong> 
	<U>  &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $requestInfo['requestedby_position']; ?>  &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp</U>
	</p>
	<p> <strong> Office/Unit/Organization: </strong>
	<u> &nbsp&nbsp&nbsp <?php echo $orgInfo[0]['name'];?> &nbsp&nbsp&nbsp </u> &nbsp&nbsp
	<strong>Date Filed: ________________________</strong></p>
	<p> 
		<strong> ID Number: </strong> 
		<u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $requestInfo['IDno']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u> 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<strong> Email Address:</strong> 
		<u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $requestInfo['email']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u>
	</p>
	<p> 
		<strong>Telephone Number: </strong> 
		<u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $requestInfo['telephone']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<strong>Mobile Number: </strong>
		<u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $requestInfo['mobile']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u>
	</p>

	<pstyle="margin: 2px"> <strong><h3> Trademark/s to use </strong> </h3></p>
	<span style="width: 40%">
	<fieldset>
	<ul>
		<?php
			foreach($trademarkDetails as $trademark) { ?>
				<li><p style="margin: 2px"> &nbsp <?php echo $trademark['name']; ?> </p></li>

		<?php }
		?>
	</fieldset>
	</ul>

	</span>

	<p> <strong>Type of item/materials to produce:</strong> </p>
	<span style="width: 40%">
	<fieldset>
	<ul>
	<li><p style="margin: 2px">&nbsp Merchandise </p></li>
	<p style="margin: 2px">&nbsp &nbsp Merchandise: T-Shirts and Caps </p></li>
	<p style="margin: 2px">&nbsp &nbsp Quantity: 750</p></li>
	<li><p style="margin: 2px">&nbsp Poster/Flyer/Invite/Banner</p></li>
	<li><p style="margin: 2px">&nbsp Video </p></li>
	<br>
	</ul>
	</fieldset>
	</span>
	<p>Purpose of Use (Please specify): <u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $permitDetails['purpose'];?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></p>

	<p style="margin:3px">Activity/Event where trademark will be used: <u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $activityDetails[0]['title']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></p>
	<p style="margin:3px">Proposed time of duration (Please specify): <u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $permitDetails['duration']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></p>
	<p style="margin:3px">Venue of activity/event: <u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $permitDetails['venue']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u> </p>

	<p><strong> Important Reminders </strong></p>
		<ol>
			<li> Accomplish two (2) copies of this form for your office/organization and STRATCOM reference.</li>
	  		<li>Attach a copy of the proposed design/layout of the merchandise/print material/video.</li>
			<li> Allow five (5) days processing for the approval of the merchandise/print material/video.</li>
			<li>  Strictly follow the approved duration and quantity for the use of trademark.</li>
			<li> Check the remarks on the attachments.</li>
		</ol>

	<p> Any violation will be dealt with administratively based on the provisions in the DLSU Intellectual Property Rights Policy Manual.</p>

	<p>STRATCOM reserves the right to approve or disapprove the application.</p>	
	<p align="center">Approved by: </p>
	<p align="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp__________________ &nbsp&nbsp&nbsp __________________  </p>
	<p align="center" style="margin:2px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Jill Noreen R. Legaspi &nbsp&nbsp&nbsp Date</p>
	<p align="center" style="margin:2px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMarketing Coordinator</p>

	</body>
</html>