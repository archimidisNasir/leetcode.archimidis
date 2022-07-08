
// Runtime: 125 ms
// Memory Usage: 25.5 MB



class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $br_this = str_split($s);
        sort($br_this);
        $this_s = implode($br_this);
        
        $br_this = str_split($t);
        sort($br_this);
        $this_t = implode($br_this);
        
        return ($this_s == $this_t);
    }
}