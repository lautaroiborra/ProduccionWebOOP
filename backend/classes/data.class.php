<?php
class Data{
    private $path;

    public function __construct($path){
        $this->path = $path;
}

    public function readData($field, $value){
        $handle = fopen($this->path, 'r');
        $data = fread($handle);
        $data = json_decode($data, true);

        foreach($data as $key => $value){
            //if()
        }
    }



}