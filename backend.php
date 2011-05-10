        <?php 
        $ret = array();
        if (strstr($_SERVER['REMOTE_ADDR'], '.')) {
            $ret['protocoll'] = 'IPv4';
            $arr= preg_split('/:/', $_SERVER['REMOTE_ADDR'], -1);
            $ret['address'] = $arr[sizeof($arr)-1];
        }
        else {
            $ret['protocoll'] = 'IPv6';
            $ret['address'] = $_SERVER['REMOTE_ADDR'];
        }
        echo json_encode($ret);
        
        ?> 

