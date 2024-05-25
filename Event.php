<?php

class Event{
    private $event_id;
    private $event_name;
    private $username;
    private $location;
    private $date;
    private $start;
    private $end;

    private $capacity;

    private $description;

    public function __construct($event_id,$event_name,$username,
    $location, $date,$start,$end, $capacity,$description){
        $this->event_id= $event_id;
        $this->username = $username;
        $this->location = $location;
        $this->date = $date;
        $this->start = $start;
        $this->end = $end;
        $this->capacity = $capacity;
        $this->description = $description;
    }
    
}

