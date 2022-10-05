<?php

// This is the code to call when you are putting a new file on a public place on the server. Only run once. 

// Requires being able to run php in .html files.

// Put in a method...

$file = 'example.html';

$html = file_get_contents($file);

$prepend_php = '<?php include_once "access-check.php"; ?>';

file_put_contents($file, $prepend_php . $html);

