<?php

namespace Leonardo89stg\Swissknives;


class start
{

    public function dt($date)
    {
        // Example: Convert the date to a different format
        $data = date('Y-m-d', strtotime($date));
        
        return      $data;
    }
}
