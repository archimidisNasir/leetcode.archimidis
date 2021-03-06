
// Runtime: 23 ms
// Memory Usage: 19.2 MB



class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $max = pow(2,31)-1;
        $min = (pow(2,31))*(-1);
        
        for ($i=0; $i<strlen($s); $i++)
        {
            if (is_numeric($s[$i+1]) && $s[$i]=="+") 
            {
                $s[$i] =" ";
            }
            else if (!is_numeric($s[$i]) && $s[$i]!="-" && $s[$i]!=" ") 
            {
                $s[$i] ="z";
            }
        }
        
        $output =intval($s);
        
        if($output>$max)
        {
            return $max;
        }
        else if($output<$min)
        {
            return $min;
        }
        else
        {
            return $output;
        }
    }
}
