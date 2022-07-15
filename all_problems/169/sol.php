
// Runtime: 86 ms
// Memory Usage: 25.1 MB




class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $arr_count = array();
        $len = count($nums);
        for($i=0; $i<$len; $i++)
        {
            $arr_count[$nums[$i]]++;
        }
        
        foreach ($arr_count as $keyy=>$value) 
        {
            if($value>floor($len/2))
            {
                return $keyy;
            }
        }
    }
}