<?php

class GuestBookRecords
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getAllText()
    {
        return $this->text;
    }

}