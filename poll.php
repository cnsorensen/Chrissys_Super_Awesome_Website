<?php

// open a file based on the voter's name
$filename = $_POST['m_name'] . "_" . date("Ymd") . ".txt";
$file = fopen($filename, "w");

// DEBUG
echo $filename;

// write the votes
// Write voter's name
fwrite($file, $_POST['m_name'] . "\n");

// Little Mermaid votes
fwrite($file, "The Little Mermaid\n");
fwrite($file, $_POST['m_ariel'] . "\n");
fwrite($file, $_POST['m_eric'] . "\n");
fwrite($file, $_POST['m_ursula'] . "\n");

// close file
fclose($file);
// good boy :)

// redirect after submitting
header("Location: submitted.html");

?>
