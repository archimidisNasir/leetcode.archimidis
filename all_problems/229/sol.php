
// Runtime: 54 ms
// Memory Usage: 23.8 MB




class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function majorityElement($nums) {
        $arr_out = array();
        $arr_count = array();
        $len = count($nums);
        for($i=0; $i<$len; $i++)
        {
            $arr_count[$nums[$i]]++;
        }
        
        foreach ($arr_count as $keyy=>$value) 
        {
            if($value>floor($len/3))
            {
                array_push($arr_out,$keyy);
            }
        }
        return $arr_out;
    }
}