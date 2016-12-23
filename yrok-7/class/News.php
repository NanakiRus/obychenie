<?php

class News
{
    protected $link;
    protected $objArr = [];

    public function __construct($path)
    {
        $this->link = $path;
        $news = file($this->link, FILE_IGNORE_NEW_LINES);
        foreach ($news as $string) {
            $string = explode(' -> ', $string);
            $this->objArr[] = new Article($string[0], $string[1], $string[2]);
        }
    }

    public function getData()
    {
        return $this->objArr;
    }

    public function getDataById($id)
    {
        if (isset($this->objArr[$id])) {
            return $this->objArr[$id];
        } else {
            return false;
        }
    }

}