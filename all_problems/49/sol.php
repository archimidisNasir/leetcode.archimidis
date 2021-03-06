
// Runtime: 95 ms
// Memory Usage: 26.4 MB



class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        
        $out = array();
        $this_arr = array();
        $temp_arr = array();
        
        for($i=0; $i<count($strs); $i++)
        {
            $br_this = str_split($strs[$i]);
            sort($br_this);
            $this_word = implode($br_this);
            if($strs[$i] =="")
            {
                $this_word =0;
            }
            if(${"this_arr".$this_word}[0] =="")
            {
                ${"this_arr".$this_word} = array();
            }
            array_push(${"this_arr".$this_word}, $i);
        }
        
        for($i=0; $i<count($strs); $i++)
        {
            $br_this = str_split($strs[$i]);
            sort($br_this);
            $this_word = implode($br_this);
            
            if($strs[$i] =="")
            {
                $this_word =0;
            }
            if(isset(${"this_arr".$this_word}))
            {
                for($j=0; $j<count(${"this_arr".$this_word}); $j++)
                {
                    array_push($temp_arr, $strs[${"this_arr".$this_word}[$j]]);
                }
                unset(${"this_arr".$this_word});
                array_push($out, $temp_arr);
                $temp_arr = array();
            }
        }
        return $out;
    }
}



