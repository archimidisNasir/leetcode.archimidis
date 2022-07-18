
// Runtime: 111 ms
// Memory Usage: 30.7 MB



class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $len = count($nums);
        if($k>$len)
        {
            $k = $k % $len;
        }
        
        $temp_val =0;
        $out_arr = array();
        for($j=$len-$k; $j<$len; $j++)
        {
            array_push($out_arr,$nums[$j]);
        }
        for($j=0; $j<$len-$k; $j++)
        {
            array_push($out_arr,$nums[$j]);
        }
        $nums = $out_arr;
        return $nums;
    }
}