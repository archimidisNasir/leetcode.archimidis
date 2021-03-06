
// Runtime: 15 ms
// Memory Usage: 19 MB



class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $negative =1;
        $max_int =pow(2, 31) -1;
        $min_int =pow(2, 31) * (-1);
        
        if($x<0)
        {
            $negative =-1;
        }
        $x = $x * $negative;
        
        if($x >= $max_int)
        {
            return 0;
        }
        else
        {
            $x = $x ."";
            $x = strrev($x);
            
            if(intval($x)*$negative >$max_int || intval($x)*$negative<$min_int)
            {
                return 0;
            }
        }
        return intval($x) *$negative;
        
    }
}

