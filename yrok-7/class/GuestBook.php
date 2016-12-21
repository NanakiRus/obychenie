<?php

class GuestBook
{
    protected $link;
    protected $objArr = [];

    public function __construct($path)
    {
        $this->link = $path;
        $this->arr = file($this->link, FILE_IGNORE_NEW_LINES);
        foreach ($this->arr as $record) {
            $this->objArr[] = new GuestBookRecords($record);
        }
    }

    public function getData()
    {
        return $this->objArr;
    }

}