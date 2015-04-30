<?php
namespace edinc\export\types;

require_once(__DIR__."/../Type.php");

class ResolveUser extends \edinc\export\Type {
    function __construct($userpage) {
        parent::__construct(array("userpage" => $userpage));
    }
}

?>
