<?php
$counterFile = "counter.txt";

// Read current count
$visits = file_exists($counterFile) ? (int)file_get_contents($counterFile) : 0;
$visits++;

// Save updated count
file_put_contents($counterFile, $visits);

// Return count as JSON
echo json_encode(["value" => $visits]);
?>
