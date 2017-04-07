<html>
	<head>
		<head>
		<font color="green">	<p style="font-size:10px"> Guidelines:</p>
		<p style="font-size:10px">1.	Your organization’s/ unit’s header must be placed in this area. </p>
		<p style="font-size:10px"> 2.	Your organization’s/ unit’s footer must be placed below every page. </p>
		<p style="font-size:10px"> 3.	No sections in this proposal are to be omitted. There are a total of 9 sections; each has to be filled- out. </p>
		<p style="font-size:10px"> 4.	For academic contests, do not forget the endorsement of the Department Chair/ Vice Dean. </p> </font>
	</head>
	<body>
		<h3 align="center"> PROJECT PROPOSAL  </h3>


		<p align="left"> <strong> I.ACTIVITY DETAILS </strong> </p>
			<table align="center" style="width: 100%" border="1">
			<tbody>
				<tr>
					<td colspan="1"  style= "background-color:#D3D3D3"><strong> Title of Activity</strong> </td>
					<td colspan="3"> <?php echo $activityDetails[0]['title']; ?> </td>
				</tr>
				<tr>
					<td  style= "background-color:#D3D3D3"><strong> Nature of Activity </strong></td>
					<td> <?php echo $activityDetails[0]['activitynature']; ?> </td>
					<td  style= "background-color:#D3D3D3"> <strong>ENMP/ENP</strong></td>
					<td> <?php echo $activityDetails[0]['ENP']."/".$activityDetails[0]['ENMP']; ?> </td>
				</tr>
				<tr>
					<td  style= "background-color:#D3D3D3"><strong> Type of Activity</strong> </td>
					<td> <?php echo $activityDetails[0]['activitytype']; ?> </td>
					<td  style= "background-color:#D3D3D3"><strong> Time</strong></td>
					<td> <?php echo $activityDetails[0]['starttime']." - ".$activityDetails[0]['endtime']; ?> </td>
				</tr>
				<tr>
					<td  style= "background-color:#D3D3D3"><strong> Date </strong></td>
					<td>  </td>
					<td  style= "background-color:#D3D3D3"><strong> Venue </strong></td>
					<td> <?php echo $activityDetails[0]['venue']; ?> </td>
				</tr>
				<tr>
					<?php
						foreach($projectHeads as $phead) { ?>
							<td  style= "background-color:#D3D3D3"><strong> Project Head/s </strong></td>
							<td> <?php echo $phead['name']; ?> </td>
							<td  style= "background-color:#D3D3D3"><strong> Contact number </strong></td>
							<td> <?php echo $phead['contactnumber']; ?> </td>
					<?php }
					?>
				</tr>
			</tbody>
		</table>

		<p align="left"> <strong> II. BRIEF CONTEXT/PERSPECTIVE OF THE ACTIVITY</strong> </p>
		<ol>
			<li><?php echo $pprDetails['context1']; ?></li>
			<li><?php echo $pprDetails['context2']; ?></li>
			<li><?php echo $pprDetails['context3']; ?></li>
		</ol>


		<p align="left"> <strong> III. OBJECTIVES</strong> </p>
		<ol>
			<li> <?php echo $pprDetails['objective1']; ?> </li>
			<li> <?php echo $pprDetails['objective2']; ?> </li>
			<li> <?php echo $pprDetails['objective3']; ?> </li>
		</ol>

		<p align="left"> <strong> IV. COMPREHENSIVE PROGRAM DESIGN</strong> </p>

		<table align="center" style="width: 100%" border="1">
			<thead>
				<th  style= "background-color:#D3D3D3"> TIME </th>
				<th  style= "background-color:#D3D3D3"> DURATION </th>
				<th  style= "background-color:#D3D3D3"> ACTIVITY </th>
				<th  style= "background-color:#D3D3D3"> BRIEF DESCRIPTION OF THE ACTVITY </th>
				<th  style= "background-color:#D3D3D3"> PERSON-IN-CHARGE </th>
			</thead>
			<tbody>
				<?php
					foreach($programDesign as $details) { ?>
						<tr>
							<td> <?php echo $details['starttime']."-".$details['endtime']; ?> </td>
							<td> <?php echo $details['duration']; ?>  </td>	
							<td> <?php echo $details['name']; ?> </td>	
							<td> <?php echo $details['description']; ?> </td>	
							<td> <?php echo $details['personincharge']; ?> </td>	
						</tr>
				<?php }
				?>
			</tbody>
		</table>

		<p align="left"> <strong> V. BREAKDOWN OF EXPENSES </strong> </p>
		<table align="center" style="width: 100%" border="1">
			<thead>
				<th  style= "background-color:#D3D3D3"> MATERIALS </th>
				<th  style= "background-color:#D3D3D3"> QUANTITY </th>
				<th  style= "background-color:#D3D3D3"> UNIT COST </th>
				<th  style= "background-color:#D3D3D3"> TOTAL COST </th>
			</thead>
			<tbody>
				<?php
					$total = 0;
					foreach($expenseBreakdown as $details) { ?>
						<tr>
							<td> <?php echo $details['material']; ?> </td>
							<td> <?php echo $details['quantity']; ?>  </td>	
							<td> <?php echo $details['unitcost']; ?> </td>	
							<td> <?php echo $details['totalcost']; ?> </td>	
						</tr>
				<?php 
					$total+=$details['totalcost'];
					}
				?>
			</tbody>
			<tbody> 
				<td align="right" colspan="3"> Total: </td>
				<td colspan="1"> <?php echo $total; ?> </td>
			</tbody>

		</table>

		<p align="left"> <strong> VI. SOURCE OF FUNDS </strong> </p>
		<table align="center" style="width: 100%" border="1">
			<thead>
				<th  style= "background-color:#D3D3D3"> SOURCE/S OF FUNDS </th>
				<th  style= "background-color:#D3D3D3"> AMOUNT </th>
			</thead>
			<tbody>
				<?php $fundsSum = 0; ?>
				<tr>
					<td> Organizational Funds </td>	
					<td>
						<?php 
							echo $funds['orgfunds']; 
							$fundsSum+=$funds['orgfunds'];
						?> 
					</td>			
				</tr>
				<tr>
					<td> Participants Fee </td>	
					<td>
						<?php 
							echo $funds['participantsfee']; 
							$fundsSum+=$funds['participantsfee'];
						?> 
					</td>
				</tr>
				<tr>
					<td> Others (Please specify, i.e. Sponsorships)</td>	
					<td>
						<?php 
							echo $funds['others'];
							$fundsSum+=$funds['others'];
						?>
					</td>
				</tr>
			</tbody>
			<tbody> 
				<td align="right" colspan="1"> Total: </td>
				<td colspan="1"> <?php echo $fundsSum; ?> </td>
			</tbody>

		</table>


		<p align="left"> <strong> VII. ORGANIZATIONAL FUNDS </strong> </p>
		<table align="center" style="width: 100%" border="1">

			<tbody>
				<tr>
					<td width="50%"><strong> Accumulated Operational Funds </strong></td>	
					<td> &nbsp </td>		
				</tr>
				<tr>
					<td align="right"> Operational Fund </td>	
					<td> 
						<?php 
							if ($orgFunds) {
								echo $orgFunds[0]['operationalfunds']; 
							}
						?> 
					</td>		
				</tr>
				<tr>
					<td><strong> Accumulated Depository Funds </strong></td>	
					<td> &nbsp </td>		
				</tr>
				<tr>
					<td align="right"> Depository Fund (as of) </td>	
					<td> 
						<?php 
							if ($orgFunds) {	
								echo $orgFunds[0]['depositoryfunds']." (".$orgFunds[0]['depository_asof'].")"; 
							}
						?> 
					</td>		
				</tr>
				<tr>
					<td><strong>Other Sources of Funds (should match with Section 6, if applicable)</strong></td>	
					<td> </td>		
				</tr>
				<tr>
					<td align="right"> Participants Fee/Donation/Sponsorships</td>	
					<td> <?php echo $fundsSum; ?> </td>		
				</tr>
				<tr>
					<td align="right"  style= "background-color:#D3D3D3"><strong> Total Cash for Disbursement</strong> </td>
					<td>  </td>
				</tr>
				<tr>
					<td><strong>Less: Total Projected Expenses (should match with Section 5</strong></td>	
					<td> <?php echo $total; ?> </td>		
				</tr>
			</tbody>
			<tbody> 
				<td align="right"  style= "background-color:#D3D3D3"><strong> REMAINING BALANCE</strong> </td>
				<td> 
					<?php 
						if ($orgFunds) {
							echo $orgFunds[0]['depositoryfunds'] + $orgFunds[0]['operationalfunds'] + $fundsSum - $total; 
						}
					?> 
				</td>
			</tbody>
		</table>

		<p align="left"> <strong> VIII. PROJECTED INCOME </strong> </p>
		<table align="center" style="width: 100%" border="1">
			<thead>
				<tr>
					<td colspan="4"  style= "background-color:#D3D3D3"><strong> Projected Revenue</strong> </td>
				</tr>
				<tr>
					<th  style= "background-color:#D3D3D3"> Item </th>
					<th  style= "background-color:#D3D3D3"> Qty </th>
					<th  style= "background-color:#D3D3D3"> Selling Price </th>
					<th  style= "background-color:#D3D3D3"> Amount </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$totalIncome = 0;
					if (isset($projectedIncome)) {
						foreach($projectedIncome as $income) { ?>
							<tr>
								<td> <?php echo $income['item']; ?> </td>			
								<td> <?php echo $income['quantity']; ?> </td>
								<td> <?php echo $income['sellingprice']; ?> </td>
								<td> <?php echo $income['amount']; ?> </td>
							</tr>
					<?php 
						$totalIncome += ($income['quantity'] * $income['sellingprice']);
						}
					}
					else { ?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>

				<?php }
				?>
			</tbody>
			<thead>
				<tr>
					<td colspan="4"  style= "background-color:#D3D3D3"><strong> Less: Projected Expenses </strong></td>
				</tr>
				<tr>
					<th  style= "background-color:#D3D3D3"> Item </th>
					<th  style= "background-color:#D3D3D3"> Qty </th>
					<th  style= "background-color:#D3D3D3"> Selling Price </th>
					<th  style= "background-color:#D3D3D3"> Amount </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$totalExpense = 0;
					if (isset($projectedExpenses)) {
						foreach($projectedExpenses as $expense) { ?>
							<tr>
								<td>  <?php echo $expense['item']; ?> </td>			
								<td> <?php echo $expense['quantity']; ?> </td>
								<td> <?php echo $expense['sellingprice']; ?> </td>
								<td> <?php echo $expense['amount']; ?> </td>
							</tr>
					<?php 
						$totalEpense += ($income['quantity'] * $income['sellingprice']);
						}
					}
					else { ?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>

				<?php }
				?>
			</tbody>

			<tbody> 
				<td align="right" colspan="3"> <strong>TOTAL PROJECTED INCOME</strong> </td>
				<td colspan="1"> <?php echo $totalIncome - $totalExpense; ?> </td>
			</tbody>
		</table>

		<p align="left"> <strong> IX. PROVISIONS FOR PROFIT AND LOSS </strong> </p>
		<p align="left"  style="margin:5px"> <strong>&nbsp&nbsp&nbsp The following persons shall be held liable and will shoulder any remaining balance incurred by the project.</strong> </p><br>

		<p  style="margin:0px"> __________________________ &nbsp&nbsp&nbsp&nbsp&nbsp __________________________</p>
		<p  style="margin:0px"> <?php echo $provisions['person1']; ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $provisions['person2']; ?></p>
		<p  style="margin:2px"> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp  <?php echo $provisions['position1']; ?>   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $provisions['position2']; ?></p>


		<p align="left" style="margin:10px"> <strong>&nbsp&nbsp&nbsp Prepared by:</strong> </p><br>

		<p  style="margin:0px"> __________________________ </p>
		<p  style="margin:0px"> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp <?php echo $provisions['preparedby']; ?> </p>
		<p  style="margin:0px"> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp Position</p>


		<p align="left"  style="margin:10px"> <strong>&nbsp&nbsp&nbsp Noted by: </strong> </p><br>

		<p style="margin:0px"> __________________________ &nbsp&nbsp&nbsp&nbsp&nbsp __________________________</p>
		<p  style="margin:0px">  <?php echo $provisions['president']; ?>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $provisions['faculty']; ?> </p>
		<p style="margin:0px"> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp President &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Faculty Adviser</p>



		


	</body>
</html>