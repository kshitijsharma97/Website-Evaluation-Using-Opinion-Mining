<?php
    // MySQL Connection
    $db = new mysqli("localhost", "root", "root", "websitefeedback");
    if ($db->connect_errno)
        echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;

    function imgsrc($scos){
        if($scos<2)
            return 'totallynegative';
        elseif($scos<3.5)
            return 'verynegative';

        elseif($scos<5)
            return 'negative';

        elseif($scos<5.5)
            return 'neutral';

        elseif($scos<7)
            return 'positive';

        elseif($scos<8.5)
            return 'verypositive';

        else
            return 'totallypositive';
    }
?>
