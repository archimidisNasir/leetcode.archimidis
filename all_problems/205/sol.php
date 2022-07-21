
// Runtime: 18 ms
// Memory Usage: 19.6 MB



class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $len_s = strlen($s);
        $arr_char_s = array();
        $arr_char_t = array();
        for($i=0; $i<$len_s; $i++)
        {
            if($arr_char_s[$s[$i]] =="" && $arr_char_t[$t[$i]] =="" )
            {
                $arr_char_s[$s[$i]] =$t[$i];
                $arr_char_t[$t[$i]] =$s[$i];
            }
            if($arr_char_s[$s[$i]] !=$t[$i] || $arr_char_t[$t[$i]] !=$s[$i])
            {
                return false;
            }
        }
        return true;
    }
}