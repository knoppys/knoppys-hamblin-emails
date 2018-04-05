<?php
function new_candidate_application($to, $jobTitle, $telephone, $name, $lastname, $bday, $permit, $basedon, $Executive, $Temporary, $Interim, $Permanent, $discipline, $criminal, $quickmessage, $add1, $add2, $add3, $town, $postcode, $datasaved, $jobalerts, $jobRef, $job_id, $noofhours) { ob_start(); 

	
echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<CandidatePosting>
<candidate>
<method>Add</method>
<contact>
<name>
<givenname><?php echo $name; ?></givenname>
<surname><?php echo $lastname; ?></surname>
</name>
<address>
<street><?php echo $add1; ?></street>
<suburb><?php echo $add2; ?></suburb>
<district><?php echo $add3; ?></district>
<town><?php echo $town; ?></town>
<county></county>
<postalcode><?php echo $postcode; ?></postalcode>
<country>UK</country>
</address>
<phone type="home"><?php echo $telephone; ?></phone>
<phone type="cell"></phone>
<email><?php echo $to; ?></email>
<website></website>
</contact>
<personal>
<dob iso8601="<?php echo $bday; ?>"><?php echo $bday; ?></dob>
<troynote><?php echo $quickmessage; ?></troynote>
</personal>
<troyjoblist>
<troyjobid><?php echo $jobRef; ?></troyjobid>		         
</troyjoblist>
<skillrollup>
<canonskill name="WORK PERMIT" code="N" group="02" leveldescription="" levelcode=""><?php echo $permit; ?></canonskill> 
<canonskill name="IOM BASED" code="NO" group="03" leveldescription="" levelcode=""><?php echo $basedon; ?></canonskill> 

<?php /* Echo the correct value for the number of hours field */ ?>
<?php if ($noofhours == 'fulltime') { ?>
<canonskill name="Hours" code="FULLTIME" group="10" leveldescription="" levelcode="">Full Time</canonskill>';
<?php } elseif ($noofhours == 'partime') { ?>
<canonskill name="Hours" code="PARTTIME" group="10" leveldescription="" levelcode="">Part Time</canonskill>
<?php } else { ?>
<canonskill name="Hours" code="NOPREF" group="10" leveldescription="" levelcode="">No Pref</canonskill>
<?php } ?>	

<?php /* Echo the correct value for each of the following as the meta is saved as yes/no */ ?>
<?php if ($Executive == 'yes') { ?>
	<canonskill name="TYPE OF WORK" code="EXCTV" group="25" leveldescription="" levelcode="">Executive</canonskill>
<?php } ?>
<?php if ($Permanent == 'yes') { ?>
	<canonskill name="TYPE OF WORK" code="PERMNNT" group="25" leveldescription="" levelcode="">Permanent</canonskill>
<?php } ?>
<?php if ($Interim == 'yes') { ?>
	<canonskill name="TYPE OF WORK" code="SKLLBS" group="25" leveldescription="" levelcode="">Interim</canonskill> 
<?php } ?>
<?php if ($Temporary == 'yes') { ?>
	<canonskill name="TYPE OF WORK" code="TEMPRRY" group="25" leveldescription="" levelcode="">Temporary</canonskill> 
<?php } ?>

<canonskill name="Disciplinary Inter" code="NO" group="29" leveldescription="" levelcode=""><?php echo $discipline; ?></canonskill> 
<canonskill name="Unspent Convictions" code="NO" group="31" leveldescription="" levelcode=""><?php echo $criminal; ?></canonskill> 
</skillrollup> 
</candidate> 
</CandidatePosting>

	<?php $content = ob_get_clean();
	return $content;
}