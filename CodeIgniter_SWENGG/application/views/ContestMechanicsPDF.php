<html>
	<head>
	<font color="green">	<p style="font-size:10px"> Guidelines:</p>
		<p style="font-size:10px"> 1.	Your organization’s/ unit’s header must be placed in this area. </p>
		<p style="font-size:10px"> 2.	No sections in this proposal are to be omitted. There are a total of 6 sections; each has to be filled- out, except if the contest is not academic in nature. </p>
		<p style="font-size:10px"> 3.	For academic contests, do not forget the endorsement of the Department Chair/ Vice Dean. </p> </font>
	</head>
	<body>
	
	<p align="center"> <strong> CONTEST MECHANICS </strong> </p>

	<p><strong> <u> 1.ACTIVITY DETAILS </u> </strong></p>

	<table style="width: 100%" border="1" align="center">
		<tbody>
			<tr>
				<td colspan="1"  style= "background-color:#D3D3D3"> Title of Activity </td>
				<td colspan="5"> <?php echo $activityDetails[0]['title']; ?> </td>
			</tr>
			</tbody>
			
			<tbody> 
			<tr>
				<td colspan="1"  style= "background-color:#D3D3D3"> Nature </td>
				<td colspan="2"> <?php echo $activityDetails[0]['activitynature']; ?> </td>
				<td colspan="1"> ENP </td>
				<td colspan="2"> <?php echo $activityDetails[0]['ENP']; ?> </td>
			</tr>

			<tr>
				<td  style= "background-color:#D3D3D3"> Date </td>
				<td>
					 <?php 
                        $startDate = new DateTime($activityDetails[0]['startdate']); 
                        $startDate = date_format($startDate, 'F j, Y');

                        $endDate = new DateTime($activityDetails[0]['enddate']); 
                        $endDate = date_format($endDate, 'F j, Y');

                        echo $startDate." - ".$endDate;
                    ?> 
				</td>
				<td> Time </td>
				<td> <?php echo $activityDetails[0]['starttime']." - ".$activityDetails[0]['endtime'];?> </td>
				<td> Venue </td>
				<td> <?php echo $activityDetails[0]['venue']; ?> </td>
			</tr>
			<tr align="center">
			<td class= "white" colspan="6" width="100%"  style= "background-color:#000000"> <font color="#FFFFFF">Project Head/s</font></td>
			</tr>
			<?php
				foreach($projectheads as $head) { ?>
					<tr>
						<td colspan="1"  style= "background-color:#D3D3D3"> Name </td>
						<td colspan="2"> <?php echo $head['name']; ?> </td>
						<td colspan="1"> Contact Number</td>
						<td colspan="2"> <?php echo $head['contactnumber']; ?> </td>
					</tr>
			<?php }
			?>
		</tbody>
	</table>

	<p><strong> <u> 2.GENERAL GUIDELINES</u> </strong></p>
	<ul>
		 <?php   
            foreach($guidelines as $guidelines) {
                echo "<li><strong> {$guidelines['guidelines']} </strong></li>";
            }
        ?>
	</ul>

	<p><strong> <u> 3. MECHANICS</u> </strong></p>
	<strong>State the rules for the contest</strong>
	<ol>
		 <?php
            foreach($mechanics as $mechanics) { ?>
                <li> <?php echo $mechanics['mechanics']; ?> </li>
        <?php 
            } //END FOREACH LOOP
        ?>
	</ol>

	<p><strong> <u> 4.CRITERIA FOR JUDGING</u> </strong></p> 
	<ol>
		 <?php                                
            foreach($criteria as $criteria) { ?>
            <li> <?php echo $criteria['criteria']; ?></li>
        <?php }
        ?>
	</ol>

	
	<p><strong> <u> 5. LIST OF JUDGES </u> </strong></p>

	<table style="width: 100%" border="1" align="center">
		<thead>
			<th  style= "background-color:#D3D3D3"> Name </th>
			<th  style= "background-color:#D3D3D3"> Affiliation </th>
		</thead>

		<tbody>
			<?php
				foreach($judges as $judges) { ?>
					<tr> 
						<td> <?php echo $judges['name']; ?> </td>
						<td>&nbsp </td>
					</tr>
			<?php }
			?>
		</tbody>
	</table>

	<p><strong> <u> 6. LIST OF QUESTIONS (for Academic Contests) </u> </strong></p>
	<ol>
		<?php
			if (isset($questions)) {
	            foreach($questions as $question) { ?>
	                <li> <?php echo $question['question']; ?> </li>
	            <?php
	        	}
			}
		?>
	</ol>


	<p> <h3> ENDORSMENT BY DEPARTMENT CHAIR </h3></p>
	
	<table  style="width: 100%" border="1" align="center">
		<tr>
			<td colspan="2" style=" height: 50px;">&nbsp</td>
			<td colspan="2" style=" height: 50px;">&nbsp </td>
			<td colspan="2" style=" height: 50px;">&nbsp </td>
		</tr>
		<tfoot>
			<td colspan="2"  style= "background-color:#D3D3D3"> Signature above Printed Name </td>
			<td colspan="2"  style= "background-color:#D3D3D3"> Department </td>
			<td colspan="2"  style= "background-color:#D3D3D3"> Date Signed </td>
		</tfoot>
	</table>

	</body>
</html>