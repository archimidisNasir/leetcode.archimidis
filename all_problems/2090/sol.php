
// Runtime: 914 ms
// Memory Usage: 39.6 MB



class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function getAverages($nums, $k) {
        $out = array();
        $len_nums = count($nums);
        for($i=0; $i<$len_nums; $i++)
        {
            $this_avg =-1;
            if($i>=$k && $i<$len_nums-$k)
            {
                $j = $i-$k;
                if(isset($last_val))
                {
                    $this_val = $last_val - $nums[$j-1];
                    $this_val = $this_val + $nums[$i+$k];
                }
                while(!isset($last_val) && $j<=$i+$k )
                {
                    $this_val += $nums[$j];
                    $j++;
                }
                $this_avg = intval($this_val/((($k+1)*2)-1));
                $last_val = $this_val;
                $this_val =0;
            }
            $out[$i] = $this_avg;
        }
        return $out;
    }
}





