
// Runtime: 7 ms
// Memory Usage: 19.4 MB



class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $total =count($strs);
        $com_pre =0;
        $ok =0;
        for($i=0; $i<strlen($strs[0]); $i++)
        {
            for($j=0; $j<$total; $j++)
            {
                if($strs[0][$i] == $strs[$j][$i] )
                {
                    $ok =1;
                }
                else
                {
                    $ok =0;
                    break;
                }
            }
            
            
            if($ok==1)
            {
                $com_pre +=1;
                $ok =0;
            }
            else
            {
                break;
            }
        }
        return substr($strs[0], 0, $com_pre);
    }
}