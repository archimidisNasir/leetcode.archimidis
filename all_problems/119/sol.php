
// Runtime: 11 ms
// Memory Usage: 19.7 MB



class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        
        $arr_out = array();
        array_push($arr_out, 1);
        if($rowIndex==0)
        {
            return $arr_out;
        }
        array_push($arr_out, 1);
        if($rowIndex==1)
        {
            return $arr_out;
        }
        
        
        
        $rowIndex +=1;
        
        $arr_last_row = array();
        array_push($arr_last_row, 1);
        array_push($arr_last_row, 1);
        
        for($i=2; $i<$rowIndex; $i++)
        {
            $arr_this_row = array();
            array_push($arr_this_row, 1);
            for($j=0; $j<$i; $j++)
            {
                if($arr_last_row[$j+1]!="")
                {
                    $sum = $arr_last_row[$j] + $arr_last_row[$j+1];
                    array_push($arr_this_row, $sum);
                }
            }
            array_push($arr_this_row, 1);
            $arr_out = $arr_this_row;
            $arr_last_row = $arr_this_row;
        }
        
        return $arr_out;
        
    }
}