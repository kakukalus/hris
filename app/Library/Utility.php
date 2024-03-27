<?php 
namespace App\Library;

class Utility {

    public static function calculate_date($start, $end)
    {
        $first_date  = strtotime($start);
        $second_date = strtotime($end);
        $offset      = $second_date-$first_date; 
        $result      = array();
        $totalData   = 0;
        for($i = 0; $i <= floor($offset/24/60/60); $i++) {
            $result[1+$i]['date'] = date('d-m-Y', strtotime($start. ' + '.$i.'  days'));
            $result[1+$i]['day'] = date('l', strtotime($start. ' + '.$i.' days'));
            $totalData += 1;
        }
        return $totalData;
    }

}

?>