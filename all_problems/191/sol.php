
// Runtime: 4 ms
// Memory Usage: 19.3 MB



class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $out =0;
        $n = decbin($n)."";
        for($i=0; $i<strlen($n); $i++)
        {
            if($n[$i]=="1")
            {
                $out++;
            }
        }
        return $out;
    }
}