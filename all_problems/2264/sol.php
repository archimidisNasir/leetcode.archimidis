
// Runtime: 18 ms
// Memory Usage: 19.1 MB



class Solution {

    /**
     * @param String $num
     * @return String
     */
    function largestGoodInteger($num) {
        if(strlen($num)<3)
        {
            return "";
        }
        $last_out ="";
        for($i=0; $i<strlen($num)-1; $i++)
        {
            if($num[$i]==$num[$i-1] && $num[$i]==$num[$i+1])
            {
                $this_out = $num[$i].$num[$i].$num[$i];
                if($last_out=="")
                {
                    $last_out = $this_out;
                }
                if(intval($this_out)>intval($last_out))
                {
                    $last_out = $this_out;
                }
            }
        }
        return $last_out;
    }
}