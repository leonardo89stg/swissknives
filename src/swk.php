<?php

namespace Leonardo89stg\Swissknives;
/*

x
*/

class swk
{

    public function dt($date)
    {
        // Example: Convert the date to a different format
        $data = date('Y-m-d', strtotime($date));
        
        return      $data;
    }


    public function dth($date_time)
    {
        // Example: Convert the date to a different format
        $data_tempo = date('Y-m-d h:I:s', strtotime($date_time));
        
        return      $data_tempo;
    }
}
