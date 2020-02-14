<?php

// open file based on date
$filename = "guestbook/post_" . date("Ymd") . "_" .  date("his") . ".txt";
$file = fopen($filename, "w");

// Write posters's name and comments
fwrite($file, $_POST['m_name'] . "\n");
fwrite($file, $_POST['m_comments']);

// close file
fclose($file);
// good boy :)

// redirect after submitting
header("Location: ../index.html");

?>
