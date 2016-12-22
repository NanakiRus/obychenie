<?php

class Uploader
{

    public $field;

    public function __construct($field)
    {
        if (isset($_FILES[$field])) {
            $this->field = $_FILES[$field];
        }
    }

    public function isUploaded()
    {
        if (isset($this->field)) {
            if (0 == $this->field['error']) {
                if ($this->field['type'] == 'image/jpeg' || $this->field['type'] == 'image/png') {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    public function upload($path)
    {
        if ($this->isUploaded() == true) {
            move_uploaded_file($this->field['tmp_name'], $path . iconv('UTF-8', 'windows-1251', $this->field['name']));
            return true;
        } else {
            return false;
        }
    }

}