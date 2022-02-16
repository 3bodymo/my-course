<?php

class CustomTemplate {

    public $lock_file_path;

/*
    public function __construct($template_file_path) {
        $this->template_file_path = $template_file_path;
        $this->lock_file_path = $template_file_path . ".lock";
    }


    function __destruct() {
        // Carlos thought this would be a good idea
        if (file_exists($this->lock_file_path)) {
            unlink($this->lock_file_path);
        }
    }
*/
}

$obj = new CustomTemplate();
$obj->lock_file_path = "/home/carlos/morale.txt";

echo serialize($obj);

?>