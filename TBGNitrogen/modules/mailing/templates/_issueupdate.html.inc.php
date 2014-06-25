<div style="font-family: 'Trebuchet MS', 'Liberation Sans', 'Bitstream Vera Sans', 'Luxi Sans', Verdana, sans-serif; font-size: 11px; color: #333;">
	Hi, %user_buddyname%!<br>
	<?php echo $issue->getFormattedTitle(true); ?> was updated by <?php echo $updated_by->getName(); ?>.<br>
	<br>
	<?php echo tbg_parse_text($comment); ?>
	<br>
	<div style="color: #888;">
	--
	<br>
	
	
	
<?php //  111111111111111111111111111111111  ?>		
	
<?php // Replace YOURSITE.COM with your site's url. ?>		
	Show issue: <?php echo link_tag("http://YOURSITE.COM".make_url('viewissue', array('project_key' => $issue->getProject()->getKey(), 'issue_no' => $issue->getFormattedIssueNo()))); ?><br>
	



<?php //  2222222222222222222222222222222222  ?>		
	
<?php // Replace YOURSITE.COM with your site's url. ?>		
	Show <?php echo $issue->getProject()->getName(); ?> project dashboard: <?php echo link_tag("http://YOURSITE.COM".make_url('project_dashboard', array('project_key' => $issue->getProject()->getKey()))); ?>	</div>
</div>