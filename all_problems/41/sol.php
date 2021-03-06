
// Runtime: 597 ms
// Memory Usage: 58 MB




class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function firstMissingPositive($nums) {
        sort($nums);
        $start =0;
        $j=1;
        
        if(count($nums)==1 && $nums[0]<1)
        {
            return $j;
        }
        
        for($i=0; $i<count($nums); $i++)
        {
            if($nums[$i] >0 && $nums[$i]!=$nums[$i-1])
            {   
                if($nums[$i] != $j)
                {
                    return $j;
                }
                else
                {
                    $j++;
                }
                
            }
        }
        return $j;
    }
}