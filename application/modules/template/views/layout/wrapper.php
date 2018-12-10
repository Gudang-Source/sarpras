<?php
	require_once('header.php');
	
	if ($this->session->userdata('role')==='Pic') {
		require_once('menu_pic.php');
	}else {
		require_once('menu.php');
	}
	require_once('content.php');
	require_once('footer.php');
?>