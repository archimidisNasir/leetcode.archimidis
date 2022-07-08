
// Runtime: 320 ms
// Memory Usage: 31.9 MB



class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function peakIndexInMountainArray($arr) {
        for($i=1; $i<count($arr); $i++)
        {
            if($arr[$i]>$arr[$i+1] && $arr[$i]>$arr[$i-1])
            {
                return $i;
            }
        }
        return 0;
        
    }
}