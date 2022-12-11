<?php

class DateTimeManager
{
    // Property to store the current date and time
    private $now;

    // Constructor to initialize the $now property
    public function __construct()
    {
        $this->now = new DateTime();
    }

    // Method to get the current date and time
    public function getCurrentDateTime()
    {
        return $this->now->format('Y-m-d H:i:s');
    }

    // Method to get the current date
    public function getCurrentDate()
    {
        return $this->now->format('Y-m-d');
    }

    // Method to get the current time
    public function getCurrentTime()
    {
        return $this->now->format('H:i:s');
    }

    // Method to add a number of days to the current date
    public function addDays($days)
    {
        $this->now->modify("+$days days");
        return $this;
    }

    // Method to subtract a number of days from the current date
    public function subtractDays($days)
    {
        $this->now->modify("-$days days");
        return $this;
    }
}

?>
