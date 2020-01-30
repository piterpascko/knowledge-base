<?php

if (session_save_path() === '') {
	// Function the return path to temp directory
	echo "Your session stored in temp storage: " . sys_get_temp_dir() . "<br />";
	// Function that save custom path for the session storage
	session_save_path('./sessions');
}

// By executing this function we initialize php session
// by default session identifier PHPSESSID but it could be changed in 
// php.ini file in directive session.name or by using function session_name()
// berfore executing session_start() function.
session_start();

// For handlign session data php use superglobal variable called $_SESSION
// it is an associative array

if (!isset($_SESSION['time'])) {
	$_SESSION['time'] = date('H:i:s');
}

echo "Your session start time is: {$_SESSION['time']} <br />";


// This function set if have parameter a folder where to save session files
// if folder doesn't set its return current path wher files is stored
// to applu this path you need to run this function before session start function
$sessionStarageFolder = session_save_path();

echo "Folder where session is stored: $sessionStarageFolder <br />";