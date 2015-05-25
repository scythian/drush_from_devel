<?php

$command = array();
// Go to site folder.
$command[] = 'cd' . $_SERVER['DOCUMENT_ROOT'] . '/' . conf_path() . ';';
// Specific drush command.
$command[] = 'drush cc all';
// Run in background mode.
$command[] = '> /dev/null 2>&1 &';
$command = implode(' ', $command);

// Call external console function.
$result = shell_exec($command);

// Print command.
dsm($command);
// Print result.
dsm($result);
