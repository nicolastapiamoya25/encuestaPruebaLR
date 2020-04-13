<?php

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return echo $_SERVER['HTTP_CLIENT_IP'];
           
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return echo $_SERVER['HTTP_X_FORWARDED_FOR'];
       
       return  echo $_SERVER['REMOTE_ADDR'];


?>