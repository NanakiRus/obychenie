<?php

class Record extends GuestBook
{
    public function add(GuestBookRecords $text)
    {
        $this->objArr[] = $text;
    }

    public function save($arr)
    {
        $put = implode("\r\n", $arr);
        file_put_contents($this->link, $put);
    }


}