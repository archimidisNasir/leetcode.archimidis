
// Runtime: 38 ms
// Memory Usage: 19.3 MB



class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        
        $final_sum =0;
        
        $total_chars=strlen($s);
        if($total_chars>0)
        {
            for($i=0; $i<$total_chars; $i++)
            {
                if($s[$i] == "M")
                {
                    $final_sum +=1000;
                }
                else if($s[$i] =="D")
                {
                    $final_sum +=500;
                }
                else if($s[$i] =="L")
                {
                    $final_sum +=50;
                }
                else if($s[$i] =="V")
                {
                    $final_sum +=5;
                }
                else if($s[$i] =="C")
                {
                    if($s[$i+1] =="M")
                    {
                        $final_sum +=900;
                        $i +=1;
                    }
                    else if($s[$i+1] =="D")
                    {
                        $final_sum +=400;
                        $i +=1;
                    }
                    else
                    {
                        $final_sum +=100;
                    }
                }
                else if($s[$i] =="X")
                {
                    if($s[$i+1] =="C")
                    {
                        $final_sum +=90;
                        $i +=1;
                    }
                    else if($s[$i+1] =="L")
                    {
                        $final_sum +=40;
                        $i +=1;
                    }
                    else
                    {
                        $final_sum +=10;
                    }
                }
                else if($s[$i] =="I")
                {
                    if($s[$i+1] =="X")
                    {
                        $final_sum +=9;
                        $i +=1;
                    }
                    else if($s[$i+1] =="V")
                    {
                        $final_sum +=4;
                        $i +=1;
                    }
                    else
                    {
                        $final_sum +=1;
                    }
                }
            }
        }
        else
        {
            return 0;
        }
        
        return $final_sum;
    }
}