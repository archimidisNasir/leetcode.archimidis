
// Runtime: 16 ms
// Memory Usage: 18.9 MB



class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function threeConsecutiveOdds($arr) {
        $len = count($arr);
        if($len<3)
        {
            return false;
        }
        for($i=0; $i<=$len-3; $i++)
        {
            if($arr[$i]%2==1 && $arr[$i+1]%2==1 && $arr[$i+2]%2==1)
            {
                return true;
            }
        }
        return false;
    }
}