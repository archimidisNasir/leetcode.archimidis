
// Runtime: 135 ms
// Memory Usage: 22.1 MB



class Solution {

    /**
     * @param String $allowed
     * @param String[] $words
     * @return Integer
     */
    function countConsistentStrings($allowed, $words) {
        $all_let = "qwertyuioplkjhgfdsazxcvbnm";
        $arr_all_let = array();
        $arr1 = str_split($all_let);
        for($i=0; $i<26; $i++)
        {
            if(strpos($allowed, $arr1[$i])===false)
            {
                array_push($arr_all_let, $arr1[$i]);
            }
        }
        
        for($i=0; $i<count($words); $i++)
        {
            for($j=0; $j<count($arr_all_let); $j++)
            {
                if(strpos($words[$i], $arr_all_let[$j])!==false)
                {
                    $exists =1;
                    break;
                }
            }
            if($exists ==0)
            {
                $out_count++;
            }
            $exists =0;
            
        }
        return $out_count;
    }
}