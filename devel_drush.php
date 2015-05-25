<?php

$site_folder = $_SERVER['DOCUMENT_ROOT'] . '/' . conf_path();
// Go to site folder.
$command = 'cd' . $site_folder . '; ';
// Specific drush command.
$command .= 'drush -v';
// Call external console function.
$result = shell_exec($command);

// Print command.
dsm($command);
// Print result.
dsm($result);
