<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2008 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Title: Gr_Teamlist v2.2 for PHP-Fusion 7
| Filename: gr_teamlist_functions.php
| Author: Alexander Schilinski, 2026 (Fork von Ralf Thieme)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

// Bewusst ohne ?? und [] Syntax, damit das Script auch unter PHP 5 laeuft.

if (!function_exists("grtl_get")) {
	function grtl_get($key, $default = "") {
		return (isset($_GET[$key]) && !is_array($_GET[$key])) ? $_GET[$key] : $default;
	}
}

if (!function_exists("grtl_post")) {
	function grtl_post($key, $default = "") {
		return (isset($_POST[$key]) && !is_array($_POST[$key])) ? $_POST[$key] : $default;
	}
}

// Liefert immer ein Array, auch wenn die Abfrage keinen Datensatz findet.
if (!function_exists("grtl_fetch")) {
	function grtl_fetch($result) {
		if ($result && dbrows($result) != 0) {
			$data = dbarray($result);
			if (is_array($data)) {
				return $data;
			}
		}
		return array();
	}
}

if (!function_exists("grtl_value")) {
	function grtl_value($data, $key, $default = "") {
		return (is_array($data) && isset($data[$key])) ? $data[$key] : $default;
	}
}

if (!function_exists("grtl_alter")) {
	function grtl_alter($gebd, $gebm, $geby) {
		$gebd = (int)$gebd;
		$gebm = (int)$gebm;
		$geby = (int)$geby;
		$jahr = (int)date("Y");
		$alter = $jahr - $geby;
		if (mktime(0, 0, 0, (int)date("m"), (int)date("d"), $jahr) < mktime(0, 0, 0, $gebm, $gebd, $jahr)) {
			$alter--;
		}
		return $alter;
	}
}
?>
