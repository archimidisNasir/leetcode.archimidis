
// Runtime: 44 ms
// Memory Usage: 19.1 MB



class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function removeAnagrams($words) {
        if(count($words)==1)
        {
            return $words;
        }
        
        $arr_out = array();
        $arr_exists = array();
        for($i=count($words)-1; $i>0; $i--)
        {
            $br_this = str_split($words[$i]);
            sort($br_this);
            $word_i_this = implode($br_this);
            
            $br_this = str_split($words[$i-1]);
            sort($br_this);
            $word_i_prev = implode($br_this);
            
            if($word_i_this==$word_i_prev)
            {
                $words[$i] ="0";
            }
        }
        
        for($i=0; $i<count($words); $i++)
        {
            if($words[$i]!="0")
            {
                array_push($arr_out, $words[$i]);
            }
        }
        return $arr_out;
    }
}