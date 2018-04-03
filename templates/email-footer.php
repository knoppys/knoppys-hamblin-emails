<?php
/**************************************
This is the email footer for all emails
***************************************/
function email_footer() { ob_start(); ?>
	
	
		<div style="background-color:transparent;">
			<div class="block-grid" style="Margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;width: calc(29000% - 179200px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
				<div style="border-collapse: collapse;display: table;width: 100%;">
					<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 600px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->
					<!--[if (mso)|(IE)]><td align="center" width="598" style=" width:598px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 1px solid #00a9e0; border-left: 1px solid #00a9e0; border-bottom: 1px solid #00a9e0; border-right: 1px solid #00a9e0;" valign="top"><![endif]-->
					<div class="col num12" style="min-width: 320px;max-width: 600px;width: 598px;width: calc(28000% - 167400px);background-color: transparent;">
						<div style="background-color: transparent; width: 100% !important;">
							<!--[if (!mso)&(!IE)]><!-->
							<div style="padding-right: 0px; padding-left: 0px; padding-top:10px; padding-bottom:10px;text-align: center;">
							<a href="<?php echo get_site_url(); ?>/register">Update your notification settings</a>
								<!--<![endif]-->
								&#160; <!--[if (!mso)&(!IE)]><!-->
							</div><!--<![endif]-->
						</div>
					</div><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
				</div>
			</div>
		</div>
		
		</div><!--[if (mso)|(IE)]></td></tr></table><![endif]-->
	</div><!--[if (mso)|(IE)]></div><![endif]-->

</body>
</html>
	
<?php $content = ob_get_clean();
    return $content;

};