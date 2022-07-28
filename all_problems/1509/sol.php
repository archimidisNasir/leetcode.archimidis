
// Runtime: 169 ms
// Memory Usage: 31 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minDifference($nums) {
        sort($nums);
        $len = count($nums);
        
        if($len<=4)
        {
            return 0;
        }
        
        $out = min($nums[$len-4]-$nums[0], min($nums[$len-3]-$nums[1], min($nums[$len-2]-$nums[2], $nums[$len-1]-$nums[3])));
        
        return $out;
        
    }
}