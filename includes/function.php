<?php 
    function redirect($to, $msg = ''){
        $location = 'location: ' . $to;

        if(!empty($msg) && strlen($msg) > 0 )
            $location .=  '?msg=' . $msg;

        header($location);
        exit();
    }

    function pr($data, $die = false){
        echo "<pre>";
        print_r($data);
        echo "</pre>";

        if($die) exit();
    }

?>