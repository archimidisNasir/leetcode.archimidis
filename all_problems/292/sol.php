
// Runtime: 0 ms
// Memory Usage: 19.2 MB



class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function canWinNim($n) {
        $remains = $n%4;
        if($remains !=0)
        {
            return true;
        }
        return false;
    }
}