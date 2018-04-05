<?php
/******************************************
This file contains the varisou email bodies
*******************************************/

function candidate_application($jobTitle){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">Application Successful<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">We have received your application for the role of:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px; font-weight: bold;"><?php echo $jobTitle; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">A member of our team will be in touch with you shorlty.</span></p>									
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};

function candidate_notification($jobRef, $jobTitle, $name, $lastname, $bday, $telephone, $email){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">Hamblin Recruitment Online Vacancy application<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Vacancy reference: <?php echo $jobRef; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Vacancy job title: <?php echo $jobTitle; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Applicant name: <?php echo $name; ?> <?php echo $lastname; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Applicant DoB: <?php echo $bday; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Applicant Telephone: <?php echo $telephone; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Applicant Email: <?php echo $email; ?></span></p>									
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};

function candidate_registration($to, $telephone, $name, $lastname, $dob, $permit, $basedon, $Executive, $Temporary, $Interim, $Permanent, $discipline, $criminal, $quickmessage, $add1, $add2, $add3, $town, $postcode, $datasaved, $jobalerts, $jobRef){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">New Candidate Registration<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Candidate name: <?php echo $name; ?> <?php echo $lastname; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Candidate email: <?php echo $to; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Candidate telephone: <?php echo $telephone; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Message:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $quickmessage; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Date of Birth:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $dob; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Do I need a work permit:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $permit; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Am I based on the Isle of Man:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $basedon; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Executive positions? <?php if ($Executive == 'yes'){echo 'Yes';} else {echo 'No';} ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Temporary positions? <?php if ($Temporary == 'yes'){echo 'Yes';} else {echo 'No';} ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Interim positions? <?php if ($Interim == 'yes'){echo 'Yes';} else {echo 'No';} ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Permanent positions? <?php if ($Permanent == 'yes'){echo 'Yes';} else {echo 'No';} ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Disciplinary:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $discipline; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Criminal:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $criminal; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">PERSONAL DETAILS:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Address line 1:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $add1; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Address line 2:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $add2; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Address line 3:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $add3; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Town:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $town; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Postcode:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $postcode; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Can Hamblin save your data:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $datasaved; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;">Can Hamblin send you job alerts:</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: left"><span style="font-size: 18px; line-height: 27px;"><?php echo $jobalerts; ?></span></p>

									

								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};


function new_user_registration($name, $email, $password) { ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">New Candidate Registration<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Welcome to Hamblin Employment Group</span></p>									
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">--------</span></p>	
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Your login details:</span></p>									
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Username: <?php echo $email; ?></span></p>									
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Password: <?php echo $password; ?></span></p>																		
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};

function new_talent_form($name, $number, $company, $email, $message){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">New Talent Form Submission<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">An employer is looking for a new candidate</span></p>	
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">--------</span></p>		
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Contact Name: <?php echo $name; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Company: <?php echo $company; ?></span></p>	
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Contact Number: <?php echo $number; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Contact Email: <?php echo $email; ?></span></p>							
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Message:</span></p>	
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;"><?php echo $message; ?></span></p>																											
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};


function new_job_notification($name, $jobtitle, $url){ ob_start(); ?>

	<div style="background-color:#E3E8E5;">
		<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">
				<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#E3E8E5;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
				<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
				<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
					<div style="background-color: transparent; width: 100% !important;">
						<!--[if (!mso)&(!IE)]><!-->
						<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
							<!--<![endif]-->
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;"><![endif]-->
							<div style="font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;color:#555555;line-height:150%; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 5px;">
								<div style="font-size:12px;line-height:18px;color:#555555;font-family:'Roboto', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 24px; line-height: 36px;"><strong><span style="line-height: 36px; font-size: 24px;"><span style="line-height: 36px; font-size: 24px;">New Vacancy<br></span></span></strong></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Hi <?php echo $name; ?>.</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">Here is a vacancy you may be interested in.</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px; font-weight: bold;"><?php echo $jobtitle; ?></span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;">--------</span></p>
									<p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 18px; line-height: 27px;"><a href="<?php echo $url; ?>">View on our website</a></span></p>									
								</div>
							</div><!--[if mso]></td></tr></table><![endif]-->
							<!--[if (!mso)&(!IE)]><!-->
						</div><!--<![endif]-->
					</div>
				</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};
