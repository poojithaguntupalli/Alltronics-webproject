<?php 

	function get_header() {
	require_once("includes/header.php");
	}
	
	function get_internal_header() {
	require_once("../includes/internal_header.php");
	}
	
	function get_bread_crumbs() {
	require_once("includes/bread_crumbs.php");
	}
	
	function get_sidebar() {
	require_once("includes/sidebar.php");
	}
	
	function get_internal_sidebar() {
	require_once("../includes/internal_sidebar.php");
	}
	
	function get_part($addpart) {
	require_once("includes/".$addpart);
	}
	
	function get_navbar() {
	require_once("includes/navbar.php");
	}
	
	function get_internal_navigation() {
	require_once("../includes/internal_navigation.php");
	}
	
	function get_footer() {
	require_once("includes/footer.php");
	}
	
	function get_internal_footer() {
	require_once("../includes/internal_footer.php");
	}
?>