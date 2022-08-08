
// Runtime: 000 ms
// Memory Usage: 000 MB+++++++++++++++++++++++++++++++++



class Solution {

    /**
     * @param String $num
     * @return String
     */
    function largestOddNumber($num) {
        $out ="";
        for($i=strlen($num)-1; $i>=0; $i--)
        {
            if(intval($num[$i])%2 ==1)
            {
                $out = substr($num, 0, $i+1);
                break;
            }
        }
        return $out;
    }
}