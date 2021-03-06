
// Runtime: 19 ms
// Memory Usage: 19.5 MB



class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        if($dividend==-2147483648 && $divisor==-1)
        {
            return 2147483647;
        }
        if($dividend==0)
        {
            return 0;
        }
        
        $pos_neg = 1;
        
        if($dividend<0)
        {
            $dividend = $dividend*(-1);
            $pos_neg = $pos_neg*(-1);
        }
        if($divisor<0)
        {
            $divisor = $divisor*(-1);
            $pos_neg = $pos_neg*(-1);
        }
        if($divisor==1 )
        {
            return $pos_neg*$dividend;
        }
        if($dividend<$divisor)
        {
            return 0;
        }
        

        
        $dividend = $dividend."";
        $divisor = $divisor."";
        $out_final ="";
        $this_div = $dividend[0];
        for($i=1; $i<=strlen($dividend); $i++)
        {
            if($this_div<$divisor)
            {
                $this_div = $this_div.$dividend[$i];
                if($this_div<$divisor && $i<strlen($dividend))
                {
                    $out_final = $out_final."0";
                }
                continue;
            }
            else
            {
                $remains = $this_div;
                while($remains>=$divisor)
                {
                    $remains = $remains - $divisor;
                    $quot++;
                } 
                $this_div = $remains;
                $out_final = $out_final.$quot;
                $quot =0;
                $i--;
            }
            
        }
        
        if($pos_neg== -1 )
        {
            $out_final = "-".$out_final;
        }
        return intval($out_final);
    }
}
