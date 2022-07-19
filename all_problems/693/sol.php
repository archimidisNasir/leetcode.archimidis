
// Runtime: 12 ms
// Memory Usage: 19.3 MB



class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function hasAlternatingBits($n) {
        $n = decbin($n)."";
        for($i=0; $i<strlen($n)-1; $i++)
        {
            if(($n[$i]=="1" && $n[$i+1]=="1") || ($n[$i]=="0" && $n[$i+1]=="0"))
            {
                return false;
            }
        }
        return true;
    }
}