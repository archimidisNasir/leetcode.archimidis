
// Runtime: 11 ms
// Memory Usage: 19.2 MB 



class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $len_pat = strlen($pattern);
        $arr_char_pat = array();
        $arr_char_s = array();
        $arr_words = explode(" ", $s);
        if($len_pat != count($arr_words))
        {
            return false;
        }
        
        for($i=0; $i<$len_pat; $i++)
        {
            if($arr_char_pat[$pattern[$i]] =="" && $arr_char_s[$arr_words[$i]] =="" )
            {
                $arr_char_pat[$pattern[$i]] =$arr_words[$i];
                $arr_char_s[$arr_words[$i]] =$pattern[$i];
            }
            if($arr_char_pat[$pattern[$i]] !=$arr_words[$i] || $arr_char_s[$arr_words[$i]] !=$pattern[$i])
            {
                return false;
            }
        }
        return true;
        
    }
}