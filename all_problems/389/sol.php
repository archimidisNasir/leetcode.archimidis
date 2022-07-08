
// Runtime: 28 ms
// Memory Usage: 19.3 MB



class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $s = str_split($s);
        sort($s);
        $new_s = implode($s);
        
        $t = str_split($t);
        sort($t);
        $new_t = implode($t);
        
        
        for($i=0; $i<strlen($new_t); $i++)
        {
            if($new_s[$i] != $new_t[$i])
            {
                return $new_t[$i];
            }
        }
    }
}