
// Runtime: 602 ms
// Memory Usage: 32.7 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
        if($k==1)
        {
            return max($nums);
        }
        
        $len_nums = count($nums);
        $j =0;
        for($i=0; $i<$len_nums; $i++)
        {
            while($i+$j<$i+$k && !isset($last_val))
            {
                $this_val += $nums[$i+$j];
                $j++;
            }
            if(!isset($out))
            {
                $out = $this_val/$k;
            }
            if(isset($last_val) && isset($nums[$i+$k-1]))
            {
                $this_val = $last_val - $nums[$i-1];
                $this_val = $this_val + $nums[$i+$k-1];
                
                if(isset($out) && $this_val/$k>$out)
                {
                    $out = $this_val/$k;
                }
            }
            $last_val = $this_val;
            $this_val =0;
        }
        return $out;
    }
}