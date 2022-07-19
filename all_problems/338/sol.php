
// Runtime: 44 ms
// Memory Usage: 27.7 MB



class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $out = array();
        for($i=0; $i<=$n; $i++)
        {
            array_push($out, substr_count(decbin($i)."","1"));
        }
        return $out;
    }
}