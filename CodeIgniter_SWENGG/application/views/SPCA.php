<style>
fieldset {
    display:inline-block;
}
</style>

<html>
<head></head>
<body>
    <img src="<?php echo base_url();?>headers/SPCAHeader.png" id="afHeader"> <br>
    <br>

    <fieldset style="width:570px">
    	<small>
    	<b> IMPORTANT - PLEASE READ FIRST!</b>
    	1. This form is used ONLY for requesting permission for <b>ACCESS OF PERSONS</b> into the campus.<br>
    	2.This form will be accepted only within the office hours (Mon to Fri: 8:00am to 12:00pm and 1:30 to 5:00pm)
    	3. This form must be submitted at the Security Office (J108) <b> no later than two (2) working days </b> before the requested date of campus access. (Saturday is not counted as a working day for this purpose) <br>
    	4. This form is considered an application only unless a final decision is made and indicated on this form.<br>
    	5. Clinics in campus are open from 06:00 am to 10:00pm, Mondays to Saturdays.</small>


    </fieldset>
    <fieldset style="width:130px"><b>&nbsp;&nbsp;&nbsp;Receive Stamp </b><br><br><br><br><br><br> </fieldset>



    <h4 align="center"> SPECIAL PERMIT FOR CAMPUS ACCESS (SPCA) </h4>
	<b> Office/Organization: </b> <?php foreach($groups as $row){ echo $row->name;}?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<b> Name of Requesting Party/Position: </b><?php foreach($groups as $row){ echo $row->requestedby;}?><br>
	
    <table id="table" border="1">
        <thead>
            <tr>
                <th width='13%'> Office/Location </th>
                <th width='13%'> Telephone No </th>
                <th width='13%'> Mobile Number </th>
                <th width='13%'> ID Number</th>
                <th width='13%'> Email Address </th>
            </tr>
        </thead>
        <tbody>
            <tr>
				<td  width='13%' align="center">
				<?php 
					foreach($groups as $row)
					{ 
						echo $row->office;
					}
				?>
				</td>
                <td  width='13%' align="center">
				<?php 
					foreach($groups as $row)
					{ 
						echo $row->telephone;
					}
				?>
				</td>
                <td  width='13%' align="center">
				<?php 
					foreach($groups as $row)
					{ 
						echo $row->mobile;
					}
				?>
				</td>
                <td  width='13%' align="center">
				<?php 
					foreach($groups as $row)
					{ 
						echo $row->IDno;
					}
				?>
				</td>
                <td  width='13%' align="center">
				<?php 
					foreach($groups as $row)
					{ 
						echo $row->email;
					}
				?>
				</td>
            </tr>
          
        </tbody>
    </table>
	<br>
	<center><b> <u>REQUEST DETAILS</u></b></center>
	<b> Activity Title: </b><?php foreach($groups as $row){ echo $row->title;}?><br>
	<center><b>Activity</b></center>
    <table id="table" border="1">
        <thead>
            <tr>
                <th width='13%'> Request Number </th>
                <th width='13%'> Start Date </th>
                <th width='13%'> Start Time </th>
                <th width='13%'> End Date </th>
                <th width='13%'> End Time </th>
                <th width='13%'> Venue </th>
            </tr>
        </thead>
        <tbody>
            <?php
									$counter=1;
									
									foreach($groups2 as $row)
									{
										echo '<tr>';
										
										echo '<td width="13%" align="center">';
										echo $counter;
										echo '</td>';
										
										echo '<td width="13%" align="center">';
										echo $row->startdate;
										echo '</td>';
										
										echo '<td width="13%" align="center">';
										echo $row->enddate;
										echo '</td>';
										
										echo '<td width="13%" align="center">';
										echo $row->starttime;
										echo '</td>';
										
										echo '<td width="13%" align="center">';
										echo $row->endtime;
										echo '</td>';
										
										echo '<td width="13%" align="center">';
										echo $row->venue;
										echo '</td>';
										
										echo '</tr>';
										
										$counter++;
									}
								?>
        </tbody>
    </table>
	<b>Total number of Persons:</b><?php foreach($groups as $row){ echo $row->ENP;}?>&nbsp;&nbsp;&nbsp; <b>With Outsiders? </b><br>
	<b>Faculty-In-Charge(for student activities): </b><?php foreach($groups as $row){ echo $row->facultyincharge;}?><br>

	<br>
	<center><b> List of Persons to be Covered by Special Permit</b></center>
    <table id="table" border="1">
        <thead>
            <tr>
                <th width='13%'> Name (Last, First, Middle) </th>
                <th width='13%'> Classification </th>
                <th width='13%'> Mobile/Email Address </th>
            </tr>
        </thead>
        <tbody>
           <?php
									foreach($groups3 as $row)
									{
										echo '<tr>';
										
										echo '<td width="13%" align="center">';
										echo $row->lastname;
										echo ', ';
										echo $row->firstname;
										echo ' ';
										echo $row->middle;
										echo '.';
										echo '</td>';
										
										echo '<td width="13%" align="center">';
										echo $row->classification;
										echo '</td>';
										
										echo '<td width="13%" align="center">';
										echo $row->mobile;
										echo ' / ';
										echo $row->email;
										echo '</td>';
										
										echo '</tr>';
									}
								?>
        </tbody>
    </table>

    <br>
   	Requesting Party: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supervising Administrator:<br>
	&nbsp;&nbsp;__________________________ &nbsp;&nbsp; &nbsp;&nbsp;______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________ &nbsp;&nbsp; &nbsp;&nbsp;______________<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature Over Printed Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Signature Over Printed Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Date<br><br>
	<hr>
	<center><b>APPROVAL</b></center>
	<table id="table" border="1">
        <thead>
            <tr>
                <th width='13%'> Approval Endorsement</th>
                <th width='13%'> Approval </th>
                <th width='13%'> Conditions </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td  width='13%' align="center"> Director, Security Office</td>
                <td  width='13%' align="center"> Vice Chancellor for Administration &nbsp;&nbsp;&nbsp;&nbsp;_________________________<br>Dr Arnel Onesimo A. Uy</td>
                <td  width='13%'> <input type="checkbox">&nbsp;&nbsp;No Aircon &nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp; Entry Only <br><input type="checkbox">&nbsp;&nbsp;Others:________________ </td>
            </tr>
        </tbody>
    </table>
	<br><br>
	<small>1. Pre-registered visitors will be requested to <u>present</u> a valid ID. To facilitate entry and avoid delays due to verification, it is advisable to have a copy of the approved form for the presentation at the gate. For concerns regarding entry, please call (02) 524-4611, local 444.<br>
	2. A copy of the approved form must be readily available for presentation.</small>
</body>
</html>