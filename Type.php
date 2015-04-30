<?php
namespace edinc\export;

class Type {
    function __construct($array) {
        foreach($array as $key => $value) {
            $this->{$key} = $value;
        }
    }
}

?>
