
// Runtime: 298 ms
// Memory Usage: 31.7 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        sort($nums);
        for($i=0; $i<count($nums); $i++)
        {
            if($nums[$i]==$nums[$i+1])
            {
                return $nums[$i];
            }
        }
    }
}