<?php
namespace edinc\export\types;

require_once(__DIR__."/../Type.php");

class GetEditorIncidenceStats extends \edinc\export\Type {
    function __construct($dbname, $usertext, $startdate, $editslimit, $page, $cache) {
        parent::__construct(array("dbname" => $dbname,
                                  "usertext" => $usertext,
                                  "startdate" => $startdate,
                                  "editslimit" => $editslimit,
                                  "page" => $page,
                                  "cache" => $cache
                                  ));
    }
}

?>
