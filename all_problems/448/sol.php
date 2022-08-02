
// Runtime: 174 ms
// Memory Usage: 28.1 MB



class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $out_arr = array();
        $this_arr = array();
        foreach($nums as $val)
        {
            $this_arr[$val] =1;
        }
        
        for($i=1; $i<=count($nums); $i++)
        {
            if($this_arr[$i] <1)
            {
                array_push($out_arr, $i);
            }
        }
        return $out_arr;
    }
}