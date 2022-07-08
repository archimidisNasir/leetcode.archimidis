
// Runtime: 20 ms
// Memory Usage: 21.6 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        sort($nums);
        for($i=0; $i<count($nums); $i++)
        {
            if($nums[$i]==$nums[$i+1] && $nums[$i]==$nums[$i+2])
            {
                $i++;
                $i++;
            }
            else
            {
                return $nums[$i];
            }
        }
    }
}