<?php
// Execution counter
$filename = 'counter.txt';


if (!file_exists($filename)) {
    file_put_contents($filename, '0');
}

$counter = (int) file_get_contents($filename);
$counter++;

// Save changes
file_put_contents($filename, (string) $counter);

// Show Results
echo "<h1>Wellcome!</h1>";
echo "<p>This page has been executed: $counter times.</p>";
?>
