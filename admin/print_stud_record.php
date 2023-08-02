<?php
				include('connection.php');

				$student_number = $_REQUEST['stud_number'];

				$query=mysqli_query($conn,"SELECT * FROM `es_students` WHERE student_number = '$student_number'");
				while($row=mysqli_fetch_array($query)){
					$student_number = $row['student_number']
?>
<center>
<div style="border:0px solid #000; width:750px; font-family: arial;">
    <table border="0" style="border:0px solid #000; width:750px;">
        <tr>
            <td>
            <div style="margin-bottom:7px;">Student Number</div>
            <div style="margin-bottom:7px; font-weight:bold; font-size:3rem;"><?php echo $row['student_number']; ?></div>
            </td>
            <td align="center">
                <img src="images/logo.png" width="250">
                <h1>REGISTRATION FORM</h1>
            </td>
            <td> <img src="<?php echo $row['photo']; ?>" width="120" height="120"  style="float:right;"/></td>
        </tr>
    </table>
    <table border="0" style="border:0px solid #000; width:750px;">
    <tr>
        <td style="padding:5px; width:40%;">
            <div style="margin-bottom:7px;"><h2>Personal Information</h2></div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['lastname']; ?></div>
            <div style="margin-bottom:7px;">Lastname</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['firstname']; ?></div>
            <div style="margin-bottom:7px;">Firstname</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['middle_name']; ?></div>
            <div style="margin-bottom:7px;">Middle Name</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['cp_number']; ?></div>
            <div style="margin-bottom:7px;">CP Number</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['address']; ?></div>
            <div style="margin-bottom:7px;">Complete Address</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['school']; ?></div>
            <div style="margin-bottom:7px;">School</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['year_graduated']; ?></div>
            <div style="margin-bottom:7px;">Year Graduated</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['prev_rev_center']; ?></div>
            <div style="margin-bottom:7px;">Previous Review Center</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['no_of_times_taken']; ?></div>
            <div style="margin-bottom:7px;">No. of Times Taken</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['sex']; ?></div>
            <div style="margin-bottom:7px;">Sex</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['age']; ?></div>
            <div style="margin-bottom:7px;">Age</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['birthday']; ?></div>
            <div style="margin-bottom:7px;">Birthday</div>
            <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['marital_status']; ?></div>
            <div style="margin-bottom:7px;">Status</div>
            <div style="border:1px solid #333; padding:10px;">
                <h3>IN CASE OF EMERGENCY</h3>
                <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['name_to_contact']; ?></div>
                <div style="margin-bottom:7px;">Name</div>
                <div style="margin-bottom:7px;font-weight:bold;"><?php echo $row['relationship']; ?></div>
                <div style="margin-bottom:7px;">Relationship</div>
                <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['cp_number_of_cp']; ?></div>
                <div style="margin-bottom:7px;">CP Number</div>
            </div>
        </td>
        <td valign="top" style="float:right;">
        <?php
				include('connection.php');

				$student_number = $_REQUEST['stud_number'];

				$query=mysqli_query($conn,"SELECT * FROM `es_payments` WHERE student_id = '$student_number'");
				while($row=mysqli_fetch_array($query)){
					$student_number = $row['student_id']
					?>
          <table cellpadding="8" style="border:1px solid #333; border-collapse:collapse;">
            <tr>
                <td colspan="2" style="border:1px solid #333;">Review Fee Assessment / Payment Record</td>
            </tr>
            <tr>
                <td style="border:1px solid #333;">Fee</td>
                <td style="border:1px solid #333;">Discount</td>
            </tr>
            <tr>
                <td style="border:1px solid #333;">
                <div style="margin-bottom:7px; font-weight:bold;"><?php echo $row['downpayment']; ?></div>
                </td>
                <td style="border:1px solid #333;">
                <div style="margin-bottom:7px; font-weight:bold;">Date: <?php echo $row['or_date']; ?></div>
                <div style="margin-bottom:7px; font-weight:bold;">Amount: <?php echo $row['amount']; ?></div>
                <div style="margin-bottom:7px; font-weight:bold;">PR #: <?php echo $row['pr_number']; ?></div>
                <div style="margin-bottom:7px; font-weight:bold;">Balance: <?php echo $row['balance']; ?></div>
                </td>
            </tr>
          </table>
          <?php
				}   
			?>   
        </td>
    </tr>
    </table>
</div>
</center>
<?php } ?>