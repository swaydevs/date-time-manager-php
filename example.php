<?php
include('DateTimeManager-class.php');

$manager = new DateTimeManager();

// Get the current date and time
echo $manager->getCurrentDateTime();

// Get the current date
echo $manager->getCurrentDate();

// Get the current time
echo $manager->getCurrentTime();

// Add 10 days to the current date
$manager->addDays(10);

// Subtract 5 days from the current date
$manager->subtractDays(5);

?>
