
// Runtime: 22 ms
// Memory Usage: 20.2 MB




class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        
        for($i=0; $i<count($nums); $i++)
        {
            if($target<$nums[$i])
            {
                return $i;
            }
            if($target==$nums[$i])
            {
                return $i;
            }
            if($target>$nums[$i] && $target<$nums[$i+1])
            {
                return $i+1;
            }
            if($target>$nums[$i] && $i==(count($nums)-1))
            {
                return $i+1;
            }
        }
    }
}