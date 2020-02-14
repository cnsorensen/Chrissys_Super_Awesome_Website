<?php
// time
//$todaydate = date("H.i.s");
// date
//date("Y-m-d");

// open a file based on the poster's name
$filename = "guestbook/post_" . date("Ymd") . "_" .  date("his") . ".txt";
//$filename = "BOB.txt";
$file = fopen($filename, "w");

// write the votes
// Write posters's name and comments
fwrite($file, $_POST['m_name'] . "\n");
fwrite($file, $_POST['m_comments']);
//fwrite($file, "\nbobobobobo");

// close file
fclose($file);
// good boy :)

// redirect after submitting
header("Location: ../index.html");

?>
