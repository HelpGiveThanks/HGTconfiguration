<?php

	$tbg_response->setTitle(__('About %sitename%', array('%sitename%' => TBGSettings::getTBGname())));
	$tbg_response->addBreadcrumb(__('About %sitename%', array('%sitename%' => TBGSettings::getTBGname())), make_url('about'), tbg_get_breadcrumblinks('main_links'));

?>
<div class="rounded_box borderless mediumgrey" style="margin: 10px auto 0 auto; width: 500px; padding: 5px 5px 15px 5px; font-size: 13px; text-align: center;">
	<div style="text-align: left; padding: 10px;">
		<h1 style="font-size: 25px; margin-bottom: 0px; padding-bottom: 3px;">
			The Bug Genie
			<span style="font-size: 14px; font-weight: normal; color: #888;">
				<?php echo __('Version %thebuggenie_version%', array('%thebuggenie_version%' => TBGSettings::getVersion(true))); ?>
			</span>
		</h1>
		
		
		<br>
		<b>NOTE: 33 files have been changed in The Bug Genie v3.2.7.1 release and 2 added to accomplish and explain a template change entitled nitrogen.</b>
		<br>
		To compare CURRENT differences between the nitrogen template remix of TBG files and the original TBG v3.2.7.1 files, please visit <a target="_blank" href="https://github.com/virtualdavid/thebuggenie/compare/thebuggenie:branch-32...nitrogen?expand=1"> https://github.com/virtualdavid/thebuggenie/compare/thebuggenie:branch-32...nitrogen?expand=1 </a> <i>(opens in a new window)</i><br>
		<br>
		To see screenshots and read a detailed explanation about the remix go here <a target="_blank" href="http://forum.thebuggenie.com/viewtopic.php?f=9&t=1691&sid=628e6e5f3027e56f07651c066c001557"> http://forum.thebuggenie.com/viewtopic.php?f=9&t=1691&sid=628e6e5f3027e56f07651c066c001557 </a> <i>(opens in a new window)</i><br>
		<br>
		To download a copy of the template files go here <a target="_blank" href="https://sourceforge.net/projects/helpgivethanks/"> https://sourceforge.net/projects/helpgivethanks/ </a> <i>(opens in a new window)</i> The ReadME.txt file that comes with this template explains how to customize the template files for your Bug Genie, and then perform a simple drop-in replace to affect the template’s changes.<br>
		<br>	
		<br>	
		
		
		<h3 style="margin-top: 0; padding-top: 0;">Beautiful issue tracking and project management</h3>
		<?php echo __('The Bug Genie is an issue tracking system with a strong focus on being friendly &ndash; both for regular users and power users'); ?>.<br>
		<br>
		<?php echo __('The Bug Genie follows an open development model, and is released under an open source software license called the MPL (Mozilla Public License). This license gives you the freedom to pick up the sourcecode for The Bug Genie and work with it any way you need.'); ?><br>
		<br>
		<?php echo __('Extend, develop and change The Bug Genie in any way you want, and do whatever you want with the new piece of software (The only thing you cannot do is call your software The Bug Genie). Please do send us your modifications for inclusion in The Bug Genie.'); ?><br>
		<br>
		<b><?php echo __('Enjoy using The Bug Genie!'); ?></b>
	</div>
	<br>
	<a href="http://www.thebuggenie.com" target="_blank">The Bug Genie</a>, Copyright &copy; 2002 - <?php echo date('Y'); ?> <b>The Bug Genie team</b><br>
	<?php echo __('Licensed under the MPL 1.1 only, read it at %link_to_MPL%', array('%link_to_MPL%' => '<a href="http://www.opensource.org/licenses/mozilla1.1.php">opensource.org</a>')); ?>.<br>
	<br>
	<span class="faded_out">
		<?php echo __('The Bug Genie uses icons from the %link_to_iconset%', array('%link_to_iconset%' => '<a href="http://www.oxygen-icons.org">Oxygen icon set</a>')); ?>.<br>
		<?php echo __('These icons may be freely distributed under the %link_to_license%', array('%link_to_license%' => '<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0 License</a>')); ?>.
	</span>
</div>