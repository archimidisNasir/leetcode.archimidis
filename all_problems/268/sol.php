
// Runtime: 59 ms
// Memory Usage: 20.7 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        sort($nums);
        for($i=0; $i<=count($nums); $i++)
        {
            if($i == count($nums))
            {
                return $i;
            }
            if($nums[$i] != $i)
            {
                return $i;
            }
        }
    }
}