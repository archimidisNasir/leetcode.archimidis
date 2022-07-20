
// Runtime: 17 ms
// Memory Usage: 18.9 MB



class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        $arr_reminder = array();
        $this_num = $num."";
        while($this_total!=1)
        {
            $arr_nums = str_split($this_num);
            for($i=0; $i<count($arr_nums); $i++)
            {
                $this_total += intval($arr_nums[$i]);
            }
            
            if($this_total<10)
            {
                return $this_total;
            }
            
            if($arr_reminder[$this_total]==1)
            {
                return false;
            }
            else
            {
                $arr_reminder[$this_total] =1;
            }
            
            $this_num = $this_total."";
            $this_total =0;
        }
        
    }
}