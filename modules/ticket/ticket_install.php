<?php
	$module_info['name'] = 'Ticket';
	$module_info['desc'] = 'Label stories as Accepted, Rejected, or Implemented. Adds a tag to each story to make the ticket searchable.';
	$module_info['version'] = 1.0;
	
	$module_info['db_sql'][] =  "ALTER TABLE " . table_links . " ADD `ticket_status` VARCHAR( 20 ) NOT NULL ";

?>