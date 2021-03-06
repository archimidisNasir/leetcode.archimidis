
// Runtime: 22 ms
// Memory Usage: 19.7 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findPeakElement($nums) {
        if(count($nums)<3)
        {
            $index = array_keys($nums, max($nums));
            return $index[0];
        }
           
        for($i=1; $i<count($nums); $i++)
        {
            if($nums[$i]>$nums[$i+1] && $nums[$i]>$nums[$i-1])
            {
                return $i;
            }
        }
        return 0;
    }
}