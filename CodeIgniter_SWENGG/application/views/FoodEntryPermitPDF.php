<html>
	<head>
		<img src="<?php echo base_url();?>/Downloads/foodentry.png"  style="width:100%;"> <br>
	</head>
	
	<body>
		<table align="center" style="width: 100%" border="1">
			<tbody>
				<tr>
					<td rowspan="2" style= "background-color:#D3D3D3"><strong> Name (Last, First, Middle) </strong> </td>
					<td rowspan="2"> &nbsp &nbsp <?php echo $requestInfo['name']; ?></td>
					<td style= "background-color:#D3D3D3"><strong> Date of Request</strong> </td>
					<td> &nbsp &nbsp </td>
				</tr>
				<tr>
					<td style= "background-color:#D3D3D3"><strong> ID Number </strong> </td>
					<td> &nbsp &nbsp <?php echo $requestInfo['IDno']; ?></td>
				</tr>
				<tr>
					<td style= "background-color:#D3D3D3"><strong> Email Address</strong> </td>
					<td>&nbsp &nbsp <?php echo $requestInfo['email']; ?>  </td>
					<td style= "background-color:#D3D3D3"><strong> Mobile Number</strong> </td>
					<td>&nbsp &nbsp <?php echo $requestInfo['mobile']; ?> </td>
				</tr>
				<tr>
					<td style= "background-color:#D3D3D3"><strong> Position </strong></td>
					<td> &nbsp &nbsp <?php echo $requestInfo['position']; ?> </td>
					<td style= "background-color:#D3D3D3"><strong> Local Number </strong></td>
					<td> &nbsp &nbsp <?php echo $requestInfo['telephone']; ?> </td>
				</tr>
				<tr>
					<td colspan="1" style= "background-color:#D3D3D3"><strong> Office/Organization </strong></td>
					<td colspan="3"><strong> &nbsp &nbsp <?php echo $orgInfo[0]['name']; ?> </strong></td>
				</tr>
				<tr>
					<td colspan="1" style="height: 50px;  background-color:#D3D3D3"><strong> Activity </strong></td>
					<td colspan="3" style="height: 50px"> &nbsp &nbsp <?php echo $activityDetails[0]['title'] ?> </td>
				</tr>
				<tr>
					<td style= "background-color:#D3D3D3"><strong> Date of Activity </strong></td>
					<td > &nbsp &nbsp 
					 	<?php 
                            $startDate = new DateTime($activityDetails[0]['startdate']); 
                            $startDate = date_format($startDate, 'F j, Y');

                            $endDate = new DateTime($activityDetails[0]['enddate']); 
                            $endDate = date_format($endDate, 'F j, Y');

                            echo $startDate." - ".$endDate;
                        ?> 
					</td>
					<td style= "background-color:#D3D3D3"><strong> Time of Activity </strong></td>
					<td > &nbsp &nbsp <?php echo $activityDetails[0]['starttime']." - ".$activityDetails[0]['endtime'];?> </td>
				</tr>
			</tbody>
		</table>
		<br>
		<table align="center" style="width: 100%" border="1">
		<thead>
			<td align="center" colspan="4" style= "background-color:#D3D3D3"><strong> FOOD ITEMS ALLOWED ENTRY </strong> </td>
		</thead>
		<thead>
			<th style= "background-color:#D3D3D3"> Quantity </th>
			<th style= "background-color:#D3D3D3"> Unit </th>
			<th style= "background-color:#D3D3D3"> Description </th>
			<th style= "background-color:#D3D3D3"> Estimated Cost </th>
		</thead>
		<tbody>
			<?php
				foreach($permitDetails as $details) { ?>
					<tr>
						<td> <?php echo $details['quantity']; ?> </td>
						<td> <?php echo $details['unit']; ?> </td>
						<td> <?php echo $details['description']; ?> </td>
						<td> <?php echo $details['cost']; ?> </td>
					</tr>
			<?php }
			?>

		</tbody>
		</table>
		<br><br>

		<table align="center" style="width: 100%" border="1">
		<thead>
		<th style= "background-color:#D3D3D3"> REQUESTING PARTY </th>
		<th style= "background-color:#D3D3D3"> APPROVAL </th>
		</thead>
		<tbody>
			<td width="50%"> 
				<i> I declare that the food items to be brought in are intended
				exclusively for the activity stated above. I will be personally
				responsible for ensuring proper waste disposal after the activity.
				</i> <br><br><br><br>
				Signature over printed name/Date
			</td>
			<td>
				 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
				<br> <br> <br> <br> 
				MS. KAREN R. HEBRON, AVC for Campus Services<br>
				Date
			</td>
		</tbody>
		</table>

		<br> <br>

		<p align="center" style="font-size: 10px">2401 Taft Avenue, 0922 Manila, Philippines</p>
		<p align="center"  style="font-size: 10px">Tel: (632) 524-4611 loc. 444 | security@dlsu.edu.ph </p>
		
	</body>
</html>