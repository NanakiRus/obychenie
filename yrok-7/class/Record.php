<?php

class Record extends GuestBook
{
    public function append(GuestBookRecords $text)
    {
        $this->objArr[] = $text;
    }

    public function save()
    {
        foreach ($this->getData() as $text) {
            $arr[] = $text->getText();
        }
        $put = implode("\r\n", $arr);
        file_put_contents($this->link, $put);
    }

}