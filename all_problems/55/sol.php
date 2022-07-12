
Runtime: 265 ms
Memory Usage: 20.5 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $can_jump =$nums[0];
        for($i=0; $i<count($nums); $i++)
        {
            if($can_jump<=$nums[$i])
            {
                $can_jump = $nums[$i];
            }
            if($can_jump==0 && $i<count($nums)-1)
            {
                return false;
            }
            $can_jump--;
        }
        return true;
    }
}