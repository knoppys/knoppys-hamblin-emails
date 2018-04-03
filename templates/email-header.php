<?php
/****************************
Email header for all emails. 
****************************/
function email_header(){ ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width" name="viewport"><!--[if !mso]><!-->
	<meta content="IE=edge" http-equiv="X-UA-Compatible"><!--<![endif]-->
	<title>Hamblin Employment Group</title><!--[if !mso]><!== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css"><!--<![endif]-->

	<style id="media-query" type="text/css">
	     body {
	 margin: 0;
	 padding: 0; }

	table, tr, td {
	 vertical-align: top;
	 border-collapse: collapse; }

	.ie-browser table, .mso-container table {
	 table-layout: fixed; }

	* {
	 line-height: inherit; }

	a[x-apple-data-detectors=true] {
	 color: inherit !important;
	 text-decoration: none !important; }

	[owa] .img-container div, [owa] .img-container button {
	 display: block !important; }

	[owa] .fullwidth button {
	 width: 100% !important; }

	[owa] .block-grid .col {
	 display: table-cell;
	 float: none !important;
	 vertical-align: top; }

	.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
	 width: 600px !important; }

	.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
	 line-height: 100%; }

	.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
	 width: 200px !important; }

	.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
	 width: 400px !important; }

	.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
	 width: 300px !important; }

	.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
	 width: 200px !important; }

	.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
	 width: 150px !important; }

	.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
	 width: 120px !important; }

	.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
	 width: 100px !important; }

	.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
	 width: 85px !important; }

	.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
	 width: 75px !important; }

	.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
	 width: 66px !important; }

	.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
	 width: 60px !important; }

	.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
	 width: 54px !important; }

	.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
	 width: 50px !important; }

	@media only screen and (min-width: 620px) {
	 .block-grid {
	   width: 600px !important; }
	 .block-grid .col {
	   display: table-cell;
	   Float: none !important;
	   vertical-align: top; }
	   .block-grid .col.num12 {
	     width: 600px !important; }
	 .block-grid.mixed-two-up .col.num4 {
	   width: 200px !important; }
	 .block-grid.mixed-two-up .col.num8 {
	   width: 400px !important; }
	 .block-grid.two-up .col {
	   width: 300px !important; }
	 .block-grid.three-up .col {
	   width: 200px !important; }
	 .block-grid.four-up .col {
	   width: 150px !important; }
	 .block-grid.five-up .col {
	   width: 120px !important; }
	 .block-grid.six-up .col {
	   width: 100px !important; }
	 .block-grid.seven-up .col {
	   width: 85px !important; }
	 .block-grid.eight-up .col {
	   width: 75px !important; }
	 .block-grid.nine-up .col {
	   width: 66px !important; }
	 .block-grid.ten-up .col {
	   width: 60px !important; }
	 .block-grid.eleven-up .col {
	   width: 54px !important; }
	 .block-grid.twelve-up .col {
	   width: 50px !important; } }

	@media (max-width: 620px) {
	 .block-grid, .col {
	   min-width: 320px !important;
	   max-width: 100% !important; }
	 .block-grid {
	   width: calc(100% - 40px) !important; }
	 .col {
	   width: 100% !important; }
	   .col > div {
	     margin: 0 auto; }
	 img.fullwidth {
	   max-width: 100% !important; } }

	</style>
</head>
<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #E3E8E5">
	<!--[if IE]><div class="ie-browser"><![endif]-->
	<!--[if mso]><div class="mso-container"><![endif]-->
	<div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #E3E8E5">
		<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #E3E8E5;"><![endif]-->
		<div style="background-color:transparent;">
			<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
				<div style="border-collapse: collapse;display: table;width: 100%;">
					<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->
					<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
					<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: transparent;">
						<div style="background-color: transparent; width: 100% !important;">
							<!--[if (!mso)&(!IE)]><!-->
							<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
								<!--<![endif]-->
								<div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
									<!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
									<div align="center">
										<div style="border-top: 0px solid transparent; width:100%; line-height:0px; height:0px; font-size:0px;">
											&#160;
										</div>
									</div><!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
								</div><!--[if (!mso)&(!IE)]><!-->
							</div><!--<![endif]-->
						</div>
					</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
				</div>
			</div>
		</div>
		<div style="background-color:transparent;">
			<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #00a9e0;">
				<div style="border-collapse: collapse;display: table;width: 100%;">
					<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#00a9e0;"><![endif]-->
					<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
					<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #00a9e0;">
						<div style="background-color: transparent; width: 100% !important;">
							<!--[if (!mso)&(!IE)]><!-->
							<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
								<!--<![endif]-->
								<div style="padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px;">
									<!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px;padding-left: 0px; padding-top: 0px; padding-bottom: 0px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
									<div align="center">
										<div style="border-top: 0px solid transparent; width:100%; line-height:0px; height:0px; font-size:0px;">
											&#160;
										</div>
									</div><!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
								</div><!--[if (!mso)&(!IE)]><!-->
							</div><!--<![endif]-->
						</div>
					</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
				</div>
			</div>
		</div>
		<div style="background-color:transparent;">
			<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
				<div style="border-collapse: collapse;display: table;width: 100%;">
					<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:#FFFFFF;"><![endif]-->
					<!--[if (mso)|(IE)]><td align="center" width="600" style=" width:600px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
					<div class="col num12" style="min-width: 320px;max-width: 600px;width: 600px;width: calc(28000% - 167400px);background-color: #FFFFFF;">
						<div style="background-color: transparent; width: 100% !important;">
							<!--[if (!mso)&(!IE)]><!-->
							<div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
								<!--<![endif]-->
								<div align="center" class="img-container center" style="padding-right: 0px; padding-left: 0px;">
									<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
									<div style="line-height:5px;font-size:1px">
										&#160;
									</div><img align="center" alt="Hamblin Employment Group" border="0" class="center" src="<?php echo get_template_directory_uri(); ?>/images/logo.gif" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 193px" title="Image" width="193"><!--[if mso]></td></tr></table><![endif]-->
								</div><!--[if (!mso)&(!IE)]><!-->
							</div><!--<![endif]-->
						</div>
					</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
				</div>
			</div>
		</div>			
<?php $content = ob_get_clean();
    return $content;

};